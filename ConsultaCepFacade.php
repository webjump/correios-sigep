<?php
namespace CorreiosSigep;

use CorreiosSigep\ConsultaCep\RequestInterface;

class ConsultaCepFacade implements \CorreiosSigep\FacadeInterface
{
    public function __construct(
        \CorreiosSigep\Api $_api
    ) {
        $this->_api = $_api;
    }

    public function consultaCep(RequestInterface $request)
    {
        $this->_api->setRequest($request);
        return $this->_api->run();
    }
}
