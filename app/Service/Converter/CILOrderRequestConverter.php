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

        $tempCilRequest = new TempCILRequests(
            [
                'request_id' => $request->RequestID ?? '',
                'order_id' => $request->OrderID ?? '',
                'cil_request_number' => $request->CILRequestNumber ?? '0',
                'data' => json_encode($request),
                'created_at' => date('Y-m-d H:i:s'),
            ]
        );
        $tempCilRequest->save();

        return $cilOrderRequest;
    }
}
