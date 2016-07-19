<?php

namespace DdD\\Sale;

class KeyValueOfintdecimal
{

    /**
     * @var int $Key
     */
    protected $Key = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @param int $Key
     * @param float $Value
     */
    public function __construct($Key, $Value)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

    /**
     * @return int
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param int $Key
     * @return \DdD\\Sale\KeyValueOfintdecimal
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \DdD\\Sale\KeyValueOfintdecimal
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
