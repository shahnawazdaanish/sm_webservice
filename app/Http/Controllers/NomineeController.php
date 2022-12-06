<?php

namespace App\Http\Controllers;

use App\Service\NomineeService;
use SoapServer;
use Symfony\Component\HttpFoundation\Response;

class NomineeController extends Controller
{
    public function index(NomineeService $nomineeService): Response
    {
        $soapServer = new SoapServer(
            storage_path('app/soap.wsdl'),
            [
                'soap_version' => (defined('SOAP_1_2'))?SOAP_1_2:SOAP_1_1,
            ]
        );
        $soapServer->setObject($nomineeService);

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');

        ob_start();
        $soapServer->handle();
        $response->setContent(ob_get_clean());

        return $response;
    }
}
