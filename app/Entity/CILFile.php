<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CILFile extends Model
{
    use HasFactory;

    protected $table = 'cil_files';
    protected $connection = 'oracle';

    private string $gtin;
    private string $serial_number;
    private string $security_code;
    private string $e_signature;
    private string $hs_code;
    private string $barcode;
    private string $code_td;
    private string $style;
    private string $color;
    private string $size;
    private string $ext_size;
    private string $product_specific;
    private int $index;
    private bool $foc;

    /**
     * @return string
     */
    public function getGtin(): string
    {
        return $this->gtin;
    }

    /**
     * @param string $gtin
     * @return CILFile
     */
    public function setGtin(string $gtin): CILFile
    {
        $this->attributes['gtin'] = $gtin;
        $this->gtin = $gtin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serial_number;
    }

    /**
     * @param string $serial_number
     * @return CILFile
     */
    public function setSerialNumber(string $serial_number): CILFile
    {
        $this->attributes['serial_number'] = $serial_number;
        $this->serial_number = $serial_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecurityCode(): string
    {
        return $this->security_code;
    }

    /**
     * @param string $security_code
     * @return CILFile
     */
    public function setSecurityCode(string $security_code): CILFile
    {
        $this->attributes['security_code'] = $security_code;
        $this->security_code = $security_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getESignature(): string
    {
        return $this->e_signature;
    }

    /**
     * @param string $e_signature
     * @return CILFile
     */
    public function setESignature(string $e_signature): CILFile
    {
        $this->attributes['e_signature'] = $e_signature;
        $this->e_signature = $e_signature;
        return $this;
    }

    /**
     * @return string
     */
    public function getHsCode(): string
    {
        return $this->hs_code;
    }

    /**
     * @param string $hs_code
     * @return CILFile
     */
    public function setHsCode(string $hs_code): CILFile
    {
        $this->attributes['hs_code'] = $hs_code;
        $this->hs_code = $hs_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     * @return CILFile
     */
    public function setBarcode(string $barcode): CILFile
    {
        $this->attributes['barcode'] = $barcode;
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodeTd(): string
    {
        return $this->code_td;
    }

    /**
     * @param string $code_td
     * @return CILFile
     */
    public function setCodeTd(string $code_td): CILFile
    {
        $this->attributes['code_td'] = $code_td;
        $this->code_td = $code_td;
        return $this;
    }

    /**
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * @param string $style
     * @return CILFile
     */
    public function setStyle(string $style): CILFile
    {
        $this->attributes['style'] = $style;
        $this->style = $style;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return CILFile
     */
    public function setColor(string $color): CILFile
    {
        $this->attributes['color'] = $color;
        $this->color = $color;
        return $this;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     * @return CILFile
     */
    public function setSize(string $size): CILFile
    {
        $this->attributes['size'] = $size;
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtSize(): string
    {
        return $this->ext_size;
    }

    /**
     * @param string $ext_size
     * @return CILFile
     */
    public function setExtSize(string $ext_size): CILFile
    {
        $this->attributes['ext_size'] = $ext_size;
        $this->ext_size = $ext_size;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductSpecific(): string
    {
        return $this->product_specific;
    }

    /**
     * @param string $product_specific
     * @return CILFile
     */
    public function setProductSpecific(string $product_specific): CILFile
    {
        $this->attributes['product_specific'] = $product_specific;
        $this->product_specific = $product_specific;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @param int $index
     * @return CILFile
     */
    public function setIndex(int $index): CILFile
    {
        $this->attributes['index'] = $index;
        $this->index = $index;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFoc(): bool
    {
        return $this->foc;
    }

    /**
     * @param bool $foc
     * @return CILFile
     */
    public function setFoc(bool $foc): CILFile
    {
        $this->attributes['foc'] = $foc;
        $this->foc = $foc;
        return $this;
    }
}
