<?php

namespace DdD\\Stock;

class KeyValueOflongint
{

    /**
     * @var int $Key
     */
    protected $Key = null;

    /**
     * @var int $Value
     */
    protected $Value = null;

    /**
     * @param int $Key
     * @param int $Value
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
     * @return \DdD\\Stock\KeyValueOflongint
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param int $Value
     * @return \DdD\\Stock\KeyValueOflongint
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
