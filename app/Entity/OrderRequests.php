<?php

namespace App\Entity;

class OrderRequests
{
    private string $RequestID;
    /** @var array | OrderRequest[] */
    private array $OrderRequests;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return OrderRequests
     */
    public function setRequestID(string $RequestID): OrderRequests
    {
        $this->RequestID = $RequestID;
        return $this;
    }

    /**
     * @return OrderRequest[]|array
     */
    public function getOrderRequests(): array
    {
        return $this->OrderRequests;
    }

    /**
     * @param OrderRequest[]|array $OrderRequests
     * @return OrderRequests
     */
    public function setOrderRequests(array $OrderRequests): OrderRequests
    {
        $this->OrderRequests = $OrderRequests;
        return $this;
    }


}
