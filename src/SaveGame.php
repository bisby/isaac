<?php

namespace Bezdomni\IsaacRebirth;

class SaveGame
{
    private $data;

    private $catalogue;

    public function __construct($data)
    {
        $this->data = $data;
        $this->catalogue = new Catalogue();
    }

    public static function load($path)
    {
        $data = file_get_contents($path);
        if ($data === false) {
            throw new \Exception("Cannot load savegame.");
        }

        return new self($data);
    }

    // -------------------------------------------------------------------------

    public function catalogue()
    {
        return $this->catalogue;
    }

    public function stats()
    {
        $stats = [];
        foreach ($this->catalogue->stats() as $name => $offset) {
            $stats[$name] = $this->getLong($offset);
        }
        return $stats;
    }

    // -- Get single -----------------------------------------------------------

    public function boss($bossID)
    {
        $offset = $this->catalogue->offsets('bosses') + $bossID - 1;
        return $this->getChar($offset);
    }

    public function item($itemID)
    {
        $offset = $this->catalogue->offsets('items') + $itemID - 1;
        return $this->getChar($offset);
    }

    // -- Get range ------------------------------------------------------------

    public function achievements()
    {
        $catalogue = $this->catalogue->achievements();
        return $this->many($catalogue, $this->catalogue->offsets('achievements'));
    }

    public function bosses()
    {
        $catalogue = $this->catalogue->bosses();
        return $this->many($catalogue, $this->catalogue->offsets('bosses'));
    }

    public function challenges()
    {
        $catalogue = $this->catalogue->challenges();
        return $this->many($catalogue, $this->catalogue->offsets('challenges'));
    }

    public function items()
    {
        $catalogue = $this->catalogue->items();
        return $this->many($catalogue, $this->catalogue->offsets('items'));
    }

    public function miniBosses()
    {
        $catalogue = $this->catalogue->miniBosses();
        return $this->many($catalogue, $this->catalogue->offsets('mini_bosses'));
    }

    public function progress()
    {
        $characters = $this->catalogue->characters();
        $progresses = $this->catalogue->progresses();

        $offset = $this->catalogue->offsets('progress');
        $return = [];
        foreach ($progresses as $pid => $progress) {
            foreach ($characters as $cid => $character) {
                $value = $this->getLong($offset);
                $return[$cid][$pid] = $value;
                $offset += 4;
            }
        }

        return $return;
    }

    public function many($catalogue, $startOffset)
    {
        foreach ($catalogue as $id => $name) {
            $offset = $startOffset + $id - 1;
            $catalogue[$id] = $this->getChar($offset);
        }

        return $catalogue;
    }

    // -- Helpers --------------------------------------------------------------

    public function get($offset, $length = 1)
    {
        return substr($this->data, $offset, $length);
    }

    public function getChar($offset)
    {
        $str = $this->get($offset, 1);
        $chars = unpack('C', $str);
        return reset($chars);
    }

    public function getLong($offset)
    {
        $str = $this->get($offset, 4);
        $chars = unpack('L', $str);
        return reset($chars);
    }

    public function getShort($offset)
    {
        $str = $this->get($offset, 2);
        $chars = unpack('S', $str);
        return reset($chars);
    }
}
