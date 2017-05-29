<?php
namespace CorreiosSigep\ConsultaCep;

class Response implements \CorreiosSigep\ConsultaCep\ResponseInterface
{
    protected $response;

    public function setResponse($response)
    {
        return $this->response = $response;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function isSuccess()
    {
        return true;
    }

    public function getErrorCode()
    {
        return null;
    }

    public function getErrorMessage()
    {
        return null;
    }

    public function getCep()
    {
        return $this->getResponse()->return->cep;
    }

    public function getBairro()
    {
        return $this->getResponse()->return->bairro;
    }

    public function getCidade()
    {
        return $this->getResponse()->return->cidade;
    }

    public function getComplemento()
    {
        return $this->getResponse()->return->complemento;
    }

    public function getComplemento2()
    {
        return $this->getResponse()->return->complemento2;
    }

    public function getEnd()
    {
        return $this->getResponse()->return->end;
    }

    public function getUf()
    {
        return $this->getResponse()->return->uf;
    }
}
