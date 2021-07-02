<?php


namespace FootballApi\Client\Model;


class Fixture
{
    public int $id;
    public string $referee;
    public string $timezone;
    public string $date;
    public Status $status;
    public array $events;

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
        if (array_key_exists('events', $data) && is_array($data['events'])) {
            $events = [];
            foreach ($data['events'] as $event) {
                array_push($events, new Event($event));
            }
            $this->events = $events;
        }
    }
}