<?php
/**
 * Created by PhpStorm.
 * User: DJ
 * Date: 9/21/2019
 * Time: 4:10 PM
 */




class server
{

    public function __construct()
    {

    }

    public function getStudentName($id_array)
    {
        return 'Sam';

    }
}

$params = array('uri' => 'codev/soap/server.php');
$server = new SoapServer(NULL, $params);
$server -> setClass('server');
$server->handle();

?>