<?php

namespace DdD\Stock;

class KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1
{

    /**
     * @var int $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfKeyValueOflongint $Value
     */
    protected $Value = null;

    /**
     * @param int $Key
     * @param ArrayOfKeyValueOflongint $Value
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
     * @return \DdD\Stock\KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfKeyValueOflongint
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param ArrayOfKeyValueOflongint $Value
     * @return \DdD\Stock\KeyValueOfintArrayOfKeyValueOflongintty7Ep6D1
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
