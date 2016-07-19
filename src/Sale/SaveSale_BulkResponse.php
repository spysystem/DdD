<?php

namespace DdD\\Sale;

class SaveSale_BulkResponse
{

    /**
     * @var ArrayOfStatus $SaveSale_BulkResult
     */
    protected $SaveSale_BulkResult = null;

    /**
     * @param ArrayOfStatus $SaveSale_BulkResult
     */
    public function __construct($SaveSale_BulkResult)
    {
      $this->SaveSale_BulkResult = $SaveSale_BulkResult;
    }

    /**
     * @return ArrayOfStatus
     */
    public function getSaveSale_BulkResult()
    {
      return $this->SaveSale_BulkResult;
    }

    /**
     * @param ArrayOfStatus $SaveSale_BulkResult
     * @return \DdD\\Sale\SaveSale_BulkResponse
     */
    public function setSaveSale_BulkResult($SaveSale_BulkResult)
    {
      $this->SaveSale_BulkResult = $SaveSale_BulkResult;
      return $this;
    }

}
