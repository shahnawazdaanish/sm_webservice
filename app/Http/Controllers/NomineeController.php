<?php

namespace App\Http\Controllers;

use App\Service\NomineeService;
use Illuminate\Support\Facades\Log;
use SoapHeader;
use SoapServer;
use Symfony\Component\HttpFoundation\Response;

class NomineeController extends Controller
{
    public function index(NomineeService $nomineeService): Response
    {
        Log::info(json_encode(request()->all()));
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
        $result = ob_get_contents();
        $response->setContent(ob_get_clean());

        $result = str_replace(["SOAP-ENV", 'ns1:', ':ns1'], ["soap", '', ''], $result);
        $length = strlen($result);

        header("Content-Length: ".$length);

        return $response->setContent($result);
    }
}
