<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempCILRequests extends Model
{
    use HasFactory;

    public $connection = 'mysql';
    public $table = 'temp_cil_requests';
}
