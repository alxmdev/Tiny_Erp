<?php

namespace Alxmdev\ApiTinyErp\api;

use Alxmdev\ApiTinyErp\request\HttpRequest;

class ContasReceber extends HttpRequest
{
    /**
     * ContasReceber constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        parent::__construct();
        $this->setToken($token);
    }
}
