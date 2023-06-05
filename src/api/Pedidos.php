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

    public function searchOrders(?array $params): ?object
    {
        return $this->setAction("pedidos.pesquisa.php")->setParams($params)->get()->getCallback();
    }

    public function searchOrdersById(string $id): ?object
    {
        $params = array("id" => "$id");
        return $this->setAction("pedidos.pesquisa.php")->setParams($params)->get()->getCallback();
    }

    public function searchOrdersByClient(string $cliente): ?object
    {
        $params = array("cliente" => "$cliente");
        return $this->setAction("pedidos.pesquisa.php")->setParams($params)->get()->getCallback();
    }
    public function searchOrdersByMarker(string $marcador): ?object
    {
        $params = array("marcador" => "$marcador");
        return $this->setAction("pedidos.pesquisa.php")->setParams($params)->get()->getCallback();
    }

    public function searchOrdersByDate(string $dataInicial, string $dataFinal, int $page = 1): ?object
    {
        $params = array(
            "dataInicial" => "$dataInicial",
            "dataFinal" => "$dataFinal",
            "pagina" => $page
        );
        return $this->setAction("pedidos.pesquisa.php")->setParams($params)->get()->getCallback();
    }

    public function searchOrdersByCpfCnpj(string $cpfCnpj): ?object
    {
        $params = array("cpf_cnpj  " => "$cpfCnpj");
        return $this->setAction("pedidos.pesquisa.php")->setParams($params)->get()->getCallback();
    }

    public function getOrder(int $id): ?object
    {
        $params = array("id  " => $id);
        return $this->setAction("pedido.obter.php")->setParams($params)->get()->getCallback();
    }
}
