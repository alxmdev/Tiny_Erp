<?php

namespace Alxmdev\ApiTinyErp\api;

use Alxmdev\ApiTinyErp\request\HttpRequest;

class Pedidos extends HttpRequest
{
    /**
     * Pedidos constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        parent::__construct();
        $this->setToken($token);
    }
}
