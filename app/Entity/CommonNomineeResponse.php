<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonNomineeResponse extends Model
{
    use HasFactory;

    protected $table = 'common_nominee_response';
    protected $connection = 'oracle';

    private string $RequestID;
    private bool $Status;
    private bool $ErrorCode;
    private string $ErrorMessage;
    private string $Response;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return CommonNomineeResponse
     */
    public function setRequestID(string $RequestID): CommonNomineeResponse
    {
        $this->attributes['RequestID'] = $RequestID;
        $this->RequestID = $RequestID;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->Status;
    }

    /**
     * @param bool $Status
     * @return CommonNomineeResponse
     */
    public function setStatus(bool $Status): CommonNomineeResponse
    {
        $this->attributes['Status'] = $Status;
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return bool
     */
    public function isErrorCode(): bool
    {
        return $this->ErrorCode;
    }

    /**
     * @param bool $ErrorCode
     * @return CommonNomineeResponse
     */
    public function setErrorCode(bool $ErrorCode): CommonNomineeResponse
    {
        $this->attributes['ErrorCode'] = $ErrorCode;
        $this->ErrorCode = $ErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return CommonNomineeResponse
     */
    public function setErrorMessage(string $ErrorMessage): CommonNomineeResponse
    {
        $this->attributes['ErrorMessage'] = $ErrorMessage;
        $this->ErrorMessage = $ErrorMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->Response;
    }

    /**
     * @param string $Response
     * @return CommonNomineeResponse
     */
    public function setResponse(string $Response): CommonNomineeResponse
    {
        $this->attributes['Response'] = $Response;
        $this->Response = $Response;
        return $this;
    }
}
