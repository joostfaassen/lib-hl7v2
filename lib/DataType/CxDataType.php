<?php

namespace Hl7v2\DataType;

/**
 * Extended Composite ID with Check Digit (CX).
 */
class CxDataType extends ComponentDataType
{
    const MAX_LEN = 1913;

    /**
     * @var \Hl7v2\DataType\StDataType
     */
    private $idNumber;
    /**
     * @var \Hl7v2\DataType\StDataType
     */
    private $checkDigit;
    /**
     * @var \Hl7v2\DataType\IdDataType
     */
    private $checkDigitScheme;
    /**
     * @var \Hl7v2\DataType\HdDataType
     */
    private $assigningAuthority;
    /**
     * @var \Hl7v2\DataType\IdDataType
     */
    private $identifierTypeCode;
    /**
     * @var \Hl7v2\DataType\HdDataType
     */
    private $assigningFacility;
    /**
     * @var \Hl7v2\DataType\DtDataType
     */
    private $effectiveDate;
    /**
     * @var \Hl7v2\DataType\DtDataType
     */
    private $expirationDate;
    /**
     * @var \Hl7v2\DataType\CweDataType
     */
    private $assigningJurisdiction;
    /**
     * @var \Hl7v2\DataType\CweDataType
     */
    private $assigningAgency;

    /**
     * @param string $idNumber
     */
    public function setIdNumber($idNumber)
    {
        $this->idNumber = $this
            ->dataTypeFactory
            ->create('ST', $this->encodingParameters)
        ;
        $this->idNumber->setValue($idNumber);
    }

    /**
     * @param string $checkDigit
     */
    public function setCheckDigit($checkDigit = null)
    {
        $this->checkDigit = $this
            ->dataTypeFactory
            ->create('ST', $this->encodingParameters)
        ;
        $this->checkDigit->setValue($checkDigit);
    }

    /**
     * @param string $checkDigitScheme
     */
    public function setCheckDigitScheme($checkDigitScheme = null)
    {
        $this->checkDigitScheme = $this
            ->dataTypeFactory
            ->create('ID', $this->encodingParameters)
        ;
        $this->checkDigitScheme->setValue($checkDigitScheme);
    }

    /**
     * @param string $assigningAuthorityNamespaceId
     * @param string $assigningAuthorityUniversalId
     * @param string $assigningAuthorityUniversalIdType
     */
    public function setAssigningAuthority(
        $assigningAuthorityNamespaceId = null,
        $assigningAuthorityUniversalId = null,
        $assigningAuthorityUniversalIdType = null
    ) {
        $this->assigningAuthority = $this
            ->dataTypeFactory
            ->create('HD', $this->encodingParameters, true)
        ;
        $this->assigningAuthority->setNamespaceId($assigningAuthorityNamespaceId);
        $this->assigningAuthority->setUniversalId($assigningAuthorityUniversalId);
        $this->assigningAuthority->setUniversalIdType($assigningAuthorityUniversalIdType);
    }

    /**
     * @param string $identifierTypeCode
     */
    public function setIdentifierTypeCode($identifierTypeCode = null)
    {
        $this->identifierTypeCode = $this
            ->dataTypeFactory
            ->create('ID', $this->encodingParameters)
        ;
        $this->identifierTypeCode->setValue($identifierTypeCode);
    }

    /**
     * @param string $assigningFacilityNamespaceId
     * @param string $assigningFacilityUniversalId
     * @param string $assigningFacilityUniversalIdType
     */
    public function setAssigningFacility(
        $assigningFacilityNamespaceId = null,
        $assigningFacilityUniversalId = null,
        $assigningFacilityUniversalIdType = null
    ) {
        $this->assigningFacility = $this
            ->dataTypeFactory
            ->create('HD', $this->encodingParameters, true)
        ;
        $this->assigningFacility->setNamespaceId($assigningFacilityNamespaceId);
        $this->assigningFacility->setUniversalId($assigningFacilityUniversalId);
        $this->assigningFacility->setUniversalIdType($assigningFacilityUniversalIdType);
    }

