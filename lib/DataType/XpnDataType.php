<?php

namespace Hl7v2\DataType;

/**
 * Extended Person Name (XPN).
 */
class XpnDataType extends ComponentDataType
{
    const MAX_LEN = 1103;

    /**
     * @var \Hl7v2\DataType\FnDataType
     */
    private $familyName;
    /**
     * @var \Hl7v2\DataType\StDataType
     */
    private $givenName;
    /**
     * @var \Hl7v2\DataType\StDataType
     */
    private $secondNames;
    /**
     * @var \Hl7v2\DataType\StDataType
     */
    private $suffix;
    /**
     * @var \Hl7v2\DataType\StDataType
     */
    private $prefix;
    /**
     * @var \Hl7v2\DataType\IsDataType
     */
    private $degree;
    /**
     * @var \Hl7v2\DataType\IdDataType
     */
    private $nameTypeCode;
    /**
     * @var \Hl7v2\DataType\IdDataType
     */
    private $nameRepresentationCode;
    /**
     * @var \Hl7v2\DataType\CeDataType
     */
    private $nameContext;
    /**
     * @var \Hl7v2\DataType\DrDataType
     */
    private $nameValidityRange;
    /**
     * @var \Hl7v2\DataType\IdDataType
     */
    private $nameAssemblyOrder;
    /**
     * @var \Hl7v2\DataType\TsDataType
     */
    private $effectiveDate;
    /**
     * @var \Hl7v2\DataType\TsDataType
     */
    private $expirationDate;
    /**
     * @var \Hl7v2\DataType\StDataType
     */
    private $professionalSuffix;

    /**
     * @param string $familyNameSurname
     * @param string $familyNameOwnSurnamePrefix
     * @param string $familyNameOwnSurname
     * @param string $familyNameSurnamePrefixFromPartner
     * @param string $familyNameSurnameFromPartner
     */
    public function setFamilyName(
        $familyNameSurname,
        $familyNameOwnSurnamePrefix = null,
        $familyNameOwnSurname = null,
        $familyNameSurnamePrefixFromPartner = null,
        $familyNameSurnameFromPartner = null
    ) {
        $this->familyName = $this
            ->dataTypeFactory
            ->create('FN', $this->encodingParameters, true)
        ;
        $this->familyName->setSurname($familyNameSurname);
        $this->familyName->setOwnSurnamePrefix($familyNameOwnSurnamePrefix);
        $this->familyName->setOwnSurname($familyNameOwnSurname);
        $this->familyName->setSurnamePrefixFromPartner($familyNameSurnamePrefixFromPartner);
        $this->familyName->setSurnameFromPartner($familyNameSurnameFromPartner);
    }

    /**
     * @param string $givenName
     */
    public function setGivenName($givenName = null)
    {
        $this->givenName = $this
            ->dataTypeFactory
            ->create('ST', $this->encodingParameters)
        ;
        $this->givenName->setValue($givenName);
    }

    /**
     * @param string $secondNames
     */
    public function setSecondNames($secondNames = null)
    {
        $this->secondNames = $this
            ->dataTypeFactory
            ->create('ST', $this->encodingParameters)
        ;
        $this->secondNames->setValue($secondNames);
    }

    /**
     * @param string $suffix
     */
    public function setSuffix($suffix = null)
    {
        $this->suffix = $this
            ->dataTypeFactory
            ->create('ST', $this->encodingParameters)
        ;
        $this->suffix->setValue($suffix);
    }

    /**
     * @param string $prefix
     */
    public function setPrefix($prefix = null)
    {
        $this->prefix = $this
            ->dataTypeFactory
            ->create('ST', $this->encodingParameters)
        ;
        $this->prefix->setValue($prefix);
    }

    /**
     * @param string $degree
     */
    public function setDegree($degree = null)
    {
        $this->degree = $this
            ->dataTypeFactory
            ->create('IS', $this->encodingParameters)
        ;
        $this->degree->setValue($degree);
    }

    /**
     * @param string $nameTypeCode
     */
    public function setNameTypeCode($nameTypeCode = null)
    {
        $this->nameTypeCode = $this
            ->dataTypeFactory
            ->create('ID', $this->encodingParameters)
        ;
        $this->nameTypeCode->setValue($nameTypeCode);
    }

