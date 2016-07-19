<?php

namespace DdD\Stock;

class MakeDeliveryNoteResponse
{

    /**
     * @var ArticleResponse $MakeDeliveryNoteResult
     */
    protected $MakeDeliveryNoteResult = null;

    /**
     * @param ArticleResponse $MakeDeliveryNoteResult
     */
    public function __construct($MakeDeliveryNoteResult)
    {
      $this->MakeDeliveryNoteResult = $MakeDeliveryNoteResult;
    }

    /**
     * @return ArticleResponse
     */
    public function getMakeDeliveryNoteResult()
    {
      return $this->MakeDeliveryNoteResult;
    }

    /**
     * @param ArticleResponse $MakeDeliveryNoteResult
     * @return \DdD\Stock\MakeDeliveryNoteResponse
     */
    public function setMakeDeliveryNoteResult($MakeDeliveryNoteResult)
    {
      $this->MakeDeliveryNoteResult = $MakeDeliveryNoteResult;
      return $this;
    }

}
