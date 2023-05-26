<?php

namespace Alxmdev\ApiTinyErp\request;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class HttpRequest
{

    const TINY_ENDPOINT = 'https://api.tiny.com.br/api2/';
    private $token;
    private $client;

    /***
     * Parâmetros do REST
     */
    private $action;
    /** @var */
    private $callback;
    /** @var */
    private $params;

    public function __construct()
    {
        $this->client = new Client();
    }


    public function setToken(string $token)
    {
        $this->token = $token;
        return $token;
    }

    /**
     * @param array|null $params
     *
     * @return $this
     */
    public function setParams(?array $params): HttpRequest
    {
        $this->params = $params;
        return $this;
    }

    /**
     * @param string $action
     *
     * @return $this
     */
    public function setAction(string $action): HttpRequest
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return object
     */
    public function getCallback(): ?object
    {
        return $this->callback;
    }

    public function post(): HttpRequest
    {

        return $this;
    }

    public function get(): HttpRequest
    {

        $url = HttpRequest::TINY_ENDPOINT . "{$this->action}";
        $params = array(
            'token' => $this->token,
            'formato' => 'json'
        );
        if ($this->params != null) {
            $params = array_merge($params, $this->params);
        }

        $response = $this->client->get($url, ['query' => $params])->getBody()->getContents();
        $this->callback = json_decode($response);
        return $this;
    }
}
