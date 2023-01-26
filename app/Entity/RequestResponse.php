<?php

namespace App\Entity;

class RequestResponse
{
    private mixed $return;

    /**
     * @return mixed
     */
    public function getReturn(): mixed
    {
        return $this->return;
    }

    /**
     * @param mixed $return
     * @return RequestResponse
     */
    public function setReturn(mixed $return): static
    {
        $response = new CommonNomineeResponse();
        $response->setStatus(true);
        $response->setErrorMessage('');
        $response->setErrorCode(0);
        $response->setRequestID($return->RequestID ?? '');
        $response->setResponse(json_encode($return));
        $response->save();

        $this->return = $return;
        return $this;
    }
}
