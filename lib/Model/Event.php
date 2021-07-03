<?php


namespace FootballApi\Client\Model;

/**
 * Class Event
 * @package FootballApi\Client\Model
 */
class Event
{
    /**
     * ['elapsed' => 10, 'extra' => null]
     * @var array|mixed
     */
    public array $time;

    /**
     * ['id', 'name', 'logo']
     * @var array|mixed
     */
    public array $team;

    /**
     * ['id', 'name']
     * @var array|mixed
     */
    public array $player;
    /**
     * ['id', 'name']
     * @var array|mixed
     */
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