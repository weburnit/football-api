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
     * ClientBuilder constructor.
     * @param $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @return ClientInterface
     */
    public function getClient(): ClientInterface
    {
        return new Client([
            'base_uri' => $this->apiHost,
            'timeout'  => 2000
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