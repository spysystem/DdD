<?php

namespace DdD\Sale;

class GetTransactionsBySupplierResponse
{

    /**
     * @var ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsBySupplierResult
     */
    protected $GetTransactionsBySupplierResult = null;

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsBySupplierResult
     */
    public function __construct($GetTransactionsBySupplierResult)
    {
      $this->GetTransactionsBySupplierResult = $GetTransactionsBySupplierResult;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function getGetTransactionsBySupplierResult()
    {
      return $this->GetTransactionsBySupplierResult;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $GetTransactionsBySupplierResult
     * @return \DdD\Sale\GetTransactionsBySupplierResponse
     */
    public function setGetTransactionsBySupplierResult($GetTransactionsBySupplierResult)
    {
      $this->GetTransactionsBySupplierResult = $GetTransactionsBySupplierResult;
      return $this;
    }

}
