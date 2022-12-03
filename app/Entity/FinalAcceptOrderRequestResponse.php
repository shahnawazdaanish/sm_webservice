<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalAcceptOrderRequestResponse extends Model
{
    use HasFactory;

    protected $table = 'final_accept_order_request_response';
    protected $connection = 'oracle';

    private string $RequestID;
    private array $OrderVersionResponse;

    /**
     * @return string
     */
    public function getRequestID(): string
    {
        return $this->RequestID;
    }

    /**
     * @param string $RequestID
     * @return FinalAcceptOrderRequestResponse
     */
    public function setRequestID(string $RequestID): FinalAcceptOrderRequestResponse
    {
        $this->attributes['RequestID'] = $RequestID;
        $this->RequestID = $RequestID;
        return $this;
    }

    /**
     * @return array
     */
    public function getOrderVersionResponse(): array
    {
        return $this->OrderVersionResponse;
    }

    /**
     * @param array $OrderVersionResponse
     * @return FinalAcceptOrderRequestResponse
     */
    public function setOrderVersionResponse(array $OrderVersionResponse): FinalAcceptOrderRequestResponse
    {
        $this->OrderVersionResponse = $OrderVersionResponse;
        return $this;
    }

}
