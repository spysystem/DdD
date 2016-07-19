<?php

namespace DdD\Sale;

class GetTransactionsSinceLastNumberBySupplierResponse
{

    /**
     * @var ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsSinceLastNumberBySupplierResult
     */
    protected $GetTransactionsSinceLastNumberBySupplierResult = null;

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsSinceLastNumberBySupplierResult
     */
    public function __construct($GetTransactionsSinceLastNumberBySupplierResult)
    {
      $this->GetTransactionsSinceLastNumberBySupplierResult = $GetTransactionsSinceLastNumberBySupplierResult;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function getGetTransactionsSinceLastNumberBySupplierResult()
    {
      return $this->GetTransactionsSinceLastNumberBySupplierResult;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsSinceLastNumberBySupplierResult
     * @return \DdD\Sale\GetTransactionsSinceLastNumberBySupplierResponse
     */
    public function setGetTransactionsSinceLastNumberBySupplierResult($GetTransactionsSinceLastNumberBySupplierResult)
    {
      $this->GetTransactionsSinceLastNumberBySupplierResult = $GetTransactionsSinceLastNumberBySupplierResult;
      return $this;
    }

}
