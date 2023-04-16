<?php
namespace App\Service\WebServiceConsumer;

use App\Entity\Consumer\AcceptOrderRequests;
use App\Entity\Consumer\ChangeOrderRequests;
use App\Entity\Consumer\GetStickerRequest;
use App\Service\Client\SportMasterSoapClient;
use SoapClient;
use stdClass;

class SportMasterWebServiceConsumer
{
    private SoapClient $soapClient;

    public function __construct()
    {
        $this->soapClient = (new SportMasterSoapClient())->get();
    }

    public function acceptOrderRequest(AcceptOrderRequests $acceptOrderRequests)
    {
        return $this->soapClient->AcceptOrderRequest(
            $this->wrapWithRequest($acceptOrderRequests)
        );
    }

    public function changeOrderRequest(ChangeOrderRequests $changeOrderRequests)
    {
        return $this->soapClient->ChangeOrderRequest(
            $this->wrapWithRequest($changeOrderRequests)
        );
    }

    public function getStickerRequest(GetStickerRequest $getStickerRequest)
    {
        return $this->soapClient->GetStickerRequest(
            $this->wrapWithRequest($getStickerRequest)
        );
    }

    private function wrapWithRequest($data)
    {
        $request = new StdClass();
        $request->Request = $data;
        return $request;
    }
}
