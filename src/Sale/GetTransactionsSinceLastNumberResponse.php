<?php

namespace DdD\\Sale;

class GetTransactionsSinceLastNumberResponse
{

    /**
     * @var ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsSinceLastNumberResult
     */
    protected $GetTransactionsSinceLastNumberResult = null;

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsSinceLastNumberResult
     */
    public function __construct($GetTransactionsSinceLastNumberResult)
    {
      $this->GetTransactionsSinceLastNumberResult = $GetTransactionsSinceLastNumberResult;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function getGetTransactionsSinceLastNumberResult()
    {
      return $this->GetTransactionsSinceLastNumberResult;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsSinceLastNumberResult
     * @return \DdD\\Sale\GetTransactionsSinceLastNumberResponse
     */
    public function setGetTransactionsSinceLastNumberResult($GetTransactionsSinceLastNumberResult)
    {
      $this->GetTransactionsSinceLastNumberResult = $GetTransactionsSinceLastNumberResult;
      return $this;
    }

}
