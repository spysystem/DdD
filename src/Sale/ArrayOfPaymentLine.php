<?php

namespace DdD\\Sale;

class ArrayOfPaymentLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PaymentLine[] $PaymentLine
     */
    protected $PaymentLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentLine[]
     */
    public function getPaymentLine()
    {
      return $this->PaymentLine;
    }

    /**
     * @param PaymentLine[] $PaymentLine
     * @return \DdD\\Sale\ArrayOfPaymentLine
     */
    public function setPaymentLine(array $PaymentLine = null)
    {
      $this->PaymentLine = $PaymentLine;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->PaymentLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PaymentLine
     */
    public function offsetGet($offset)
    {
      return $this->PaymentLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PaymentLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PaymentLine[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PaymentLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PaymentLine Return the current element
     */
    public function current()
    {
      return current($this->PaymentLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PaymentLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PaymentLine);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->PaymentLine);
    }

    /**
     * Countable implementation
     *
     * @return PaymentLine Return count of elements
     */
    public function count()
    {
      return count($this->PaymentLine);
    }

}
