<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderRequest extends Model
{
    use HasFactory;

    protected $table = 'order_request';

    private string $OrderID;
    private string $VPOrderID;
    private int $Version;
    private float $CollectionID;
    private string $CollectionName;
    private bool $IsCancelled;
    private string $NomineeID;
    private string $NomineeName;
    private string $VendorID;
    private string $VendorName;
    private string $FactoryID;
    private string $FactoryName;
    private string $DeliveryAddress;
    private string $Comment;
    private string $CILQuantity;
    private string $CILRequestQuantity;
    /** @var array|SkuTable[] */
    private array $SkuTables;

    /**
     * @return string
     */
    public function getOrderID(): string
    {
        return $this->OrderID;
    }

    /**
     * @param string $OrderID
     * @return OrderRequest
     */
    public function setOrderID(string $OrderID): OrderRequest
    {
        $this->attributes['OrderID'] = $OrderID;
        $this->OrderID = $OrderID;
        return $this;
    }

    /**
     * @return string
     */
    public function getVPOrderID(): string
    {
        return $this->VPOrderID;
    }

    /**
     * @param string $VPOrderID
     * @return OrderRequest
     */
    public function setVPOrderID(string $VPOrderID): OrderRequest
    {
        $this->attributes['VPOrderID'] = $VPOrderID;
        $this->VPOrderID = $VPOrderID;
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
     * @return OrderRequest
     */
    public function setVersion(int $Version): OrderRequest
    {
        $this->attributes['Version'] = $Version;
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return float
     */
    public function getCollectionID(): float
    {
        return $this->CollectionID;
    }

    /**
     * @param float $CollectionID
     * @return OrderRequest
     */
    public function setCollectionID(float $CollectionID): OrderRequest
    {
        $this->attributes['CollectionID'] = $CollectionID;
        $this->CollectionID = $CollectionID;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionName(): string
    {
        return $this->CollectionName;
    }

    /**
     * @param string $CollectionName
     * @return OrderRequest
     */
    public function setCollectionName(string $CollectionName): OrderRequest
    {
        $this->attributes['CollectionName'] = $CollectionName;
        $this->CollectionName = $CollectionName;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsCancelled(): bool
    {
        return $this->IsCancelled;
    }

    /**
     * @param bool $IsCancelled
     * @return OrderRequest
     */
    public function setIsCancelled(bool $IsCancelled): OrderRequest
    {
        $this->attributes['IsCancelled'] = $IsCancelled;
        $this->IsCancelled = $IsCancelled;
        return $this;
    }

    /**
     * @return string
     */
    public function getNomineeID(): string
    {
        return $this->NomineeID;
    }

    /**
     * @param string $NomineeID
     * @return OrderRequest
     */
    public function setNomineeID(string $NomineeID): OrderRequest
    {
        $this->attributes['NomineeID'] = $NomineeID;
        $this->NomineeID = $NomineeID;
        return $this;
    }

    /**
     * @return string
     */
    public function getNomineeName(): string
    {
        return $this->NomineeName;
    }

    /**
     * @param string $NomineeName
     * @return OrderRequest
     */
    public function setNomineeName(string $NomineeName): OrderRequest
    {
        $this->attributes['NomineeName'] = $NomineeName;
        $this->NomineeName = $NomineeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorID(): string
    {
        return $this->VendorID;
    }

    /**
     * @param string $VendorID
     * @return OrderRequest
     */
    public function setVendorID(string $VendorID): OrderRequest
    {
        $this->attributes['VendorID'] = $VendorID;
        $this->VendorID = $VendorID;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorName(): string
    {
        return $this->VendorName;
    }

    /**
     * @param string $VendorName
     * @return OrderRequest
     */
    public function setVendorName(string $VendorName): OrderRequest
    {
        $this->attributes['VendorName'] = $VendorName;
        $this->VendorName = $VendorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFactoryID(): string
    {
        return $this->FactoryID;
    }

    /**
     * @param string $FactoryID
     * @return OrderRequest
     */
    public function setFactoryID(string $FactoryID): OrderRequest
    {
        $this->attributes['FactoryID'] = $FactoryID;
        $this->FactoryID = $FactoryID;
        return $this;
    }

    /**
     * @return string
     */
    public function getFactoryName(): string
    {
        return $this->FactoryName;
    }

    /**
     * @param string $FactoryName
     * @return OrderRequest
     */
    public function setFactoryName(string $FactoryName): OrderRequest
    {
        $this->attributes['FactoryName'] = $FactoryName;
        $this->FactoryName = $FactoryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress(): string
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param string $DeliveryAddress
     * @return OrderRequest
     */
    public function setDeliveryAddress(string $DeliveryAddress): OrderRequest
    {
        $this->attributes['DeliveryAddress'] = $DeliveryAddress;
        $this->DeliveryAddress = $DeliveryAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return OrderRequest
     */
    public function setComment(string $Comment): OrderRequest
    {
        $this->attributes['Comment'] = $Comment;
        $this->Comment = $Comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCILQuantity(): string
    {
        return $this->CILQuantity;
    }

    /**
     * @param string $CILQuantity
     * @return OrderRequest
     */
    public function setCILQuantity(string $CILQuantity): OrderRequest
    {
        $this->attributes['CILQuantity'] = $CILQuantity;
        $this->CILQuantity = $CILQuantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getCILRequestQuantity(): string
    {
        return $this->CILRequestQuantity;
    }

    /**
     * @param string $CILRequestQuantity
     * @return OrderRequest
     */
    public function setCILRequestQuantity(string $CILRequestQuantity): OrderRequest
    {
        $this->attributes['CILRequestQuantity'] = $CILRequestQuantity;
        $this->CILRequestQuantity = $CILRequestQuantity;
        return $this;
    }

    /**
     * @return SkuTable[]|array
     */
    public function getSkuTables(): array
    {
        return $this->SkuTables;
    }

    /**
     * @param SkuTable[]|array $SkuTables
     * @return OrderRequest
     */
    public function setSkuTables(array $SkuTables): OrderRequest
    {
        $this->SkuTables = $SkuTables;
        return $this;
    }
}
