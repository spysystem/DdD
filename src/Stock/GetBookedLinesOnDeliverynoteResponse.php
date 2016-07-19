<?php

namespace DdD\\Stock;

class GetBookedLinesOnDeliverynoteResponse
{

    /**
     * @var ArrayOfArticleLine $GetBookedLinesOnDeliverynoteResult
     */
    protected $GetBookedLinesOnDeliverynoteResult = null;

    /**
     * @param ArrayOfArticleLine $GetBookedLinesOnDeliverynoteResult
     */
    public function __construct($GetBookedLinesOnDeliverynoteResult)
    {
      $this->GetBookedLinesOnDeliverynoteResult = $GetBookedLinesOnDeliverynoteResult;
    }

    /**
     * @return ArrayOfArticleLine
     */
    public function getGetBookedLinesOnDeliverynoteResult()
    {
      return $this->GetBookedLinesOnDeliverynoteResult;
    }

    /**
     * @param ArrayOfArticleLine $GetBookedLinesOnDeliverynoteResult
     * @return \DdD\\Stock\GetBookedLinesOnDeliverynoteResponse
     */
    public function setGetBookedLinesOnDeliverynoteResult($GetBookedLinesOnDeliverynoteResult)
    {
      $this->GetBookedLinesOnDeliverynoteResult = $GetBookedLinesOnDeliverynoteResult;
      return $this;
    }

}
