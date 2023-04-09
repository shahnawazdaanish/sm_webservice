<?php

namespace App\Entity\Consumer;

class ChangeOrderRequests
{
    private string $RequestID;
    private string $ParticipantID;
    /** @var array|ChangeOrderRequest[] $ChangeOrderRequest */
    private array $ChangeOrderRequest;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return ChangeOrderRequests
     */
    public function setRequestID(string $RequestID): ChangeOrderRequests
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
     * @return ChangeOrderRequests
     */
    public function setParticipantID(string $ParticipantID): ChangeOrderRequests
    {
        $this->ParticipantID = $ParticipantID;
        return $this;
    }

    /**
     * @return ChangeOrderRequest[]|array
     */
    public function getChangeOrderRequest(): array
    {
        return $this->ChangeOrderRequest;
    }

    /**
     * @param ChangeOrderRequest[]|array $ChangeOrderRequest
     * @return ChangeOrderRequests
     */
    public function setChangeOrderRequest(array $ChangeOrderRequest): ChangeOrderRequests
    {
        $this->ChangeOrderRequest = $ChangeOrderRequest;
        return $this;
    }
}