    /**
     * @param string $effectiveDate
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        $this->effectiveDate = $this
            ->dataTypeFactory
            ->create('DT', $this->encodingParameters)
        ;
        $this->effectiveDate->setValue($effectiveDate);
    }

    /**
     * @param string $expirationDate
     */
    public function setExpirationDate($expirationDate = null)
    {
        $this->expirationDate = $this
            ->dataTypeFactory
            ->create('DT', $this->encodingParameters)
        ;
        $this->expirationDate->setValue($expirationDate);
    }

    /**
     * @param string $assigningJurisdictionIdentifier
     * @param string $assigningJurisdictionText
     * @param string $assigningJurisdictionNameOfCodingSystem
     * @param string $assigningJurisdictionAltIdentifier
     * @param string $assigningJurisdictionAltText
     * @param string $assigningJurisdictionNameOfAltCodingSystem
     * @param string $assigningJurisdictionCodingSystemVersionId
     * @param string $assigningJurisdictionAltCodingSystemVersionId
     * @param string $assigningJurisdictionOriginalText
     */
    public function setAssigningJurisdiction(
        $assigningJurisdictionIdentifier = null,
        $assigningJurisdictionText = null,
        $assigningJurisdictionNameOfCodingSystem = null,
        $assigningJurisdictionAltIdentifier = null,
        $assigningJurisdictionAltText = null,
        $assigningJurisdictionNameOfAltCodingSystem = null,
        $assigningJurisdictionCodingSystemVersionId = null,
        $assigningJurisdictionAltCodingSystemVersionId = null,
        $assigningJurisdictionOriginalText = null
    ) {
        $this->assigningJurisdiction = $this
            ->dataTypeFactory
            ->create('CWE', $this->encodingParameters, true)
        ;
        $this->assigningJurisdiction->setIdentifier($assigningJurisdictionIdentifier);
        $this->assigningJurisdiction->setText($assigningJurisdictionText);
        $this->assigningJurisdiction->setNameOfCodingSystem(
            $assigningJurisdictionNameOfCodingSystem
        );
        $this->assigningJurisdiction->setAltIdentifier($assigningJurisdictionAltIdentifier);
        $this->assigningJurisdiction->setAltText($assigningJurisdictionAltText);
        $this->assigningJurisdiction->setNameOfAltCodingSystem(
            $assigningJurisdictionNameOfAltCodingSystem
        );
        $this->assigningJurisdiction->setCodingSystemVersionId(
            $assigningJurisdictionCodingSystemVersionId
        );
        $this->assigningJurisdiction->setAltCodingSystemVersionId(
            $assigningJurisdictionAltCodingSystemVersionId
        );
        $this->assigningJurisdiction->setOriginalText($assigningJurisdictionOriginalText);
    }

    /**
     * @param string $assigningAgencyIdentifier
     * @param string $assigningAgencyText
     * @param string $assigningAgencyNameOfCodingSystem
     * @param string $assigningAgencyAltIdentifier
     * @param string $assigningAgencyAltText
     * @param string $assigningAgencyNameOfAltCodingSystem
     * @param string $assigningAgencyCodingSystemVersionId
     * @param string $assigningAgencyAltCodingSystemVersionId
     * @param string $assigningAgencyOriginalText
     */
    public function setAssigningAgency(
        $assigningAgencyIdentifier = null,
        $assigningAgencyText = null,
        $assigningAgencyNameOfCodingSystem = null,
        $assigningAgencyAltIdentifier = null,
        $assigningAgencyAltText = null,
        $assigningAgencyNameOfAltCodingSystem = null,
        $assigningAgencyCodingSystemVersionId = null,
        $assigningAgencyAltCodingSystemVersionId = null,
        $assigningAgencyOriginalText = null
    ) {
        $this->assigningAgency = $this
            ->dataTypeFactory
            ->create('CWE', $this->encodingParameters, true)
        ;
        $this->assigningAgency->setIdentifier($assigningAgencyIdentifier);
        $this->assigningAgency->setText($assigningAgencyText);
        $this->assigningAgency->setNameOfCodingSystem($assigningAgencyNameOfCodingSystem);
        $this->assigningAgency->setAltIdentifier($assigningAgencyAltIdentifier);
        $this->assigningAgency->setAltText($assigningAgencyAltText);
        $this->assigningAgency->setNameOfAltCodingSystem($assigningAgencyNameOfAltCodingSystem);
        $this->assigningAgency->setCodingSystemVersionId($assigningAgencyCodingSystemVersionId);
        $this->assigningAgency->setAltCodingSystemVersionId(
            $assigningAgencyAltCodingSystemVersionId
        );
        $this->assigningAgency->setOriginalText($assigningAgencyOriginalText);
    }

