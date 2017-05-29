<?php
namespace CorreiosSigep;

use CorreiosSigep\ConsultaCEP\RequestInterface;

interface FacadeInterface
{
    public function consultaCEP(RequestInterface $request);
}
