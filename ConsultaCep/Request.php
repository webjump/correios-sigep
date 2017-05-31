<?php
namespace CorreiosSigep\ConsultaCep;

class Request implements CorreiosSigep\ConsultaCep\RequestInterface
{
    protected $cep;

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }
}
