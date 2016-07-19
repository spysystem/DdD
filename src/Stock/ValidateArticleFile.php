<?php

namespace DdD\Stock;

class ValidateArticleFile
{

    /**
     * @var int $koncern
     */
    protected $koncern = null;

    /**
     * @var ArrayOfstring $lines
     */
    protected $lines = null;

    /**
     * @var int $levConvertList
     */
    protected $levConvertList = null;

    /**
     * @var int $grpConvertList
     */
    protected $grpConvertList = null;

    /**
     * @var string $decimalSeparator
     */
    protected $decimalSeparator = null;

    /**
     * @param int $koncern
     * @param ArrayOfstring $lines
     * @param int $levConvertList
     * @param int $grpConvertList
     * @param string $decimalSeparator
     */
    public function __construct($koncern, $lines, $levConvertList, $grpConvertList, $decimalSeparator)
    {
      $this->koncern = $koncern;
      $this->lines = $lines;
      $this->levConvertList = $levConvertList;
      $this->grpConvertList = $grpConvertList;
      $this->decimalSeparator = $decimalSeparator;
    }

    /**
     * @return int
     */
    public function getKoncern()
    {
      return $this->koncern;
    }

    /**
     * @param int $koncern
     * @return \DdD\Stock\ValidateArticleFile
     */
    public function setKoncern($koncern)
    {
      $this->koncern = $koncern;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getLines()
    {
      return $this->lines;
    }

    /**
     * @param ArrayOfstring $lines
     * @return \DdD\Stock\ValidateArticleFile
     */
    public function setLines($lines)
    {
      $this->lines = $lines;
      return $this;
    }

    /**
     * @return int
     */
    public function getLevConvertList()
    {
      return $this->levConvertList;
    }

    /**
     * @param int $levConvertList
     * @return \DdD\Stock\ValidateArticleFile
     */
    public function setLevConvertList($levConvertList)
    {
      $this->levConvertList = $levConvertList;
      return $this;
    }

    /**
     * @return int
     */
    public function getGrpConvertList()
    {
      return $this->grpConvertList;
    }

    /**
     * @param int $grpConvertList
     * @return \DdD\Stock\ValidateArticleFile
     */
    public function setGrpConvertList($grpConvertList)
    {
      $this->grpConvertList = $grpConvertList;
      return $this;
    }

    /**
     * @return string
     */
    public function getDecimalSeparator()
    {
      return $this->decimalSeparator;
    }

    /**
     * @param string $decimalSeparator
     * @return \DdD\Stock\ValidateArticleFile
     */
    public function setDecimalSeparator($decimalSeparator)
    {
      $this->decimalSeparator = $decimalSeparator;
      return $this;
    }

}
