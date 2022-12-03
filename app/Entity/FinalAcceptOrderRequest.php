<?php
namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalAcceptOrderRequest extends Model
{
    use HasFactory;

    protected $table = 'FINAL_ACCEPT_ORDER_REQUEST';
    protected $connection = 'oracle';

    private string $OrderID;
    private int $Version;

    /**
     * @return string
     */
    public function getOrderID(): string
    {
        return $this->OrderID;
    }

    /**
     * @param string $OrderID
     * @return FinalAcceptOrderRequest
     */
    public function setOrderID(string $OrderID): FinalAcceptOrderRequest
    {
        $this->attributes['OrderID'] = $OrderID;
        $this->OrderID = $OrderID;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }

    /**
     * @param int $Version
     * @return FinalAcceptOrderRequest
     */
    public function setVersion(int $Version): FinalAcceptOrderRequest
    {
        $this->attributes['Version'] = $Version;
        $this->Version = $Version;
        return $this;
    }
}
