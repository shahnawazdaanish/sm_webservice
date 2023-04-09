<?php

namespace App\Entity\Consumer;

class ChangeOrderRequest
{
    private string $RFCID;
    private string $OrderID;
    private int $Version;
    private string $RFCDateTime;
    private string $Comment;

    /**
     * @return string
     */
    public function getRFCID(): string
    {
        return $this->RFCID;
    }

    /**
     * @param string $RFCID
     * @return ChangeOrderRequest
     */
    public function setRFCID(string $RFCID): ChangeOrderRequest
    {
        $this->RFCID = $RFCID;
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
     * @return ChangeOrderRequest
     */
    public function setOrderID(string $OrderID): ChangeOrderRequest
    {
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
     * @return ChangeOrderRequest
     */
    public function setVersion(int $Version): ChangeOrderRequest
    {
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return string
     */
    public function getRFCDateTime(): string
    {
        return $this->RFCDateTime;
    }

    /**
     * @param string $RFCDateTime
     * @return ChangeOrderRequest
     */
    public function setRFCDateTime(string $RFCDateTime): ChangeOrderRequest
    {
        $this->RFCDateTime = $RFCDateTime;
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
     * @return ChangeOrderRequest
     */
    public function setComment(string $Comment): ChangeOrderRequest
    {
        $this->Comment = $Comment;
        return $this;
    }
}
