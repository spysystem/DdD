<?php

namespace DdD\\Sale;

class KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
{

    /**
     * @var \DateTime $Key
     */
    protected $Key = null;

    /**
     * @var TransactionHeader $Value
     */
    protected $Value = null;

    /**
     * @param \DateTime $Key
     * @param TransactionHeader $Value
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
     * @return \DdD\\Sale\KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function setKey(\DateTime $Key)
    {
      $this->Key = $Key->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return TransactionHeader
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param TransactionHeader $Value
     * @return \DdD\\Sale\KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
