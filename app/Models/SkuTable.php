<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $labelId
 * @property $skuId
 * @property $tdCode
 * @property $quantity
 * @property $salesCountryName;
 * @property $comment;
 * @property $stickerId;
 * @property $stickerIdFieldSpecified;
 */
class SkuTable extends Model
{
    use HasFactory;
}
