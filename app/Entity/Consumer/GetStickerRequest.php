<?php

namespace App\Entity\Consumer;

class GetStickerRequest
{
    private string $RequestID;
    private string $ParticipantID;
    private array $StickerID;
    private bool $JoinFile;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return GetStickerRequest
     */
    public function setRequestID(string $RequestID): GetStickerRequest
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
     * @return GetStickerRequest
     */
    public function setParticipantID(string $ParticipantID): GetStickerRequest
    {
        $this->ParticipantID = $ParticipantID;
        return $this;
    }

    /**
     * @return array
     */
    public function getStickerID(): array
    {
        return $this->StickerID;
    }

    /**
     * @param array $StickerID
     * @return GetStickerRequest
     */
    public function setStickerID(array $StickerID): GetStickerRequest
    {
        $this->StickerID = $StickerID;
        return $this;
    }

    /**
     * @return bool
     */
    public function isJoinFile(): bool
    {
        return $this->JoinFile;
    }

    /**
     * @param bool $JoinFile
     * @return GetStickerRequest
     */
    public function setJoinFile(bool $JoinFile): GetStickerRequest
    {
        $this->JoinFile = $JoinFile;
        return $this;
    }
}
