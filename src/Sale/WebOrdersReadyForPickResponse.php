<?php

namespace DdD\Sale;

class WebOrdersReadyForPickResponse
{

    /**
     * @var boolean $WebOrdersReadyForPickResult
     */
    protected $WebOrdersReadyForPickResult = null;

    /**
     * @param boolean $WebOrdersReadyForPickResult
     */
    public function __construct($WebOrdersReadyForPickResult)
    {
      $this->WebOrdersReadyForPickResult = $WebOrdersReadyForPickResult;
    }

    /**
     * @return boolean
     */
    public function getWebOrdersReadyForPickResult()
    {
      return $this->WebOrdersReadyForPickResult;
    }

    /**
     * @param boolean $WebOrdersReadyForPickResult
     * @return \DdD\Sale\WebOrdersReadyForPickResponse
     */
    public function setWebOrdersReadyForPickResult($WebOrdersReadyForPickResult)
    {
      $this->WebOrdersReadyForPickResult = $WebOrdersReadyForPickResult;
      return $this;
    }

}
