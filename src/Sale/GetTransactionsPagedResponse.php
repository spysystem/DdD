<?php

namespace DdD\\Sale;

class GetTransactionsPagedResponse
{

    /**
     * @var ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsPagedResult
     */
    protected $GetTransactionsPagedResult = null;

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsPagedResult
     */
    public function __construct($GetTransactionsPagedResult)
    {
      $this->GetTransactionsPagedResult = $GetTransactionsPagedResult;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function getGetTransactionsPagedResult()
    {
      return $this->GetTransactionsPagedResult;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsPagedResult
     * @return \DdD\\Sale\GetTransactionsPagedResponse
     */
    public function setGetTransactionsPagedResult($GetTransactionsPagedResult)
    {
      $this->GetTransactionsPagedResult = $GetTransactionsPagedResult;
      return $this;
    }

}
