<?php

namespace DdD\\Sale;

class GetKeyFiguresByTerminalResponse
{

    /**
     * @var ArrayOfKeyValueOfdateTimeArrayOfKeyFigureszJ_S5Vm7C $GetKeyFiguresByTerminalResult
     */
    protected $GetKeyFiguresByTerminalResult = null;

    /**
     * @param ArrayOfKeyValueOfdateTimeArrayOfKeyFigureszJ_S5Vm7C $GetKeyFiguresByTerminalResult
     */
    public function __construct($GetKeyFiguresByTerminalResult)
    {
      $this->GetKeyFiguresByTerminalResult = $GetKeyFiguresByTerminalResult;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeArrayOfKeyFigureszJ_S5Vm7C
     */
    public function getGetKeyFiguresByTerminalResult()
    {
      return $this->GetKeyFiguresByTerminalResult;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeArrayOfKeyFigureszJ_S5Vm7C $GetKeyFiguresByTerminalResult
     * @return \DdD\\Sale\GetKeyFiguresByTerminalResponse
     */
    public function setGetKeyFiguresByTerminalResult($GetKeyFiguresByTerminalResult)
    {
      $this->GetKeyFiguresByTerminalResult = $GetKeyFiguresByTerminalResult;
      return $this;
    }

}
