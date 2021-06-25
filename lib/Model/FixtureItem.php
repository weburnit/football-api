<?php


namespace FootballApi\Client\Model;


class FixtureItem
{
    public Fixture $fixture;
    public League $league;
    public array $teams;

    /**
     * FixtureItem constructor.
     */
    public function __construct(array $data)
    {
        $this->teams = [];
        if (isset($data['fixture'])) {
            $this->fixture = new Fixture($data['fixture']);
        }
        if (isset($data['league'])) {
            $this->league = new League($data['league']);
        }
        if (isset($data['teams'])) {
            foreach ($data['teams'] as $team) {
                array_push($this->teams, new Club($team));
            }
        }
    }
}
