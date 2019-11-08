<?php

class M2M
{
    private $client;
    private $username = "";
    private $password = "";

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

    public function sendMessage($deviceMSISDN, $message)
    {
        $response = $this->client->sendMessage($this->username, $this->password, $deviceMSISDN, $message, true, "SMS");
        return $response;
    }

}
