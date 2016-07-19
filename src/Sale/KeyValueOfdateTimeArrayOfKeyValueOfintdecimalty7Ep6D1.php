<?php

namespace DdD\\Sale;

class KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1
{

    /**
     * @var \DateTime $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfKeyValueOfintdecimal $Value
     */
    protected $Value = null;

    /**
     * @param \DateTime $Key
     * @param ArrayOfKeyValueOfintdecimal $Value
     */
    public function __construct(\DateTime $Key, $Value)
    {
      $this->Key = $Key->format(\DateTime::ATOM);
      $this->Value = $Value;
    }

    /**
     * @return \DateTime
     */
    public function getKey()
    {
      if ($this->Key == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Key);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Key
     * @return \DdD\\Sale\KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1
     */
    public function setKey(\DateTime $Key)
    {
      $this->Key = $Key->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfKeyValueOfintdecimal
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param ArrayOfKeyValueOfintdecimal $Value
     * @return \DdD\\Sale\KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
