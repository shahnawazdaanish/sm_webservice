<?php

namespace App\Entity;

class CILOrderRequestResponse
{
    private CILOrderResponse $return;

    /**
     * @return CILOrderResponse
     */
    public function getReturn(): CILOrderResponse
    {
        return $this->return;
    }

    /**
     * @param CILOrderResponse $return
     * @return CILOrderRequestResponse
     */
    public function setReturn(CILOrderResponse $return): CILOrderRequestResponse
    {
        $this->return = $return;
        return $this;
    }
}
