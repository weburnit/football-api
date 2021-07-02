<?php


namespace FootballApi\Client\Model;


class Status
{
    const POSTPONE = "Match Postponed";
    const FIRST_HALF = "First Half";
    const CANCELLED = "Match Cancelled";
    const NOT_STARTED = "Not Started";
    const SECOND_HALF = "Second Half";
    const FINISHED = "Match Finished";
    const TBD = "Time to be defined";

    /**
     * @var string|mixed
     */
    public string $long;
    public string $short;
    public string $elapsed;

    /**
     * Status constructor.
     */
    public function __construct(array $data)
    {
        $this->long = $data['long'];
        $this->elapsed = $data['elapsed'];
    }
}