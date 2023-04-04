<?php

namespace App\Service\Processor;

use App\Entity\CILFile;
use App\Entity\CILorderRequest;
use App\Models\TempCILRequests;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RequestToCILFileProcessor
{
    public function process(TempCILRequests $tempCilRequest): bool
    {
        $logPrefix = "cilOrderRequest ==> " . $tempCilRequest->id . ' <=== ';
        Log::info("json". $tempCilRequest->data);
        $data = json_decode($tempCilRequest->data);

        $tempCilRequest->synced = 1;
        $tempCilRequest->save();

        DB::beginTransaction();

        try {
            if ($data !== null) {
                $cilOrderRequest = CILorderRequest::where(['requestid' => $tempCilRequest->request_id])->firstOrFail();

                if (is_object($data->CILFile)) {
                    $this->prepareObject($cilOrderRequest, $data->CILFile);
                }

                if (is_array($data->CILFile)) {
                    foreach ($data->CILFile as $cilItem) {
                        $this->prepareObject($cilOrderRequest, $cilItem);
                    }
                }
            } else {
                Log::warning($logPrefix . "Data is null");
            }

            $tempCilRequest->synced = 2;
            $tempCilRequest->save();

            DB::commit();
        }
        catch (Exception $exception) {
            DB::rollBack();
            Log::warning("RequestToCILFileProcessor: exception during adding CILFiles", [$exception]);
            return false;
        }

        return true;
    }

    private function prepareObject(CILorderRequest $cilOrderRequest, mixed $cilFileItem): void
    {
        $cilFile = new CILFile();
        $cilFile->CILOrderRequestID = $cilOrderRequest->id;
        $cilFile->CILRequestNumber = $cilOrderRequest->cilrequestnumber ?? 0;
        $cilFile->RequestID = $cilOrderRequest->requestid;
        $cilFile->setGtin($cilFileItem->gtin ?? '');
        $cilFile->setSerialNumber($cilFileItem->serial_number ?? '');
        $cilFile->setSecurityCode($cilFileItem->security_code ?? '');
        $cilFile->setESignature($cilFileItem->e_signature ?? '');
        $cilFile->setHsCode($cilFileItem->hs_code ?? '');
        $cilFile->setBarcode($cilFileItem->barcode ?? '');
        $cilFile->setCodeTd($cilFileItem->code_td ?? '');
        $cilFile->setStyle($cilFileItem->style ?? '');
        $cilFile->setColor($cilFileItem->color ?? '');
        $cilFile->setSize($cilFileItem->size ?? '');
        $cilFile->setExtSize($cilFileItem->ext_size ?? '');
        $cilFile->setProductSpecific($cilFileItem->product_specific ?? '');
        $cilFile->setIndex($cilFileItem->index ?? 0);
        $cilFile->setFoc($cilFileItem->foc ?? false);
        $cilFile->save();
    }
}
