<?php


namespace FootballApi\Client\Model;


class Club
{
    public int $id;
    public string $name;
    public string $logo;
    public bool $winner;

    /**
     * Club constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->logo = $data['logo'];
        $this->winner = $data['winner'] ?: false;
    }
}
