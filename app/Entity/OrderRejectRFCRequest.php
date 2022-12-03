<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderRejectRFCRequest extends Model
{
    use HasFactory;

    protected $table = 'order_reject_rfc_request';
    protected $connection = 'oracle';

    private string $RequestID;
    private string $RFCID;
    private string $Comment;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return OrderRejectRFCRequest
     */
    public function setRequestID(string $RequestID): OrderRejectRFCRequest
    {
        $this->attributes['RequestID'] = $RequestID;
        $this->RequestID = $RequestID;
        return $this;
    }

    /**
     * @return string
     */
    public function getRFCID(): string
    {
        return $this->RFCID;
    }

    /**
     * @param string $RFCID
     * @return OrderRejectRFCRequest
     */
    public function setRFCID(string $RFCID): OrderRejectRFCRequest
    {
        $this->attributes['RFCID'] = $RFCID;
        $this->RFCID = $RFCID;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return OrderRejectRFCRequest
     */
    public function setComment(string $Comment): OrderRejectRFCRequest
    {
        $this->attributes['Comment'] = $Comment;
        $this->Comment = $Comment;
        return $this;
    }
}
