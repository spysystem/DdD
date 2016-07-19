<?php

namespace DdD\Stock;

class GetStockBySupplierResponse
{

    /**
     * @var ArrayOfArticleLine $GetStockBySupplierResult
     */
    protected $GetStockBySupplierResult = null;

    /**
     * @param ArrayOfArticleLine $GetStockBySupplierResult
     */
    public function __construct($GetStockBySupplierResult)
    {
      $this->GetStockBySupplierResult = $GetStockBySupplierResult;
    }

    /**
     * @return ArrayOfArticleLine
     */
    public function getGetStockBySupplierResult()
    {
      return $this->GetStockBySupplierResult;
    }

    /**
     * @param ArrayOfArticleLine $GetStockBySupplierResult
     * @return \DdD\Stock\GetStockBySupplierResponse
     */
    public function setGetStockBySupplierResult($GetStockBySupplierResult)
    {
      $this->GetStockBySupplierResult = $GetStockBySupplierResult;
      return $this;
    }

}
