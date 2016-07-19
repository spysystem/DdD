<?php

namespace DdD\\Sale;

class ResponseMessage
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var int $State
     */
    protected $State = null;

    /**
     * @var \DateTime $TimeOfAction
     */
    protected $TimeOfAction = null;

    /**
     * @var anyType $UserValue
     */
    protected $UserValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \DdD\\Sale\ResponseMessage
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return int
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param int $State
     * @return \DdD\\Sale\ResponseMessage
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeOfAction()
    {
      if ($this->TimeOfAction == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeOfAction);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeOfAction
     * @return \DdD\\Sale\ResponseMessage
     */
    public function setTimeOfAction(\DateTime $TimeOfAction = null)
    {
      if ($TimeOfAction == null) {
       $this->TimeOfAction = null;
      } else {
        $this->TimeOfAction = $TimeOfAction->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return anyType
     */
    public function getUserValue()
    {
      return $this->UserValue;
    }

    /**
     * @param anyType $UserValue
     * @return \DdD\\Sale\ResponseMessage
     */
    public function setUserValue($UserValue)
    {
      $this->UserValue = $UserValue;
      return $this;
    }

}
