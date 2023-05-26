<?php

namespace Alxmdev\ApiTinyErp\api;

use Alxmdev\ApiTinyErp\request\HttpRequest;

class Informacoes extends HttpRequest
{
    /**
     * Informacoes constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->setToken($token);
    }

    public function getAccountInformation()
    {
        return $this->setAction("info.php")->get()->getCallback();
    }
}
