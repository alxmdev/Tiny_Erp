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

    public function __construct(string $token)
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

    public function post()
    {
    }

    public function get()
    {

        $url = HttpRequest::TINY_ENDPOINT . "{$this->action}";

        $params = array(
            'token' => $this->token,
            'formato' => 'json'
        );
        $params = array_merge($params, $this->params);
        $request = new Request('GET', $url, [
            'query' => $params
        ]);
        $res = $this->client->sendAsync($request)->wait();
        echo $res->getBody();
    }
}
