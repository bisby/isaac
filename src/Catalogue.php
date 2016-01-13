<?php

namespace Bezdomni\IsaacRebirth;

class Catalogue
{
    private $offsets = [];

    private $characters = [];

    private $challenges = [];

    private $progresses = [];

    private $items = [];

    private $bosses = [];

    private $miniBosses = [];

    private $achievements = [];

    private $achievementHints = [];

    private $endings = [];

    public function __construct($header = "ISAACNG06R")
    {
        switch ($header)
        {
            case "ISAACNG08R":
                $this->load('afterbirth');
                break;
            case "ISAACNG06R":
            default:
                $this->load('rebirth');
        }
    }

    public function load($version)
    {
        $raw = file_get_contents(__DIR__."/../data/catalogue-$version.json");
        $json = json_decode($raw, true);
        if ($json === null)
        {
            throw new \Exception("Catalogue parse error: ".json_last_error_msg());
        }
        $this->characters = $json['characters']['items'];
        $this->endings = $json['endings']['items'];
        $this->stats = $json['stats'];
        $this->challenges = $json['challenges']['items'];
        $this->achievements = $json['achievements']['items'];
        $this->achievementHints = $json['achievements']['hints'];
        $this->bosses = $json['bosses']['items'];
        $this->miniBosses = $json['mini-bosses']['items'];
        $this->items = $json['items']['items'];
        $this->progresses = $json['progress']['items'];
        $this->offsets = [
            'achievements' => $json['achievements']['offset'],
            'progress'     => $json['progress']['offset'],
            'items'        => $json['items']['offset'],
            'mini_bosses'  => $json['mini-bosses']['offset'],
            'bosses'       => $json['bosses']['offset'],
            'challenges'   => $json['challenges']['offset']
        ];
    }
    // -- Getters --------------------------------------------------------------

    public function achievements()
    {
        return $this->achievements;
    }

    public function achievementHints()
    {
        return $this->achievementHints;
    }

    public function bosses()
    {
        return $this->bosses;
    }

    public function challenges()
    {
        return $this->challenges;
    }

    public function characters()
    {
        return $this->characters;
    }

    public function endings()
    {
        return $this->endings;
    }

    public function items()
    {
        return $this->items;
    }

    public function miniBosses()
    {
        return $this->miniBosses;
    }

    public function progresses()
    {
        return $this->progresses;
    }

    public function stats()
    {
        return $this->stats;
    }

    // -- Getters (single) -----------------------------------------------------

    public function achievement($id)
    {
        return isset($this->achievements[$id]) ? $this->achievements[$id] : null;
    }

    public function boss($id)
    {
        return isset($this->bosses[$id]) ? $this->bosses[$id] : null;
    }

    public function character($id)
    {
        return isset($this->characters[$id]) ? $this->characters[$id] : null;
    }

    public function ending($id)
    {
        return isset($this->endings[$id]) ? $this->endings[$id] : null;
    }

    public function item($itemID)
    {
        return isset($this->items[$itemID]) ? $this->items[$itemID] : null;
    }

    public function miniBoss($id)
    {
        return isset($this->miniBosses[$id]) ? $this->miniBosses[$id] : null;
    }

    public function progress($id)
    {
        return isset($this->progresses[$id]) ? $this->progresses[$id] : null;
    }

    public function offset($name)
    {
        return isset($this->offsets[$name]) ? $this->offsets[$name] : null;
    }
}
