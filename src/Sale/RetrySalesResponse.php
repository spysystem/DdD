<?php

namespace DdD\Sale;

class RetrySalesResponse
{

    /**
     * @var Retry $RetrySalesResult
     */
    protected $RetrySalesResult = null;

    /**
     * @param Retry $RetrySalesResult
     */
    public function __construct($RetrySalesResult)
    {
      $this->RetrySalesResult = $RetrySalesResult;
    }

    /**
     * @return Retry
     */
    public function getRetrySalesResult()
    {
      return $this->RetrySalesResult;
    }

    /**
     * @param Retry $RetrySalesResult
     * @return \DdD\Sale\RetrySalesResponse
     */
    public function setRetrySalesResult($RetrySalesResult)
    {
      $this->RetrySalesResult = $RetrySalesResult;
      return $this;
    }

}
