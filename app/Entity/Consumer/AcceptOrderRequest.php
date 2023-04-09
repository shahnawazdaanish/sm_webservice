<?php

namespace App\Entity\Consumer;

class AcceptOrderRequest
{
    private string $OrderID;
    private int $Version;

    /**
     * @return string
     */
    public function getOrderID(): string
    {
        return $this->OrderID;
    }

    /**
     * @param string $OrderID
     * @return AcceptOrderRequest
     */
    public function setOrderID(string $OrderID): AcceptOrderRequest
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
     * @return AcceptOrderRequest
     */
    public function setVersion(int $Version): AcceptOrderRequest
    {
        $this->Version = $Version;
        return $this;
    }
}
