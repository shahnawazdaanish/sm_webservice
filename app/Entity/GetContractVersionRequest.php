<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetContractVersionRequest extends Model
{
    use HasFactory;

    protected $table = 'get_contract_version_request';

    private string $RequestID;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return GetContractVersionRequest
     */
    public function setRequestID(string $RequestID): GetContractVersionRequest
    {
        $this->attributes['RequestID'] = $RequestID;
        $this->RequestID = $RequestID;
        return $this;
    }

}
