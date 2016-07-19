<?php

namespace DdD\Stock;

class ConfirmationItem
{

    /**
     * @var ConfirmationItemAction $Action
     */
    protected $Action = null;

    /**
     * @var string $Cleark
     */
    protected $Cleark = null;

    /**
     * @var string $EAN
     */
    protected $EAN = null;

    /**
     * @var string $EDBNR
     */
    protected $EDBNR = null;

    /**
     * @var int $QuantityConfirmed
     */
    protected $QuantityConfirmed = null;

    /**
     * @var \DateTime $ReveivingDate
     */
    protected $ReveivingDate = null;

    /**
     * @var ConfirmationStatus $StatusType
     */
    protected $StatusType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmationItemAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param ConfirmationItemAction $Action
     * @return \DdD\Stock\ConfirmationItem
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getCleark()
    {
      return $this->Cleark;
    }

    /**
     * @param string $Cleark
     * @return \DdD\Stock\ConfirmationItem
     */
    public function setCleark($Cleark)
    {
      $this->Cleark = $Cleark;
      return $this;
    }

    /**
     * @return string
     */
    public function getEAN()
    {
      return $this->EAN;
    }

    /**
     * @param string $EAN
     * @return \DdD\Stock\ConfirmationItem
     */
    public function setEAN($EAN)
    {
      $this->EAN = $EAN;
      return $this;
    }

    /**
     * @return string
     */
    public function getEDBNR()
    {
      return $this->EDBNR;
    }

    /**
     * @param string $EDBNR
     * @return \DdD\Stock\ConfirmationItem
     */
    public function setEDBNR($EDBNR)
    {
      $this->EDBNR = $EDBNR;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityConfirmed()
    {
      return $this->QuantityConfirmed;
    }

    /**
     * @param int $QuantityConfirmed
     * @return \DdD\Stock\ConfirmationItem
     */
    public function setQuantityConfirmed($QuantityConfirmed)
    {
      $this->QuantityConfirmed = $QuantityConfirmed;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReveivingDate()
    {
      if ($this->ReveivingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReveivingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReveivingDate
     * @return \DdD\Stock\ConfirmationItem
     */
    public function setReveivingDate(\DateTime $ReveivingDate = null)
    {
      if ($ReveivingDate == null) {
       $this->ReveivingDate = null;
      } else {
        $this->ReveivingDate = $ReveivingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ConfirmationStatus
     */
    public function getStatusType()
    {
      return $this->StatusType;
    }

    /**
     * @param ConfirmationStatus $StatusType
     * @return \DdD\Stock\ConfirmationItem
     */
    public function setStatusType($StatusType)
    {
      $this->StatusType = $StatusType;
      return $this;
    }

}
