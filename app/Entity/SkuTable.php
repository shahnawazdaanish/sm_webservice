<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $LabelID;
 * @property $SkuID;
 * @property $TDCode;
 * @property $Quantity;
 * @property $SalesCountryID;
 * @property $SalesCountryName;
 * @property $Comment;
 * @property $StickerID;
 */
class SkuTable extends Model
{
    use HasFactory;

    protected $table = 'sku_tables';
    protected $connection = 'oracle';

    private string $LabelID;
    private string $SkuID;
    private string $TDCode;
    private string $Quantity;
    private string $SalesCountryID;
    private string $SalesCountryName;
    private string $Comment;
    private string $StickerID;

    /**
     * @return string
     */
    public function getLabelID(): string
    {
        return $this->LabelID;
    }

    /**
     * @param string $LabelID
     * @return SkuTable
     */
    public function setLabelID(string $LabelID): SkuTable
    {
        $this->attributes['LabelID'] = $LabelID;
        $this->LabelID = $LabelID;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuID(): string
    {
        return $this->SkuID;
    }

    /**
     * @param string $SkuID
     * @return SkuTable
     */
    public function setSkuID(string $SkuID): SkuTable
    {
        $this->attributes['SkuID'] = $SkuID;
        $this->SkuID = $SkuID;
        return $this;
    }

    /**
     * @return string
     */
    public function getTDCode(): string
    {
        return $this->TDCode;
    }

    /**
     * @param string $TDCode
     * @return SkuTable
     */
    public function setTDCode(string $TDCode): SkuTable
    {
        $this->attributes['TDCode'] = $TDCode;
        $this->TDCode = $TDCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->Quantity;
    }

    /**
     * @param string $Quantity
     * @return SkuTable
     */
    public function setQuantity(string $Quantity): SkuTable
    {
        $this->attributes['Quantity'] = $Quantity;
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesCountryID(): string
    {
        return $this->SalesCountryID;
    }

    /**
     * @param string $SalesCountryID
     * @return SkuTable
     */
    public function setSalesCountryID(string $SalesCountryID): SkuTable
    {
        $this->attributes['SalesCountryID'] = $SalesCountryID;
        $this->SalesCountryID = $SalesCountryID;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesCountryName(): string
    {
        return $this->SalesCountryName;
    }

    /**
     * @param string $SalesCountryName
     * @return SkuTable
     */
    public function setSalesCountryName(string $SalesCountryName): SkuTable
    {
        $this->attributes['SalesCountryName'] = $SalesCountryName;
        $this->SalesCountryName = $SalesCountryName;
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
     * @return SkuTable
     */
    public function setComment(string $Comment): SkuTable
    {
        $this->attributes['Comment'] = $Comment;
        $this->Comment = $Comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getStickerID(): string
    {
        return $this->StickerID;
    }

    /**
     * @param string $StickerID
     * @return SkuTable
     */
    public function setStickerID(string $StickerID): SkuTable
    {
        $this->attributes['StickerID'] = $StickerID;
        $this->StickerID = $StickerID;
        return $this;
    }
}