    /**
     * @return \Hl7v2\DataType\StDataType
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

    /**
     * @return \Hl7v2\DataType\StDataType
     */
    public function getCheckDigit()
    {
        return $this->checkDigit;
    }

    /**
     * @return \Hl7v2\DataType\IdDataType
     */
    public function getCheckDigitScheme()
    {
        return $this->checkDigitScheme;
    }

    /**
     * @return \Hl7v2\DataType\HdDataType
     */
    public function getAssigningAuthority()
    {
        return $this->assigningAuthority;
    }

    /**
     * @return \Hl7v2\DataType\IdDataType
     */
    public function getIdentifierTypeCode()
    {
        return $this->identifierTypeCode;
    }

    /**
     * @return \Hl7v2\DataType\HdDataType
     */
    public function getAssigningFacility()
    {
        return $this->assigningFacility;
    }

    /**
     * @return \Hl7v2\DataType\DtDataType
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @return \Hl7v2\DataType\DtDataType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @return \Hl7v2\DataType\CweDataType
     */
    public function getAssigningJurisdiction()
    {
        return $this->assigningJurisdiction;
    }

    /**
     * @return \Hl7v2\DataType\CweDataType
     */
    public function getAssigningAgency()
    {
        return $this->assigningAgency;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $s = '';

        $sep = $this->isSubcomponent
            ? $this->encodingParameters->getSubcomponentSep()
            : $this->encodingParameters->getComponentSep()
        ;

        if ($this->getIdNumber() && $this->getIdNumber()->hasValue()) {
            $s .= (string) $this->getIdNumber()->getValue();
        }

        $emptyComponentsSinceLastComponent = 0;

        if (!$this->getCheckDigit() || !$this->getCheckDigit()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getCheckDigit()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getCheckDigitScheme() || !$this->getCheckDigitScheme()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getCheckDigitScheme()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getAssigningAuthority()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $value = (string) $this->getAssigningAuthority();
            if ($value === '') {
                ++$emptyComponentsSinceLastComponent;
            } else {
                $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                    . $value
                ;
                $emptyComponentsSinceLastComponent = 0;
            }
        }

        if (!$this->getIdentifierTypeCode() || !$this->getIdentifierTypeCode()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getIdentifierTypeCode()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getAssigningFacility()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $value = (string) $this->getAssigningFacility();
            if ($value === '') {
                ++$emptyComponentsSinceLastComponent;
            } else {
                $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                    . $value
                ;
                $emptyComponentsSinceLastComponent = 0;
            }
        }

        if (!$this->getEffectiveDate() || !$this->getEffectiveDate()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getEffectiveDate()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getExpirationDate() || !$this->getExpirationDate()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getExpirationDate()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getAssigningJurisdiction()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $value = (string) $this->getAssigningJurisdiction();
            if ($value === '') {
                ++$emptyComponentsSinceLastComponent;
            } else {
                $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                    . $value
                ;
                $emptyComponentsSinceLastComponent = 0;
            }
        }

        if (!$this->getAssigningAgency()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $value = (string) $this->getAssigningAgency();
            if ($value === '') {
                ++$emptyComponentsSinceLastComponent;
            } else {
                $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                    . $value
                ;
                $emptyComponentsSinceLastComponent = 0;
            }
        }

        return $s;
    }
}
