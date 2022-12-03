<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $OrderID
 * @property int $Version
 * @property bool $Status
 * @property bool $ErrorCode
 * @property string $ErrorMessage
 */
class OrderVersionResponse extends Model
{
    use HasFactory;

    protected $table = 'order_version_response';
    protected $connection = 'oracle';

    private string $RequestID;
    private string $OrderID;
    private int $Version;
    private bool $Status;
    private bool $ErrorCode;
    private string $ErrorMessage;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return OrderVersionResponse
     */
    public function setRequestID(string $RequestID): OrderVersionResponse
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
     * @return OrderVersionResponse
     */
    public function setOrderID(string $OrderID): OrderVersionResponse
    {
        $this->attributes['OrderID'] = $OrderID;
        $this->OrderID = $OrderID;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }

    /**
     * @param int $Version
     * @return OrderVersionResponse
     */
    public function setVersion(int $Version): OrderVersionResponse
    {
        $this->attributes['Version'] = $Version;
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->Status;
    }

    /**
     * @param bool $Status
     * @return OrderVersionResponse
     */
    public function setStatus(bool $Status): OrderVersionResponse
    {
        $this->attributes['Status'] = $Status;
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return bool
     */
    public function isErrorCode(): bool
    {
        return $this->ErrorCode;
    }

    /**
     * @param bool $ErrorCode
     * @return OrderVersionResponse
     */
    public function setErrorCode(bool $ErrorCode): OrderVersionResponse
    {
        $this->attributes['ErrorCode'] = $ErrorCode;
        $this->ErrorCode = $ErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return OrderVersionResponse
     */
    public function setErrorMessage(string $ErrorMessage): OrderVersionResponse
    {
        $this->attributes['ErrorMessage'] = $ErrorMessage;
        $this->ErrorMessage = $ErrorMessage;
        return $this;
    }
}
