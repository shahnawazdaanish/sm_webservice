<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderRequestResponse extends Model
{
    use HasFactory;

    protected $table = 'order_request_response';
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
     * @return OrderRequestResponse
     */
    public function setRequestID(string $RequestID): OrderRequestResponse
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
     * @return OrderRequestResponse
     */
    public function setOrderVersionResponse(array $OrderVersionResponse): OrderRequestResponse
    {
        $this->OrderVersionResponse = $OrderVersionResponse;
        return $this;
    }

    public function __toString()
    {
        return json_encode([
            'RequestID' => $this->RequestID,
            'OrderVersionResponse' => $this->OrderVersionResponse,
        ]);
    }
}
