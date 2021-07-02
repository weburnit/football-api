<?php


namespace FootballApi\Client\Model;


class FixtureItem
{
    public Fixture $fixture;
    public League $league;
    public array $teams;
    public array $events;

    /**
     * FixtureItem constructor.
     */
    public function __construct(array $data)
    {
        $this->teams = [];
        $this->events = [];
        if (isset($data['fixture'])) {
            $this->fixture = new Fixture($data['fixture']);
        }
        if (isset($data['league'])) {
            $this->league = new League($data['league']);
        }
        if (isset($data['teams'])) {
            foreach ($data['teams'] as $key => $team) {
                if (!is_array($team)) {
                    continue;
                }
                $score = 0;
                if (array_key_exists('goals', $data) && array_key_exists($key, $data['goals'])) {
                    $score = $data['goals'][$key];
                }
                $this->teams[$key] = new Club($team, $score);
            }
        }
    }
}
