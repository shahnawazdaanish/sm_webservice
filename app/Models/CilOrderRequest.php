<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $request_id
 * @property $order_id
 */
class CilOrderRequest extends Model
{
    use HasFactory;

    protected $table = 'CILORDERREQUESTSET';
}
