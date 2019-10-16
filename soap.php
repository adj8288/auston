<?php

class TemperatureConverter
{
    private $client;

    public function __construct() //constructor (opening function/method)
    {
        $wsdl = "https://www.w3schools.com/xml/tempconvert.asmx?WSDL";                
        $this->client = new SoapClient($wsdl); //create a client based on the URL
    }

    public function CelsiusToFahrenheit($c) //retrieve element from the URL above
    {
        $response = $this->client->CelsiusToFahrenheit(array("Celsius" => $c));
        return $response->CelsiusToFahrenheitResult;
    }

    public function FahrenheitToCelsius($f) //retrieve element from the URL above
    {
        $response = $this->client->FahrenheitToCelsius(array("Fahrenheit" => $f));
        return $response->FahrenheitToCelsiusResult;
    }
}
