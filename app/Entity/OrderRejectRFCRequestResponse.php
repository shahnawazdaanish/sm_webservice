<?php

namespace App\Entity;

class OrderRejectRFCRequestResponse
{
    private string $RequestID;
    /** @var array|OrderRFCResponse[] $OrderRFCResponse */
    private array $OrderRFCResponse;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return OrderRejectRFCRequestResponse
     */
    public function setRequestID(string $RequestID): OrderRejectRFCRequestResponse
    {
        $this->RequestID = $RequestID;
        return $this;
    }

    /**
     * @return OrderRFCResponse[]|array
     */
    public function getOrderRFCResponse(): array
    {
        return $this->OrderRFCResponse;
    }

    /**
     * @param OrderRFCResponse[]|array $OrderRFCResponse
     * @return OrderRejectRFCRequestResponse
     */
    public function setOrderRFCResponse(array $OrderRFCResponse): OrderRejectRFCRequestResponse
    {
        $this->OrderRFCResponse = $OrderRFCResponse;
        return $this;
    }
}
