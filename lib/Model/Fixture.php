<?php


namespace FootballApi\Client\Model;


class Fixture
{
    public int $id;
    public string $referee;
    public string $timezone;
    public string $date;
    public Status $status;

    /**
     * Fixture constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->referee = $data['referee'] ?: '';
        $this->timezone = $data['timezone'];
        $this->date = $data['date'];
        $this->status = new Status($data['status']);
    }
}