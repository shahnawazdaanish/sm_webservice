<?php

namespace App\Service\Converter;

use App\Entity\FinalAcceptOrderRequest;
use App\Entity\FinalAcceptOrderRequests;

class FinalAcceptOrderRequestsConverter implements ConverterServiceInterface
{
    public function convert($request): FinalAcceptOrderRequests
    {
        $finalAcceptOrderRequests = new FinalAcceptOrderRequests();
        $finalAcceptOrderRequests->setRequestID($request->RequestID);
        $finalAcceptOrderRequests->save();


        $finalAcceptOrderRequestList = [];
        if (isset($request->FinalAcceptOrderRequest) && is_array($request->FinalAcceptOrderRequest)) {
           foreach ($request->FinalAcceptOrderRequest as $finalAcceptOrderRequestItem) {
               $finalAcceptOrderRequest = new FinalAcceptOrderRequest();
               $finalAcceptOrderRequest->setVersion($finalAcceptOrderRequestItem->Version ?? 0);
               $finalAcceptOrderRequest->setOrderID($finalAcceptOrderRequestItem->OrderID ?? '');
               $finalAcceptOrderRequest->fao_requests_id = $finalAcceptOrderRequests->id;
               $finalAcceptOrderRequest->save();

               $finalAcceptOrderRequestList[] = $finalAcceptOrderRequest;
           }
        }

        $finalAcceptOrderRequests->setFinalAcceptOrderRequest($finalAcceptOrderRequestList);

        return $finalAcceptOrderRequests;
    }
}
