<?php

namespace DdD\Sale;

class GetKeyFiguresResponse
{

    /**
     * @var ArrayOfKeyValueOfdateTimeKeyFigureszJ_S5Vm7C $GetKeyFiguresResult
     */
    protected $GetKeyFiguresResult = null;

    /**
     * @param ArrayOfKeyValueOfdateTimeKeyFigureszJ_S5Vm7C $GetKeyFiguresResult
     */
    public function __construct($GetKeyFiguresResult)
    {
      $this->GetKeyFiguresResult = $GetKeyFiguresResult;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeKeyFigureszJ_S5Vm7C
     */
    public function getGetKeyFiguresResult()
    {
      return $this->GetKeyFiguresResult;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeKeyFigureszJ_S5Vm7C $GetKeyFiguresResult
     * @return \DdD\Sale\GetKeyFiguresResponse
     */
    public function setGetKeyFiguresResult($GetKeyFiguresResult)
    {
      $this->GetKeyFiguresResult = $GetKeyFiguresResult;
      return $this;
    }

}
