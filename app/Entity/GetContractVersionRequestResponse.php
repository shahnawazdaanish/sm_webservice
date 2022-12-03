<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetContractVersionRequestResponse extends Model
{
    use HasFactory;

    protected $table = 'get_contract_version_request_response';

    private string $RequestID;
    private string $ContractVersion;
    private bool $Status;
    private int $ErrorCode;
    private string $ErrorMessage;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return GetContractVersionRequestResponse
     */
    public function setRequestID(string $RequestID): GetContractVersionRequestResponse
    {
        $this->attributes['RequestID'] = $RequestID;
        $this->RequestID = $RequestID;
        return $this;
    }

    /**
     * @return string
     */
    public function getContractVersion(): string
    {
        return $this->ContractVersion;
    }

    /**
     * @param string $ContractVersion
     * @return GetContractVersionRequestResponse
     */
    public function setContractVersion(string $ContractVersion): GetContractVersionRequestResponse
    {
        $this->attributes['ContractVersion'] = $ContractVersion;
        $this->ContractVersion = $ContractVersion;
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
     * @return GetContractVersionRequestResponse
     */
    public function setStatus(bool $Status): GetContractVersionRequestResponse
    {
        $this->attributes['Status'] = $Status;
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return GetContractVersionRequestResponse
     */
    public function setErrorCode(int $ErrorCode): GetContractVersionRequestResponse
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
     * @return GetContractVersionRequestResponse
     */
    public function setErrorMessage(string $ErrorMessage): GetContractVersionRequestResponse
    {
        $this->attributes['ErrorMessage'] = $ErrorMessage;
        $this->ErrorMessage = $ErrorMessage;
        return $this;
    }
}
