<?php

namespace DdD\\Sale;

class StartSaleResponse
{

    /**
     * @var Sale $StartSaleResult
     */
    protected $StartSaleResult = null;

    /**
     * @param Sale $StartSaleResult
     */
    public function __construct($StartSaleResult)
    {
      $this->StartSaleResult = $StartSaleResult;
    }

    /**
     * @return Sale
     */
    public function getStartSaleResult()
    {
      return $this->StartSaleResult;
    }

    /**
     * @param Sale $StartSaleResult
     * @return \DdD\\Sale\StartSaleResponse
     */
    public function setStartSaleResult($StartSaleResult)
    {
      $this->StartSaleResult = $StartSaleResult;
      return $this;
    }

}
