<?php

namespace App\Service\Converter;

use App\Entity\Sticker;
use InvalidArgumentException;

class StickerXMLToStickerConverter implements ConverterServiceInterface
{
    /**
     * @param $request
     * @param string $requestId
     * @return array|Sticker
     */
    public function convert($request, string $requestId=''): array
    {
        $stickers = [];

        if (empty($requestId)) {
            throw new InvalidArgumentException('Request ID cannot be empty');
        }

        if (isset($request->document)) {
            foreach ($request->document as $document) {
                $sticker = new Sticker();
                $sticker->requestid = $requestId;
                $sticker->stickerid = $document->docID;
                $sticker->brand = $document->brand ?? '';
                $sticker->style = $document->style ?? '';
                $sticker->color = $document->color ?? '';
                $sticker->size_eu = $document->size_eu ?? '';
                $sticker->size_state_standard = $document->size_state_standard ?? '';
                $sticker->size_mp = $document->size_mp ?? '';
                $sticker->safety_standard = $document->safety_standard ?? '';
                $sticker->max_wt = $document->max_wt ?? '';
                $sticker->completeness_code = $document->completeness_code ?? '';
                $sticker->completeness_name = $document->completeness_name ?? '';
                $sticker->code_td = $document->code_td ?? '';
                $sticker->barcode = $document->barcode ?? '';
                $sticker->country_of_origin = $document->country_of_origin ?? '';
                $sticker->certification = $document->certification ?? '';
                $sticker->state_standard = $document->state_standard ?? '';
                $sticker->size = $document->size ?? '';
                $sticker->ext_size = $document->ext_size ?? '';
                $sticker->name = $document->name ?? '';
                $sticker->composition = $document->composition ?? '';
                $sticker->supplier_name = $document->supplier_name ?? '';
                $sticker->supplier_address = $document->supplier_address ?? '';
                $sticker->product_specific = $document->product_specific ?? '';
                $sticker->color_name = $document->color_name ?? '';
                $sticker->importer = $document->importer ?? '';
                $sticker->manufactured_date = $document->manufactured_date ?? '';
                $sticker->comment = $document->comment ?? '';
                $sticker->multipack_qty = $document->multipack_qty ?? '';
                $sticker->multipack_barcode = $document->multipack_barcode ?? '';
                $sticker->size_us = $document->size_us ?? '';
                $sticker->size_uk = $document->size_uk ?? '';
                $sticker->label_assignment = $document->label_assignment ?? '';
                $sticker->washing = $document->washing ?? '';
                $sticker->bleaching = $document->bleaching ?? '';
                $sticker->drying = $document->drying ?? '';
                $sticker->ironing = $document->ironing ?? '';
                $sticker->professional_textile_care = $document->professional_textile_care ?? '';
                $sticker->additional_care = $document->additional_care ?? '';
                $sticker->licensor_product_code = $document->licensor_product_code ?? '';
                $sticker->save();

                $stickers[] = $sticker;
            }
        }

        return $stickers;
    }
}
