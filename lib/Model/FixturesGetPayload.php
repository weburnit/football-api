<?php


namespace FootballApi\Client\Model;


class FixturesGetPayload
{
    public string $get;
    public array $parameters;
    public array $errors;
    public int $results;
    public array $paging;
    public array $response;

    public function __construct(array $data)
    {
        $this->response = [];
        $this->get = $data['get'] ?: [];
        $this->parameters = $data['parameters'] ?: [];
        $this->errors = $data['errors'] ?: [];
        $this->results = $data['results'] ?: [];

        foreach ($data['response'] as $datum) {
            array_push($this->response, new FixtureItem($datum));
        }
    }
}