<?php

namespace Alxmdev\ApiTinyErp;

use Alxmdev\ApiTinyErp\api\Clientes;

class TinyErp
{
    private $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }


    /**
     * @return Informações
     */
    public function infos(): Informacoes
    {
        return new Informacoes($this->token);
    }


    /**
     * @return Clientes
     */
    public function clientes(): Clientes
    {
        return new Clientes($this->token);
    }

    /**
     * @return Produtos
     */
    public function produtos(): Produtos
    {
        return new Produtos($this->token);
    }

    /**
     * @return Tags
     */
    public function tags(): Tags
    {
        return new Tags($this->token);
    }

    /**
     * @return Precos
     */
    public function precos(): Precos
    {
        return new Precos($this->token);
    }

    /**
     * @return Vendedores
     */
    public function vendedores(): Vendedores
    {
        return new Vendedores($this->token);
    }

    /**
     * @return ContasReceber
     */
    public function contasReceber(): ContasReceber
    {
        return new ContasReceber($this->token);
    }

    /**
     * @return ContasPagar
     */
    public function contasPagar(): ContasPagar
    {
        return new ContasPagar($this->token);
    }

    /**
     * @return Fretes
     */
    public function fretes(): Fretes
    {
        return new Fretes($this->token);
    }

    /**
     * @return Pedidos
     */
    public function pedidos(): Pedidos
    {
        return new Pedidos($this->token);
    }

    /**
     * @return PDV
     */
    public function pdv(): PDV
    {
        return new PDV($this->token);
    }

    /**
     * @return Nfe
     */
    public function nfe(): Nfe
    {
        return new Nfe($this->token);
    }

        /**
     * @return Expedicoes
     */
    public function expedicoes(): Expedicoes
    {
        return new Expedicoes($this->token);
    }

    /**
     * @return Contratos
     */
    public function contratos(): Contratos
    {
        return new Contratos($this->token);
    }
}
