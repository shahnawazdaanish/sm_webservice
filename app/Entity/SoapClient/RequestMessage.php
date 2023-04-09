<?php

namespace App\Entity\SoapClient;

class RequestMessage
{
    protected $request;
    protected $requestId;

    protected $requestDateTime;

    protected $protocol;

    protected $customProtocol;

    protected $testDataMarker;

    protected $data;

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function setRequestId(?string $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    public function getRequestDateTime(): ?string
    {
        return $this->requestDateTime;
    }

    public function setRequestDateTime(?string $requestDateTime): self
    {
        $this->requestDateTime = $requestDateTime;
        return $this;
    }

    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;
        return $this;
    }

    public function getCustomProtocol(): ?string
    {
        return $this->customProtocol;
    }

    public function setCustomProtocol(?string $customProtocol): self
    {
        $this->customProtocol = $customProtocol;
        return $this;
    }

    public function getTestDataMarker(): ?bool
    {
        return $this->testDataMarker;
    }

    public function setTestDataMarker(?bool $testDataMarker): self
    {
        $this->testDataMarker = $testDataMarker;
        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData($data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     * @return RequestMessage
     */
    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

}
