<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sticker extends Model
{
    use HasFactory;

    protected $table = 'stickers';
    protected $connection = 'oracle';

    private string $REQUESTID;
    private string $STICKERID;
    private string $BRAND;
    private string $STYLE;
    private string $COLOR;
    private string $SIZE_EU;
    private string $SIZE_STATE_STANDARD;
    private string $SIZE_MP;
    private string $SAFETY_STANDARD;
    private string $MAX_WT;
    private string $COMPLETENESS_CODE;
    private string $COMPLETENESS_NAME;
    private string $CODE_TD;
    private string $BARCODE;
    private string $COUNTRY_OF_ORIGIN;
    private string $CERTIFICATION;
    private string $STATE_STANDARD;
    private string $SIZE;
    private string $EXT_SIZE;
    private string $NAME;
    private string $COMPOSITION;
    private string $SUPPLIER_NAME;
    private string $SUPPLIER_ADDRESS;
    private string $PRODUCT_SPECIFIC;
    private string $COLOR_NAME;
    private string $IMPORTER;
    private string $MANUFACTURED_DATE;
    private string $COMMENT;
    private string $MULTIPACK_QTY;
    private string $MULTIPACK_BARCODE;
    private string $SIZE_US;
    private string $SIZE_UK;
    private string $LABEL_ASSIGNMENT;
    private string $WASHING;
    private string $BLEACHING;
    private string $DRYING;
    private string $IRONING;
    private string $PROFESSIONAL_TEXTILE_CARE;
    private string $ADDITIONAL_CARE;
    private string $LICENSOR_PRODUCT_CODE;
    private string $CREATED_AT;
    private string $UPDATED_AT;

    /**
     * @return string
     */
    public function getREQUESTID(): string
    {
        return $this->REQUESTID;
    }

    /**
     * @param string $REQUESTID
     * @return Sticker
     */
    public function setREQUESTID(string $REQUESTID): Sticker
    {
        $this->attributes['REQUESTID'] = $REQUESTID;
        $this->REQUESTID = $REQUESTID;
        return $this;
    }

    /**
     * @return string
     */
    public function getSTICKERID(): string
    {
        return $this->STICKERID;
    }

    /**
     * @param string $STICKERID
     * @return Sticker
     */
    public function setSTICKERID(string $STICKERID): Sticker
    {
        $this->attributes['STICKERID'] = $STICKERID;
        $this->STICKERID = $STICKERID;
        return $this;
    }

    /**
     * @return string
     */
    public function getBRAND(): string
    {
        return $this->BRAND;
    }

    /**
     * @param string $BRAND
     * @return Sticker
     */
    public function setBRAND(string $BRAND): Sticker
    {
        $this->attributes['BRAND'] = $BRAND;
        $this->BRAND = $BRAND;
        return $this;
    }

    /**
     * @return string
     */
    public function getSTYLE(): string
    {
        return $this->STYLE;
    }

    /**
     * @param string $STYLE
     * @return Sticker
     */
    public function setSTYLE(string $STYLE): Sticker
    {
        $this->attributes['STYLE'] = $STYLE;
        $this->STYLE = $STYLE;
        return $this;
    }

    /**
     * @return string
     */
    public function getCOLOR(): string
    {
        return $this->COLOR;
    }

    /**
     * @param string $COLOR
     * @return Sticker
     */
    public function setCOLOR(string $COLOR): Sticker
    {
        $this->attributes['COLOR'] = $COLOR;
        $this->COLOR = $COLOR;
        return $this;
    }

    /**
     * @return string
     */
    public function getSIZEEU(): string
    {
        return $this->SIZE_EU;
    }

    /**
     * @param string $SIZE_EU
     * @return Sticker
     */
    public function setSIZEEU(string $SIZE_EU): Sticker
    {
        $this->attributes['SIZE_EU'] = $SIZE_EU;
        $this->SIZE_EU = $SIZE_EU;
        return $this;
    }

    /**
     * @return string
     */
    public function getSIZESTATESTANDARD(): string
    {
        return $this->SIZE_STATE_STANDARD;
    }

    /**
     * @param string $SIZE_STATE_STANDARD
     * @return Sticker
     */
    public function setSIZESTATESTANDARD(string $SIZE_STATE_STANDARD): Sticker
    {
        $this->attributes['SIZE_STATE_STANDARD'] = $SIZE_STATE_STANDARD;
        $this->SIZE_STATE_STANDARD = $SIZE_STATE_STANDARD;
        return $this;
    }

    /**
     * @return string
     */
    public function getSIZEMP(): string
    {
        return $this->SIZE_MP;
    }

    /**
     * @param string $SIZE_MP
     * @return Sticker
     */
    public function setSIZEMP(string $SIZE_MP): Sticker
    {
        $this->attributes['SIZE_MP'] = $SIZE_MP;
        $this->SIZE_MP = $SIZE_MP;
        return $this;
    }

    /**
     * @return string
     */
    public function getSAFETYSTANDARD(): string
    {
        return $this->SAFETY_STANDARD;
    }

    /**
     * @param string $SAFETY_STANDARD
     * @return Sticker
     */
    public function setSAFETYSTANDARD(string $SAFETY_STANDARD): Sticker
    {
        $this->attributes['SAFETY_STANDARD'] = $SAFETY_STANDARD;
        $this->SAFETY_STANDARD = $SAFETY_STANDARD;
        return $this;
    }

    /**
     * @return string
     */
    public function getMAXWT(): string
    {
        return $this->MAX_WT;
    }

    /**
     * @param string $MAX_WT
     * @return Sticker
     */
    public function setMAXWT(string $MAX_WT): Sticker
    {
        $this->attributes['MAX_WT'] = $MAX_WT;
        $this->MAX_WT = $MAX_WT;
        return $this;
    }

    /**
     * @return string
     */
    public function getCOMPLETENESSCODE(): string
    {
        return $this->COMPLETENESS_CODE;
    }

    /**
     * @param string $COMPLETENESS_CODE
     * @return Sticker
     */
    public function setCOMPLETENESSCODE(string $COMPLETENESS_CODE): Sticker
    {
        $this->attributes['COMPLETENESS_CODE'] = $COMPLETENESS_CODE;
        $this->COMPLETENESS_CODE = $COMPLETENESS_CODE;
        return $this;
    }

    /**
     * @return string
     */
    public function getCOMPLETENESSNAME(): string
    {
        return $this->COMPLETENESS_NAME;
    }

    /**
     * @param string $COMPLETENESS_NAME
     * @return Sticker
     */
    public function setCOMPLETENESSNAME(string $COMPLETENESS_NAME): Sticker
    {
        $this->attributes['COMPLETENESS_NAME'] = $COMPLETENESS_NAME;
        $this->COMPLETENESS_NAME = $COMPLETENESS_NAME;
        return $this;
    }

    /**
     * @return string
     */
    public function getCODETD(): string
    {
        return $this->CODE_TD;
    }

    /**
     * @param string $CODE_TD
     * @return Sticker
     */
    public function setCODETD(string $CODE_TD): Sticker
    {
        $this->attributes['CODE_TD'] = $CODE_TD;
        $this->CODE_TD = $CODE_TD;
        return $this;
    }

    /**
     * @return string
     */
    public function getBARCODE(): string
    {
        return $this->BARCODE;
    }

    /**
     * @param string $BARCODE
     * @return Sticker
     */
    public function setBARCODE(string $BARCODE): Sticker
    {
        $this->attributes['BARCODE'] = $BARCODE;
        $this->BARCODE = $BARCODE;
        return $this;
    }

    /**
     * @return string
     */
    public function getCOUNTRYOFORIGIN(): string
    {
        return $this->COUNTRY_OF_ORIGIN;
    }

    /**
     * @param string $COUNTRY_OF_ORIGIN
     * @return Sticker
     */
    public function setCOUNTRYOFORIGIN(string $COUNTRY_OF_ORIGIN): Sticker
    {
        $this->attributes['COUNTRY_OF_ORIGIN'] = $COUNTRY_OF_ORIGIN;
        $this->COUNTRY_OF_ORIGIN = $COUNTRY_OF_ORIGIN;
        return $this;
    }

    /**
     * @return string
     */
    public function getCERTIFICATION(): string
    {
        return $this->CERTIFICATION;
    }

    /**
     * @param string $CERTIFICATION
     * @return Sticker
     */
    public function setCERTIFICATION(string $CERTIFICATION): Sticker
    {
        $this->attributes['CERTIFICATION'] = $CERTIFICATION;
        $this->CERTIFICATION = $CERTIFICATION;
        return $this;
    }

    /**
     * @return string
     */
    public function getSTATESTANDARD(): string
    {
        return $this->STATE_STANDARD;
    }

    /**
     * @param string $STATE_STANDARD
     * @return Sticker
     */
    public function setSTATESTANDARD(string $STATE_STANDARD): Sticker
    {
        $this->attributes['STATE_STANDARD'] = $STATE_STANDARD;
        $this->STATE_STANDARD = $STATE_STANDARD;
        return $this;
    }

    /**
     * @return string
     */
    public function getSIZE(): string
    {
        return $this->SIZE;
    }

    /**
     * @param string $SIZE
     * @return Sticker
     */
    public function setSIZE(string $SIZE): Sticker
    {
        $this->attributes['SIZE'] = $SIZE;
        $this->SIZE = $SIZE;
        return $this;
    }

    /**
     * @return string
     */
    public function getEXTSIZE(): string
    {
        return $this->EXT_SIZE;
    }

    /**
     * @param string $EXT_SIZE
     * @return Sticker
     */
    public function setEXTSIZE(string $EXT_SIZE): Sticker
    {
        $this->attributes['EXT_SIZE'] = $EXT_SIZE;
        $this->EXT_SIZE = $EXT_SIZE;
        return $this;
    }

    /**
     * @return string
     */
    public function getNAME(): string
    {
        return $this->NAME;
    }

    /**
     * @param string $NAME
     * @return Sticker
     */
    public function setNAME(string $NAME): Sticker
    {
        $this->attributes['NAME'] = $NAME;
        $this->NAME = $NAME;
        return $this;
    }

    /**
     * @return string
     */
    public function getCOMPOSITION(): string
    {
        return $this->COMPOSITION;
    }

    /**
     * @param string $COMPOSITION
     * @return Sticker
     */
    public function setCOMPOSITION(string $COMPOSITION): Sticker
    {
        $this->attributes['COMPOSITION'] = $COMPOSITION;
        $this->COMPOSITION = $COMPOSITION;
        return $this;
    }

    /**
     * @return string
     */
    public function getSUPPLIERNAME(): string
    {
        return $this->SUPPLIER_NAME;
    }

    /**
     * @param string $SUPPLIER_NAME
     * @return Sticker
     */
    public function setSUPPLIERNAME(string $SUPPLIER_NAME): Sticker
    {
        $this->attributes['SUPPLIER_NAME'] = $SUPPLIER_NAME;
        $this->SUPPLIER_NAME = $SUPPLIER_NAME;
        return $this;
    }

    /**
     * @return string
     */
    public function getSUPPLIERADDRESS(): string
    {
        return $this->SUPPLIER_ADDRESS;
    }

    /**
     * @param string $SUPPLIER_ADDRESS
     * @return Sticker
     */
    public function setSUPPLIERADDRESS(string $SUPPLIER_ADDRESS): Sticker
    {
        $this->attributes['SUPPLIER_ADDRESS'] = $SUPPLIER_ADDRESS;
        $this->SUPPLIER_ADDRESS = $SUPPLIER_ADDRESS;
        return $this;
    }

    /**
     * @return string
     */
    public function getPRODUCTSPECIFIC(): string
    {
        return $this->PRODUCT_SPECIFIC;
    }

    /**
     * @param string $PRODUCT_SPECIFIC
     * @return Sticker
     */
    public function setPRODUCTSPECIFIC(string $PRODUCT_SPECIFIC): Sticker
    {
        $this->attributes['PRODUCT_SPECIFIC'] = $PRODUCT_SPECIFIC;
        $this->PRODUCT_SPECIFIC = $PRODUCT_SPECIFIC;
        return $this;
    }

    /**
     * @return string
     */
    public function getCOLORNAME(): string
    {
        return $this->COLOR_NAME;
    }

    /**
     * @param string $COLOR_NAME
     * @return Sticker
     */
    public function setCOLORNAME(string $COLOR_NAME): Sticker
    {
        $this->attributes['COLOR_NAME'] = $COLOR_NAME;
        $this->COLOR_NAME = $COLOR_NAME;
        return $this;
    }

    /**
     * @return string
     */
    public function getIMPORTER(): string
    {
        return $this->IMPORTER;
    }

    /**
     * @param string $IMPORTER
     * @return Sticker
     */
    public function setIMPORTER(string $IMPORTER): Sticker
    {
        $this->attributes['IMPORTER'] = $IMPORTER;
        $this->IMPORTER = $IMPORTER;
        return $this;
    }

    /**
     * @return string
     */
    public function getMANUFACTUREDDATE(): string
    {
        return $this->MANUFACTURED_DATE;
    }

    /**
     * @param string $MANUFACTURED_DATE
     * @return Sticker
     */
    public function setMANUFACTUREDDATE(string $MANUFACTURED_DATE): Sticker
    {
        $this->attributes['MANUFACTURED_DATE'] = $MANUFACTURED_DATE;
        $this->MANUFACTURED_DATE = $MANUFACTURED_DATE;
        return $this;
    }

    /**
     * @return string
     */
    public function getCOMMENT(): string
    {
        return $this->COMMENT;
    }

    /**
     * @param string $COMMENT
     * @return Sticker
     */
    public function setCOMMENT(string $COMMENT): Sticker
    {
        $this->attributes['COMMENT'] = $COMMENT;
        $this->COMMENT = $COMMENT;
        return $this;
    }

    /**
     * @return string
     */
    public function getMULTIPACKQTY(): string
    {
        return $this->MULTIPACK_QTY;
    }

    /**
     * @param string $MULTIPACK_QTY
     * @return Sticker
     */
    public function setMULTIPACKQTY(string $MULTIPACK_QTY): Sticker
    {
        $this->attributes['MULTIPACK_QTY'] = $MULTIPACK_QTY;
        $this->MULTIPACK_QTY = $MULTIPACK_QTY;
        return $this;
    }

    /**
     * @return string
     */
    public function getMULTIPACKBARCODE(): string
    {
        return $this->MULTIPACK_BARCODE;
    }

    /**
     * @param string $MULTIPACK_BARCODE
     * @return Sticker
     */
    public function setMULTIPACKBARCODE(string $MULTIPACK_BARCODE): Sticker
    {
        $this->attributes['MULTIPACK_BARCODE'] = $MULTIPACK_BARCODE;
        $this->MULTIPACK_BARCODE = $MULTIPACK_BARCODE;
        return $this;
    }

    /**
     * @return string
     */
    public function getSIZEUS(): string
    {
        return $this->SIZE_US;
    }

    /**
     * @param string $SIZE_US
     * @return Sticker
     */
    public function setSIZEUS(string $SIZE_US): Sticker
    {
        $this->attributes['SIZE_US'] = $SIZE_US;
        $this->SIZE_US = $SIZE_US;
        return $this;
    }

    /**
     * @return string
     */
    public function getSIZEUK(): string
    {
        return $this->SIZE_UK;
    }

    /**
     * @param string $SIZE_UK
     * @return Sticker
     */
    public function setSIZEUK(string $SIZE_UK): Sticker
    {
        $this->attributes['SIZE_UK'] = $SIZE_UK;
        $this->SIZE_UK = $SIZE_UK;
        return $this;
    }

    /**
     * @return string
     */
    public function getLABELASSIGNMENT(): string
    {
        return $this->LABEL_ASSIGNMENT;
    }

    /**
     * @param string $LABEL_ASSIGNMENT
     * @return Sticker
     */
    public function setLABELASSIGNMENT(string $LABEL_ASSIGNMENT): Sticker
    {
        $this->attributes['LABEL_ASSIGNMENT'] = $LABEL_ASSIGNMENT;
        $this->LABEL_ASSIGNMENT = $LABEL_ASSIGNMENT;
        return $this;
    }

    /**
     * @return string
     */
    public function getWASHING(): string
    {
        return $this->WASHING;
    }

    /**
     * @param string $WASHING
     * @return Sticker
     */
    public function setWASHING(string $WASHING): Sticker
    {
        $this->attributes['WASHING'] = $WASHING;
        $this->WASHING = $WASHING;
        return $this;
    }

    /**
     * @return string
     */
    public function getBLEACHING(): string
    {
        return $this->BLEACHING;
    }

    /**
     * @param string $BLEACHING
     * @return Sticker
     */
    public function setBLEACHING(string $BLEACHING): Sticker
    {
        $this->attributes['BLEACHING'] = $BLEACHING;
        $this->BLEACHING = $BLEACHING;
        return $this;
    }

    /**
     * @return string
     */
    public function getDRYING(): string
    {
        return $this->DRYING;
    }

    /**
     * @param string $DRYING
     * @return Sticker
     */
    public function setDRYING(string $DRYING): Sticker
    {
        $this->attributes['DRYING'] = $DRYING;
        $this->DRYING = $DRYING;
        return $this;
    }

    /**
     * @return string
     */
    public function getIRONING(): string
    {
        return $this->IRONING;
    }

    /**
     * @param string $IRONING
     * @return Sticker
     */
    public function setIRONING(string $IRONING): Sticker
    {
        $this->attributes['IRONING'] = $IRONING;
        $this->IRONING = $IRONING;
        return $this;
    }

    /**
     * @return string
     */
    public function getPROFESSIONALTEXTILECARE(): string
    {
        return $this->PROFESSIONAL_TEXTILE_CARE;
    }

    /**
     * @param string $PROFESSIONAL_TEXTILE_CARE
     * @return Sticker
     */
    public function setPROFESSIONALTEXTILECARE(string $PROFESSIONAL_TEXTILE_CARE): Sticker
    {
        $this->attributes['PROFESSIONAL_TEXTILE_CARE'] = $PROFESSIONAL_TEXTILE_CARE;
        $this->PROFESSIONAL_TEXTILE_CARE = $PROFESSIONAL_TEXTILE_CARE;
        return $this;
    }

    /**
     * @return string
     */
    public function getADDITIONALCARE(): string
    {
        return $this->ADDITIONAL_CARE;
    }

    /**
     * @param string $ADDITIONAL_CARE
     * @return Sticker
     */
    public function setADDITIONALCARE(string $ADDITIONAL_CARE): Sticker
    {
        $this->attributes['ADDITIONAL_CARE'] = $ADDITIONAL_CARE;
        $this->ADDITIONAL_CARE = $ADDITIONAL_CARE;
        return $this;
    }

    /**
     * @return string
     */
    public function getLICENSORPRODUCTCODE(): string
    {
        return $this->LICENSOR_PRODUCT_CODE;
    }

    /**
     * @param string $LICENSOR_PRODUCT_CODE
     * @return Sticker
     */
    public function setLICENSORPRODUCTCODE(string $LICENSOR_PRODUCT_CODE): Sticker
    {
        $this->attributes['LICENSOR_PRODUCT_CODE'] = $LICENSOR_PRODUCT_CODE;
        $this->LICENSOR_PRODUCT_CODE = $LICENSOR_PRODUCT_CODE;
        return $this;
    }

    /**
     * @return string
     */
    public function getCREATEDAT(): string
    {
        return $this->CREATED_AT;
    }

    /**
     * @return string
     */
    public function getUPDATEDAT(): string
    {
        return $this->UPDATED_AT;
    }
}
