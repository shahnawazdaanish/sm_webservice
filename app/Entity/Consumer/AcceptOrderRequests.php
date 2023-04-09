<?php

namespace App\Entity\Consumer;

class AcceptOrderRequests
{
    private string $RequestID;
    private string $ParticipantID;
    /** @var array|AcceptOrderRequest[] $AcceptOrderRequest */
    private array $AcceptOrderRequest;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return AcceptOrderRequests
     */
    public function setRequestID(string $RequestID): AcceptOrderRequests
    {
        $this->RequestID = $RequestID;
        return $this;
    }

    /**
     * @return string
     */
    public function getParticipantID(): string
    {
        return $this->ParticipantID;
    }

    /**
     * @param string $ParticipantID
     * @return AcceptOrderRequests
     */
    public function setParticipantID(string $ParticipantID): AcceptOrderRequests
    {
        $this->ParticipantID = $ParticipantID;
        return $this;
    }

    /**
     * @return AcceptOrderRequest[]|array
     */
    public function getAcceptOrderRequest(): array
    {
        return $this->AcceptOrderRequest;
    }

    /**
     * @param AcceptOrderRequest[]|array $AcceptOrderRequest
     * @return AcceptOrderRequests
     */
    public function setAcceptOrderRequest(array $AcceptOrderRequest): AcceptOrderRequests
    {
        $this->AcceptOrderRequest = $AcceptOrderRequest;
        return $this;
    }
}
