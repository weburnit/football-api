<?php


namespace FootballApi\Client\Model;


class League
{
    public int $id;
    public string $name;
    public string $country;
    public string $logo;
    public int $season;

    /**
     * League constructor.
     */
    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->country = $data['country'];
        $this->logo = $data['logo'];
        $this->season = $data['season'];
    }
}
