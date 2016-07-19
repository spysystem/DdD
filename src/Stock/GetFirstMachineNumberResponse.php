<?php

namespace DdD\\Stock;

class GetFirstMachineNumberResponse
{

    /**
     * @var int $GetFirstMachineNumberResult
     */
    protected $GetFirstMachineNumberResult = null;

    /**
     * @param int $GetFirstMachineNumberResult
     */
    public function __construct($GetFirstMachineNumberResult)
    {
      $this->GetFirstMachineNumberResult = $GetFirstMachineNumberResult;
    }

    /**
     * @return int
     */
    public function getGetFirstMachineNumberResult()
    {
      return $this->GetFirstMachineNumberResult;
    }

    /**
     * @param int $GetFirstMachineNumberResult
     * @return \DdD\\Stock\GetFirstMachineNumberResponse
     */
    public function setGetFirstMachineNumberResult($GetFirstMachineNumberResult)
    {
      $this->GetFirstMachineNumberResult = $GetFirstMachineNumberResult;
      return $this;
    }

}
