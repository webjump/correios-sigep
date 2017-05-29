<?php
namespace CorreiosSigep\ConsultaCep;

interface ResponseInterface
{
    public function setResponse($response);
    public function getResponse();
    public function isSuccess();
    public function getErrorCode();
    public function getErrorMessage();
    public function getCep();
    public function getBairro();
    public function getCidade();
    public function getComplemento();
    public function getComplemento2();
    public function getEnd();
    public function getUf();
}