    /**
     * @param string $nameRepresentationCode
     */
    public function setNameRepresentationCode($nameRepresentationCode = null)
    {
        $this->nameRepresentationCode = $this
            ->dataTypeFactory
            ->create('ID', $this->encodingParameters)
        ;
        $this->nameRepresentationCode->setValue($nameRepresentationCode);
    }

    /**
     * @param string $nameContextIdentifier
     * @param string $nameContextText
     * @param string $nameContextNameOfCodingSystem
     * @param string $nameContextAltIdentifier
     * @param string $nameContextAltText
     * @param string $nameContextNameOfAltCodingSystem
     */
    public function setNameContext(
        $nameContextIdentifier = null,
        $nameContextText = null,
        $nameContextNameOfCodingSystem = null,
        $nameContextAltIdentifier = null,
        $nameContextAltText = null,
        $nameContextNameOfAltCodingSystem = null
    ) {
        $this->nameContext = $this
            ->dataTypeFactory
            ->create('CE', $this->encodingParameters, true)
        ;
        $this->nameContext->setIdentifier($nameContextIdentifier);
        $this->nameContext->setText($nameContextText);
        $this->nameContext->setNameOfCodingSystem($nameContextNameOfCodingSystem);
        $this->nameContext->setAltIdentifier($nameContextAltIdentifier);
        $this->nameContext->setAltText($nameContextAltText);
        $this->nameContext->setNameOfAltCodingSystem($nameContextNameOfAltCodingSystem);
    }

    /**
     * @param string $nameValidityRangeRangeStartDateTimeTime
     * @param string $nameValidityRangeRangeStartDateTimeDegreeOfPrecision
     * @param string $nameValidityRangeRangeEndDateTimeTime
     * @param string $nameValidityRangeRangeEndDateTimeDegreeOfPrecision
     */
    public function setNameValidityRange(
        $nameValidityRangeRangeStartDateTimeTime,
        $nameValidityRangeRangeStartDateTimeDegreeOfPrecision = null,
        $nameValidityRangeRangeEndDateTimeTime,
        $nameValidityRangeRangeEndDateTimeDegreeOfPrecision = null
    ) {
        $this->nameValidityRange = $this
            ->dataTypeFactory
            ->create('DR', $this->encodingParameters, true)
        ;
        $this->nameValidityRange->setRangeStartDateTime(
            $nameValidityRangeRangeStartDateTimeTime,
            $nameValidityRangeRangeStartDateTimeDegreeOfPrecision
        );
        $this->nameValidityRange->setRangeEndDateTime(
            $nameValidityRangeRangeEndDateTimeTime,
            $nameValidityRangeRangeEndDateTimeDegreeOfPrecision
        );
    }

    /**
     * @param string $nameAssemblyOrder
     */
    public function setNameAssemblyOrder($nameAssemblyOrder = null)
    {
        $this->nameAssemblyOrder = $this
            ->dataTypeFactory
            ->create('ID', $this->encodingParameters)
        ;
        $this->nameAssemblyOrder->setValue($nameAssemblyOrder);
    }

    /**
     * @param string $effectiveDateTime
     * @param string $effectiveDateDegreeOfPrecision
     */
    public function setEffectiveDate($effectiveDateTime, $effectiveDateDegreeOfPrecision = null)
    {
        $this->effectiveDate = $this
            ->dataTypeFactory
            ->create('TS', $this->encodingParameters, true)
        ;
        $this->effectiveDate->setTime($effectiveDateTime);
        $this->effectiveDate->setDegreeOfPrecision($effectiveDateDegreeOfPrecision);
    }

    /**
     * @param string $expirationDateTime
     * @param string $expirationDateDegreeOfPrecision
     */
    public function setExpirationDate($expirationDateTime, $expirationDateDegreeOfPrecision = null)
    {
        $this->expirationDate = $this
            ->dataTypeFactory
            ->create('TS', $this->encodingParameters, true)
        ;
        $this->expirationDate->setTime($expirationDateTime);
        $this->expirationDate->setDegreeOfPrecision($expirationDateDegreeOfPrecision);
    }

