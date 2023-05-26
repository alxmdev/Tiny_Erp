<?php

namespace Alxmdev\ApiTinyErp\api;

use Alxmdev\ApiTinyErp\request\HttpRequest;

class Nfe extends HttpRequest
{
    /**
     * NFE constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->setToken($token);
    }
}
