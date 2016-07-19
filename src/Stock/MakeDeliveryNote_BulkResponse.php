<?php

namespace DdD\\Stock;

class MakeDeliveryNote_BulkResponse
{

    /**
     * @var ArrayOfArticleResponse $MakeDeliveryNote_BulkResult
     */
    protected $MakeDeliveryNote_BulkResult = null;

    /**
     * @param ArrayOfArticleResponse $MakeDeliveryNote_BulkResult
     */
    public function __construct($MakeDeliveryNote_BulkResult)
    {
      $this->MakeDeliveryNote_BulkResult = $MakeDeliveryNote_BulkResult;
    }

    /**
     * @return ArrayOfArticleResponse
     */
    public function getMakeDeliveryNote_BulkResult()
    {
      return $this->MakeDeliveryNote_BulkResult;
    }

    /**
     * @param ArrayOfArticleResponse $MakeDeliveryNote_BulkResult
     * @return \DdD\\Stock\MakeDeliveryNote_BulkResponse
     */
    public function setMakeDeliveryNote_BulkResult($MakeDeliveryNote_BulkResult)
    {
      $this->MakeDeliveryNote_BulkResult = $MakeDeliveryNote_BulkResult;
      return $this;
    }

}
