<?php

namespace DdD\\Stock;

class ShipmentConfirmation
{

    /**
     * @var ArrayOfConfirmation $Confirmations
     */
    protected $Confirmations = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @var ShipmentConfirmationStatus $StatusType
     */
    protected $StatusType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfConfirmation
     */
    public function getConfirmations()
    {
      return $this->Confirmations;
    }

    /**
     * @param ArrayOfConfirmation $Confirmations
     * @return \DdD\\Stock\ShipmentConfirmation
     */
    public function setConfirmations($Confirmations)
    {
      $this->Confirmations = $Confirmations;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return \DdD\\Stock\ShipmentConfirmation
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

    /**
     * @return ShipmentConfirmationStatus
     */
    public function getStatusType()
    {
      return $this->StatusType;
    }

    /**
     * @param ShipmentConfirmationStatus $StatusType
     * @return \DdD\\Stock\ShipmentConfirmation
     */
    public function setStatusType($StatusType)
    {
      $this->StatusType = $StatusType;
      return $this;
    }

}
