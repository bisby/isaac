<?php

namespace Bezdomni\IsaacRebirth;

use SplFileInfo;

use Silex\Application;

use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Processes the barcode request and forms a response.
 */
class Controller
{
    /**
     * Database access object.
     *
     * @var Bezdomni\IsaacRebirth\Archiver
     */
    private $archiver;

    public function __construct(Archiver $archiver)
    {
        $this->archiver = $archiver;
    }

    public function indexAction(Application $app)
    {
        $recents = $app['archiver']->recent();

        $content = $app['twig']->render("index.twig", [
            "recents" => $recents
        ]);

        return new Response($content, 200, [
            'Cache-Control' => 's-maxage=300'
        ]);
    }

    public function uploadAction(Application $app, Request $request)
    {
        // Read file from request
        $file = $request->files->get('savegame');
        if ($file === null) {
            throw new BadRequestHttpException(
                "Savegame data not found in request. Did you chose a savegame
                before pressing Submit?"
            );
        }

        // // Check upload was successful
        if ($file->getError() !==  UPLOAD_ERR_OK) {
            throw new BadRequestHttpException(
                "An error occured while uploading your savegame. Please try
                again and report the problem if it persists."
            );
        }

        // Read the data
        $data = $file->openFile()->fread(4096);

        // Check header
        $header = substr($data, 0, 14);
        if (!in_array($header, ['ISAACNGSAVE06R', 'ISAACNGSAVE08R'])) {
            throw new BadRequestHttpException(
                "Invalid file header. A savegame file should start with the
                string `ISAACNGSAVEXXR`.\n\nYou either uploaded a file wich is
                not a BOIR savegame, or the savegame version is not supported."
            );
        }

        // Calculate the hash which is used to identify the savegame
        $hash = md5($data);

        // If file already exists, skip the upload
        if ($app['archiver']->exists($hash)) {
            return $app->redirect('/show/' . $hash);
        }

        // Save the file
        $app['archiver']->save($data);

        // Redirect to show
        return $app->redirect('/show/' . $hash);
    }

    public function showAction(Application $app, Request $request, $hash)
    {
        $record = $app['archiver']->load($hash);
        if ($record === null) {
            throw new NotFoundHttpException("Savegame not found");
        }

        $data = base64_decode($record->data);
        $save = new SaveGame($data);

        $content = $app['twig']->render("show.twig", [
            "hash" => $record->hash,
            "save" => $save,
            "uploaded" => $record->uploaded,
            "catalogue" => $save->catalogue()
        ]);

        return new Response($content, 200, [
            'Cache-Control' => 's-maxage=86400'
        ]);
    }

    public function downloadAction(Application $app, Request $request, $hash)
    {
        $record = $app['archiver']->load($hash);
        if ($record === null) {
            throw new NotFoundHttpException("Savegame not found");
        }

        $data = base64_decode($record->data);

        return new Response($data, 200, [
            'Cache-Control' => 's-maxage=86400',
            'Content-Disposition' => 'attachment; filename=persistentgamedataX.dat'
        ]);
    }
}
