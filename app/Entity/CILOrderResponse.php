<?php

namespace App\Entity;

class CILOrderResponse
{
    private string $RequestID;
    private bool $Status;
    private int $ErrorCode;
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
     * @return CILOrderResponse
     */
    public function setRequestID(string $RequestID): CILOrderResponse
    {
        $this->RequestID = $RequestID;
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
     * @return CILOrderResponse
     */
    public function setStatus(bool $Status): CILOrderResponse
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return CILOrderResponse
     */
    public function setErrorCode(int $ErrorCode): CILOrderResponse
    {
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
     * @return CILOrderResponse
     */
    public function setErrorMessage(string $ErrorMessage): CILOrderResponse
    {
        $this->ErrorMessage = $ErrorMessage;
        return $this;
    }
}
