<?php

namespace Alxmdev\ApiTinyErp\api;

use Alxmdev\ApiTinyErp\request\HttpRequest;

class Clientes extends HttpRequest
{

    /**
     * Clientes constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        parent::__construct();
        $this->setToken($token);
    }
}
