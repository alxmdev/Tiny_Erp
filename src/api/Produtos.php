<?php

namespace Alxmdev\ApiTinyErp\api;

use Alxmdev\ApiTinyErp\request\HttpRequest;

class Produtos extends HttpRequest
{
    /**
     * Produtos constructor.
     *
     * @param string $token
     */
    public function __construct(string $token)
    {
        parent::__construct();
        $this->setToken($token);
    }

    public function getProduct(int $id): ?object
    {
        $params = array("id  " => $id);
        return $this->setAction("produto.obter.php")->setParams($params)->get()->getCallback();
    }

    public function searchProducts(?array $params): ?object
    {
        return $this->setAction("produtos.pesquisa.php")->setParams($params)->get()->getCallback();
    }

    public function searchProductsByName(string $pesquisa): ?object
    {
        $params = array("pesquisa" => "$pesquisa");
        return $this->setAction("produtos.pesquisa.php")->setParams($params)->get()->getCallback();
    }
}
