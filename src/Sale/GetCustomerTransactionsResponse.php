<?php

namespace DdD\Sale;

class GetCustomerTransactionsResponse
{

    /**
     * @var ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetCustomerTransactionsResult
     */
    protected $GetCustomerTransactionsResult = null;

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetCustomerTransactionsResult
     */
    public function __construct($GetCustomerTransactionsResult)
    {
      $this->GetCustomerTransactionsResult = $GetCustomerTransactionsResult;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function getGetCustomerTransactionsResult()
    {
      return $this->GetCustomerTransactionsResult;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetCustomerTransactionsResult
     * @return \DdD\Sale\GetCustomerTransactionsResponse
     */
    public function setGetCustomerTransactionsResult($GetCustomerTransactionsResult)
    {
      $this->GetCustomerTransactionsResult = $GetCustomerTransactionsResult;
      return $this;
    }

}
