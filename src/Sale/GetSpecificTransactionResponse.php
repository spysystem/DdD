<?php

namespace DdD\\Sale;

class GetSpecificTransactionResponse
{

    /**
     * @var TransactionHeader $GetSpecificTransactionResult
     */
    protected $GetSpecificTransactionResult = null;

    /**
     * @param TransactionHeader $GetSpecificTransactionResult
     */
    public function __construct($GetSpecificTransactionResult)
    {
      $this->GetSpecificTransactionResult = $GetSpecificTransactionResult;
    }

    /**
     * @return TransactionHeader
     */
    public function getGetSpecificTransactionResult()
    {
      return $this->GetSpecificTransactionResult;
    }

    /**
     * @param TransactionHeader $GetSpecificTransactionResult
     * @return \DdD\\Sale\GetSpecificTransactionResponse
     */
    public function setGetSpecificTransactionResult($GetSpecificTransactionResult)
    {
      $this->GetSpecificTransactionResult = $GetSpecificTransactionResult;
      return $this;
    }

}
