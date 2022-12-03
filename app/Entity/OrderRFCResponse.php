<?php

namespace App\Entity;

class OrderRFCResponse
{
    private string $RFCID;
    private bool $Status;
    private int $ErrorCode;
    private string $ErrorMessage;

    /**
     * @return string
     */
    public function getRFCID(): string
    {
        return $this->RFCID;
    }

    /**
     * @param string $RFCID
     * @return OrderRFCResponse
     */
    public function setRFCID(string $RFCID): OrderRFCResponse
    {
        $this->RFCID = $RFCID;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->Status ?? true;
    }

    /**
     * @param bool $Status
     * @return OrderRFCResponse
     */
    public function setStatus(bool $Status): OrderRFCResponse
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->ErrorCode ?? 0;
    }

    /**
     * @param int $ErrorCode
     * @return OrderRFCResponse
     */
    public function setErrorCode(int $ErrorCode): OrderRFCResponse
    {
        $this->ErrorCode = $ErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->ErrorMessage ?? '';
    }

    /**
     * @param string $ErrorMessage
     * @return OrderRFCResponse
     */
    public function setErrorMessage(string $ErrorMessage): OrderRFCResponse
    {
        $this->ErrorMessage = $ErrorMessage;
        return $this;
    }
}
