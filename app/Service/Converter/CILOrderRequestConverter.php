<?php

namespace App\Service\Converter;

use App\Entity\CILFile;
use App\Entity\CILorderRequest;
use App\Jobs\StoreCILFilesJob;
use App\Models\TempCILRequests;
use Illuminate\Support\Facades\DB;

class CILOrderRequestConverter implements ConverterServiceInterface
{
    public function convert($request): CILorderRequest
    {
        $cilOrderRequest = new CILorderRequest();
        $cilOrderRequest->setRequestID($request->RequestID);
        $cilOrderRequest->setOrderID($request->OrderID ?? '');
        $cilOrderRequest->setCILRequestNumber($request->CILRequestNumber ?? 0);
        $cilOrderRequest->save();

        $tempCilRequest = new TempCILRequests();
        $tempCilRequest->request_id = $request->RequestID ?? '';
        $tempCilRequest->order_id = $request->OrderID ?? '';
        $tempCilRequest->cil_request_number = $request->CILRequestNumber ?? '0';
        $tempCilRequest->data = json_encode($request);
        $tempCilRequest->created_at = date('Y-m-d H:i:s');
        $tempCilRequest->save();
        

        return $cilOrderRequest;
    }
}
