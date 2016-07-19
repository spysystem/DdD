<?php

namespace DdD\\Sale;

class SaveSaleResponse
{

    /**
     * @var Status $SaveSaleResult
     */
    protected $SaveSaleResult = null;

    /**
     * @param Status $SaveSaleResult
     */
    public function __construct($SaveSaleResult)
    {
      $this->SaveSaleResult = $SaveSaleResult;
    }

    /**
     * @return Status
     */
    public function getSaveSaleResult()
    {
      return $this->SaveSaleResult;
    }

    /**
     * @param Status $SaveSaleResult
     * @return \DdD\\Sale\SaveSaleResponse
     */
    public function setSaveSaleResult($SaveSaleResult)
    {
      $this->SaveSaleResult = $SaveSaleResult;
      return $this;
    }

}
