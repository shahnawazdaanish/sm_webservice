<?php

namespace App\Service\Converter;

use App\Entity\FinalAcceptOrderRequest;
use App\Entity\FinalAcceptOrderRequests;
use App\Entity\GetContractVersionRequest;

class GetContractVersionRequestConverter implements ConverterServiceInterface
{
    public function convert($request): GetContractVersionRequest
    {
        $getContractVersionRequest = new GetContractVersionRequest();
        $getContractVersionRequest->setRequestID($request->RequestID);
        $getContractVersionRequest->save();

        return $getContractVersionRequest;
    }
}
