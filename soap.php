<?php

class M2M
{
    private $client;
    private $username = "19aus_P2502255";
    private $password = "Singapore123";
    private $deviceMSISDN = "82887250";
    private $countryCode = "65";

    public function __construct()
    {
        $wsdl = "https://m2mconnect.ee.co.uk/orange-soap/services/MessageServiceByCountry?wsdl";                
        $this->client = new SoapClient($wsdl);
    }

    public function peekMessages()
    {
        $response = $this->client->peekMessages($this->username, $this->password, 10, "", "");
        return $response;
    }

    public function getDeliveryReports()
    {
        $response = $this->client->getDeliveryReports($this->username, $this->password, $this->deviceMSISDN, $this->countryCode);
        return $response;
    }

    public function sendMessage($message)
    {
        $response = $this->client->sendMessage($this->username, $this->password, $this->deviceMSISDN, $message, true, "");
        return $response;
    }
}
