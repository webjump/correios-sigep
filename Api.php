<?php
namespace CorreiosSigep;

use Braintree\Exception;
use CorreiosSigep\ConsultaCep\RequestInterface;

class Api
{
    protected $_requestClient;
    protected $_soapClient;
    protected $_responseClient;


    public function __construct(
        \CorreiosSigep\ConsultaCep\Request $_requestClient,
        \Zend\Soap\Client $_soapClient,
        \CorreiosSigep\ConsultaCep\Response $_responseClient
    ) {
        $this->setRequest($_requestClient);
        $this->_soapClient = $_soapClient;
        $this->_responseClient = $_responseClient;
    }

    public function setRequest(RequestInterface $_requestClient)
    {
        $this->_requestClient = $_requestClient;
        return $this;
    }

    public function getRequest()
    {
        return $this->_requestClient;
    }

    public function run()
    {
        try {
            $wsdl = 'https://apps.correios.com.br/SigepMasterJPA/AtendeClienteService/AtendeCliente?wsdl';
            $options = array('soap_version' => 1);
            $params = array('cep' => preg_replace('/[^0-9]/', '', $this->getRequest()->getCep()));

            $this->_soapClient->setWSDL($wsdl);
            $this->_soapClient->setOptions($options);
            $result = $this->_soapClient->consultaCEP($params);
            $this->_responseClient->setResponse($result);
        } catch (\Exception $e) {
            return ['response' => ['error' => true, 'message' => $e->getMessage(), 'return' => '']];
        }

        return ['response' => ['error' => false, 'message' => 'CEP Encontrado', 'return' => $this->_responseClient->getResponse()->return]];
    }
}
