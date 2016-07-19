<?php

namespace DdD\\Sale;

class GetTransactionsResponse
{

    /**
     * @var ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsResult
     */
    protected $GetTransactionsResult = null;

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsResult
     */
    public function __construct($GetTransactionsResult)
    {
      $this->GetTransactionsResult = $GetTransactionsResult;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function getGetTransactionsResult()
    {
      return $this->GetTransactionsResult;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsResult
     * @return \DdD\\Sale\GetTransactionsResponse
     */
    public function setGetTransactionsResult($GetTransactionsResult)
    {
      $this->GetTransactionsResult = $GetTransactionsResult;
      return $this;
    }

}
