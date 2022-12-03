<?php

namespace App\Service\Converter;

use App\Entity\CILFile;
use App\Entity\CILorderRequest;

class CILOrderRequestConverter implements ConverterServiceInterface
{
    public function convert($request): CILorderRequest
    {
        $cilOrderRequest = new CILorderRequest();
        $cilOrderRequest->setRequestID($request->RequestID);
        $cilOrderRequest->setOrderID($request->OrderID ?? '');
        $cilOrderRequest->setCILRequestNumber($request->CILRequestNumber ?? 0);
        $cilOrderRequest->save();


        if (isset($request->CILFile) && is_object($request->CILFile)) {
            $cilFile = $request->CILFile;
            $request->CILFile = [];
            $request->CILFile[] = $cilFile;
        }

        $cilFiles = [];
        if (isset($request->CILFile) && is_array($request->CILFile)) {
            foreach ($request->CILFile as $cilFileItem) {
                $cilFile = new CILFile();
                $cilFile->CILOrderRequestID = $cilOrderRequest->id;
                $cilFile->CILRequestNumber =$request->CILRequestNumber ?? 0;
                $cilFile->RequestID = $request->RequestID;
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

                $cilFiles[] = $cilFile;
            }
        }

        $cilOrderRequest->setCILFile($cilFiles);

        return $cilOrderRequest;
    }
}
