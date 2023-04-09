<?php

namespace App\Service\Client;

use App\Entity\SoapClient\Credentials;
use App\Entity\SoapClient\RequestMessage;
use SoapClient;

class SportMasterSoapClient
{
    private SoapClient $client;

    public function __construct()
    {
        $this->client = new SoapClient(
            env('SPORT_MASTER_WEBSERVICE_URL') ?? '',
            [
                'trace' => true,
                'exception' => true,
                'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
                'soap_version' => SOAP_1_1,
                'classmap' => [
                    'Credentials' => Credentials::class,
                    'RequestMessage' => RequestMessage::class,
                ],
            ]
        );
    }

    public function get(): SoapClient
    {
        return $this->client;
    }
}
