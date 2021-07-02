<?php


namespace FootballApi\Client\Model;


class Club
{
    public int $id;
    public string $name;
    public string $logo;
    public bool $winner;
    public int $score;

    /**
     * Club constructor.
     * @param array $data
     */
    public function __construct(array $data, int $score)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->logo = $data['logo'];
        $this->winner = $data['winner'] ?: false;
        $this->score = $score;
    }
}
