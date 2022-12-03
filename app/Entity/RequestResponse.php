<?php

namespace App\Entity;

class RequestResponse
{
    private $return;

    /**
     * @return mixed
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param mixed $return
     * @return RequestResponse
     */
    public function setReturn($return)
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
