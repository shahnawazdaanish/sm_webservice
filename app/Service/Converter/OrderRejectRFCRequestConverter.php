<?php

namespace App\Service\Converter;

use App\Entity\FinalAcceptOrderRequest;
use App\Entity\FinalAcceptOrderRequests;
use App\Entity\OrderRejectRFCRequest;

class OrderRejectRFCRequestConverter implements ConverterServiceInterface
{
    public function convert($request): array
    {
        if (isset($request->OrderRejectRFCRequest) && is_object($request->OrderRejectRFCRequest)) {
            $requestObject = $request->OrderRejectRFCRequest;
            $request->OrderRejectRFCRequest = [];
            $request->OrderRejectRFCRequest[] = $requestObject;
        }

        $orderRejectRFCRequests = [];
        if (isset($request->OrderRejectRFCRequest) && is_array($request->OrderRejectRFCRequest)) {
            foreach ($request->OrderRejectRFCRequest as $orderRejectRFCRequestItem) {
                $orderRejectRFCRequest = new OrderRejectRFCRequest();
                $orderRejectRFCRequest->setRequestID($request->RequestID ?? '');
                $orderRejectRFCRequest->setRFCID($orderRejectRFCRequestItem->RFCID ?? '');
                $orderRejectRFCRequest->setComment($orderRejectRFCRequestItem->Comment ?? '');
                $orderRejectRFCRequest->save();

                $orderRejectRFCRequests[] = $orderRejectRFCRequest;
            }
        }

        return $orderRejectRFCRequests;
    }
}
