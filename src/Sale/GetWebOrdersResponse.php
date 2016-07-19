<?php

namespace DdD\Sale;

class GetWebOrdersResponse
{

    /**
     * @var ArrayOfWebOrder $GetWebOrdersResult
     */
    protected $GetWebOrdersResult = null;

    /**
     * @param ArrayOfWebOrder $GetWebOrdersResult
     */
    public function __construct($GetWebOrdersResult)
    {
      $this->GetWebOrdersResult = $GetWebOrdersResult;
    }

    /**
     * @return ArrayOfWebOrder
     */
    public function getGetWebOrdersResult()
    {
      return $this->GetWebOrdersResult;
    }

    /**
     * @param ArrayOfWebOrder $GetWebOrdersResult
     * @return \DdD\Sale\GetWebOrdersResponse
     */
    public function setGetWebOrdersResult($GetWebOrdersResult)
    {
      $this->GetWebOrdersResult = $GetWebOrdersResult;
      return $this;
    }

}
