<?php

namespace App\Service\Converter;

use App\Entity\FinalAcceptOrderRequest;
use App\Entity\FinalAcceptOrderRequests;
use App\Entity\OrderRequest;
use App\Entity\OrderRequests;
use App\Entity\SkuTable;

class OrderRequestConverter implements ConverterServiceInterface
{
    public function convert($request): OrderRequests
    {
        $orderRequestList = [];
        if (isset($request->OrderRequest) && is_array($request->OrderRequest)) {
           foreach ($request->OrderRequest as $orderRequestItem) {

               $orderRequest = new OrderRequest();
               $orderRequest->RequestID = $request->RequestID;
               $orderRequest->setOrderID($orderRequestItem->OrderID ?? '');
               $orderRequest->setVPOrderID($orderRequestItem->VPOrderID ?? '');
               $orderRequest->setVersion($orderRequestItem->Version ?? '');
               $orderRequest->setCollectionID($orderRequestItem->CollectionID ?? '');
               $orderRequest->setCollectionName($orderRequestItem->CollectionName ?? '');
               $orderRequest->setIsCancelled($orderRequestItem->IsCancelled ?? '');
               $orderRequest->setNomineeID($orderRequestItem->NomineeID ?? '');
               $orderRequest->setNomineeName($orderRequestItem->NomineeName ?? '');
               $orderRequest->setVendorID($orderRequestItem->VendorID ?? '');
               $orderRequest->setVendorName($orderRequestItem->VendorName ?? '');
               $orderRequest->setFactoryID($orderRequestItem->FactoryID ?? '');
               $orderRequest->setFactoryName($orderRequestItem->FactoryName ?? '');
               $orderRequest->setDeliveryAddress($orderRequestItem->DeliveryAddress ?? '');
               $orderRequest->setComment($orderRequestItem->Comment ?? '');
               $orderRequest->setCILQuantity($orderRequestItem->CILQuantity ?? '');
               $orderRequest->setCILRequestQuantity($orderRequestItem->CILRequestQuantity ?? '');
               $orderRequest->save();

               if (isset($orderRequestItem->SkuTable)) {
                   $skuTables = [];
                   foreach ($orderRequestItem->SkuTable as $skuTableItem) {
                       $skuTable = new SkuTable();
                       $skuTable->RequestID = $request->RequestID;
                       $skuTable->OrderRequestID = $orderRequest->id;
                       $skuTable->setLabelID($skuTableItem->LabelID ?? '');
                       $skuTable->setSkuID($skuTableItem->SkuID ?? '');
                       $skuTable->setTDCode($skuTableItem->TDCode ?? '');
                       $skuTable->setQuantity($skuTableItem->Quantity ?? '');
                       $skuTable->setSalesCountryID($skuTableItem->SalesCountryID ?? '');
                       $skuTable->setSalesCountryName($skuTableItem->SalesCountryName ?? '');
                       $skuTable->setComment($skuTableItem->Comment ?? '');
                       $skuTable->setStickerID($skuTableItem->StickerID ?? '');
                       $skuTable->save();

                       $skuTables[] = $skuTable;
                   }
                   $orderRequest->setSkuTables($skuTables);
               }

               $orderRequestList[] = $orderRequest;
           }
        }

        $orderRequests = new OrderRequests();
        $orderRequests->setRequestID($request->RequestID);
        $orderRequests->setOrderRequests($orderRequestList);
        return $orderRequests;
    }
}