    /**
     * @param string $professionalSuffix
     */
    public function setProfessionalSuffix($professionalSuffix = null)
    {
        $this->professionalSuffix = $this
            ->dataTypeFactory
            ->create('ST', $this->encodingParameters)
        ;
        $this->professionalSuffix->setValue($professionalSuffix);
    }

    /**
     * @return \Hl7v2\DataType\FnDataType
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @return \Hl7v2\DataType\StDataType
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @return \Hl7v2\DataType\StDataType
     */
    public function getSecondNames()
    {
        return $this->secondNames;
    }

    /**
     * @return \Hl7v2\DataType\StDataType
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @return \Hl7v2\DataType\StDataType
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @return \Hl7v2\DataType\IsDataType
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * @return \Hl7v2\DataType\IdDataType
     */
    public function getNameTypeCode()
    {
        return $this->nameTypeCode;
    }

    /**
     * @return \Hl7v2\DataType\IdDataType
     */
    public function getNameRepresentationCode()
    {
        return $this->nameRepresentationCode;
    }

    /**
     * @return \Hl7v2\DataType\CeDataType
     */
    public function getNameContext()
    {
        return $this->nameContext;
    }

    /**
     * @return \Hl7v2\DataType\DrDataType
     */
    public function getNameValidityRange()
    {
        return $this->nameValidityRange;
    }

    /**
     * @return \Hl7v2\DataType\IdDataType
     */
    public function getNameAssemblyOrder()
    {
        return $this->nameAssemblyOrder;
    }

    /**
     * @return \Hl7v2\DataType\TsDataType
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @return \Hl7v2\DataType\TsDataType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @return \Hl7v2\DataType\StDataType
     */
    public function getProfessionalSuffix()
    {
        return $this->professionalSuffix;
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

        if ($this->getFamilyName()) {
            $s .= (string) $this->getFamilyName();
        }

        $emptyComponentsSinceLastComponent = 0;

        if (!$this->getGivenName() || !$this->getGivenName()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getGivenName()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getSecondNames() || !$this->getSecondNames()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getSecondNames()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getSuffix() || !$this->getSuffix()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getSuffix()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getPrefix() || !$this->getPrefix()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getPrefix()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getDegree() || !$this->getDegree()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getDegree()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getNameTypeCode() || !$this->getNameTypeCode()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getNameTypeCode()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getNameRepresentationCode() || !$this->getNameRepresentationCode()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getNameRepresentationCode()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getNameContext()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $value = (string) $this->getNameContext();
            if ($value === '') {
                ++$emptyComponentsSinceLastComponent;
            } else {
                $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                    . $value
                ;
                $emptyComponentsSinceLastComponent = 0;
            }
        }

        if (!$this->getNameValidityRange()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $value = (string) $this->getNameValidityRange();
            if ($value === '') {
                ++$emptyComponentsSinceLastComponent;
            } else {
                $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                    . $value
                ;
                $emptyComponentsSinceLastComponent = 0;
            }
        }

        if (!$this->getNameAssemblyOrder() || !$this->getNameAssemblyOrder()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getNameAssemblyOrder()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        if (!$this->getEffectiveDate()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $value = (string) $this->getEffectiveDate();
            if ($value === '') {
                ++$emptyComponentsSinceLastComponent;
            } else {
                $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                    . $value
                ;
                $emptyComponentsSinceLastComponent = 0;
            }
        }

        if (!$this->getExpirationDate()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $value = (string) $this->getExpirationDate();
            if ($value === '') {
                ++$emptyComponentsSinceLastComponent;
            } else {
                $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                    . $value
                ;
                $emptyComponentsSinceLastComponent = 0;
            }
        }

        if (!$this->getProfessionalSuffix() || !$this->getProfessionalSuffix()->hasValue()) {
            ++$emptyComponentsSinceLastComponent;
        } else {
            $s .= str_repeat($sep, 1 + $emptyComponentsSinceLastComponent)
                . (string) $this->getProfessionalSuffix()->getValue();
            ;
            $emptyComponentsSinceLastComponent = 0;
        }

        return $s;
    }
}
