<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalAcceptOrderRequests extends Model
{
    use HasFactory;

    protected $table = 'FINAL_ACCEPT_ORDER_REQUESTS';

    private string $RequestID;
    /** @var array|FinalAcceptOrderRequest[] $FinalAcceptOrderRequest */
    private array $FinalAcceptOrderRequest;

    public function __construct()
    {
        parent::__construct();
        $this->RequestID = '';
        $this->FinalAcceptOrderRequest = [];
    }

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return FinalAcceptOrderRequests
     */
    public function setRequestID(string $RequestID): FinalAcceptOrderRequests
    {
        $this->attributes['RequestID'] = $RequestID;
        $this->RequestID = $RequestID;
        return $this;
    }

    /**
     * @return FinalAcceptOrderRequest[]|array
     */
    public function getFinalAcceptOrderRequest(): array
    {
        return $this->FinalAcceptOrderRequest;
    }

    /**
     * @param FinalAcceptOrderRequest[]|array $FinalAcceptOrderRequest
     * @return FinalAcceptOrderRequests
     */
    public function setFinalAcceptOrderRequest(array $FinalAcceptOrderRequest): FinalAcceptOrderRequests
    {
        $this->FinalAcceptOrderRequest = $FinalAcceptOrderRequest;
        return $this;
    }
}
