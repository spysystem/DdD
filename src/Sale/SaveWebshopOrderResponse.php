<?php

namespace DdD\Sale;

class SaveWebshopOrderResponse
{

    /**
     * @var ResponseMessage $SaveWebshopOrderResult
     */
    protected $SaveWebshopOrderResult = null;

    /**
     * @param ResponseMessage $SaveWebshopOrderResult
     */
    public function __construct($SaveWebshopOrderResult)
    {
      $this->SaveWebshopOrderResult = $SaveWebshopOrderResult;
    }

    /**
     * @return ResponseMessage
     */
    public function getSaveWebshopOrderResult()
    {
      return $this->SaveWebshopOrderResult;
    }

    /**
     * @param ResponseMessage $SaveWebshopOrderResult
     * @return \DdD\Sale\SaveWebshopOrderResponse
     */
    public function setSaveWebshopOrderResult($SaveWebshopOrderResult)
    {
      $this->SaveWebshopOrderResult = $SaveWebshopOrderResult;
      return $this;
    }

}
