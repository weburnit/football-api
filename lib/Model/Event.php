<?php


namespace FootballApi\Client\Model;

/**
 * Class Event
 * @package FootballApi\Client\Model
 */
class Event
{
    public array $time;
    public array $team;
    public array $player;
    public array $assist;
    public string $type;
    public string $detail;

    /**
     * Event constructor.
     */
    public function __construct(array $data)
    {
        $this->time = $data['time'] ?: [];
        $this->team = $data['team'] ?: [];
        $this->player = $data['player'] ?: [];
        $this->assist = $data['assist'] ?: [];
        $this->type = $data['type'] ?: '';
        $this->detail = $data['detail'] ?: '';
    }

}