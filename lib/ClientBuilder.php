<?php


namespace FootballApi\Client;


use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * Class ClientBuilder
 * @package FootballApi\Client
 */
class ClientBuilder
{
    /**
     * @var string
     */
    private string $apiHost = 'https://api-football-v1.p.rapidapi.com';

    /**
     * @var string
     */
    private string $key;

    /**
     * @var int
     */
    private int $timeout;

    /**
     * ClientBuilder constructor.
     * @param $key
     */
    public function __construct(string $key, int $timeout = 5)
    {
        $this->key = $key;
        $this->timeout = $timeout;
    }

    /**
     * @return ClientInterface
     */
    public function getClient(): ClientInterface
    {
        return new Client([
            'base_uri' => $this->apiHost,
            'timeout'  => $this->timeout,
        ]);
    }

    /**
     * @return HeaderSelector
     */
    public function getSelector(): HeaderSelector
    {
        return new HeaderSelector($this->key);
    }

    /**
     * @return Configuration
     */
    public function getConfiguration(): Configuration
    {
        $config = new Configuration();

        $config->setHost($this->apiHost);

        return $config;
    }
}