<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CILorderRequest extends Model
{
    use HasFactory;

    protected $table = 'cil_order_request';

    private string $RequestID;
    private string $OrderID;
    private int $CILRequestNumber;
    private array $CILFile;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return CILorderRequest
     */
    public function setRequestID(string $RequestID): CILorderRequest
    {
        $this->attributes['RequestID'] = $RequestID;
        $this->RequestID = $RequestID;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderID(): string
    {
        return $this->OrderID;
    }

    /**
     * @param string $OrderID
     * @return CILorderRequest
     */
    public function setOrderID(string $OrderID): CILorderRequest
    {
        $this->attributes['OrderID'] = $OrderID;
        $this->OrderID = $OrderID;
        return $this;
    }

    /**
     * @return int
     */
    public function getCILRequestNumber(): int
    {
        return $this->CILRequestNumber;
    }

    /**
     * @param int $CILRequestNumber
     * @return CILorderRequest
     */
    public function setCILRequestNumber(int $CILRequestNumber): CILorderRequest
    {
        $this->attributes['CILRequestNumber'] = $CILRequestNumber;
        $this->CILRequestNumber = $CILRequestNumber;
        return $this;
    }

    /**
     * @return array
     */
    public function getCILFile(): array
    {
        return $this->CILFile;
    }

    /**
     * @param array $CILFile
     * @return CILorderRequest
     */
    public function setCILFile(array $CILFile): CILorderRequest
    {
        $this->CILFile = $CILFile;
        return $this;
    }

}
