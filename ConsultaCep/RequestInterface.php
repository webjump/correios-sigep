<?php
namespace CorreiosSigep\ConsultaCep;

interface RequestInterface
{
    public function getCep();

    public function setCep($cep);
}
