<?php

namespace DdD\\Stock;

class ArrayOfPriceChange implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PriceChange[] $PriceChange
     */
    protected $PriceChange = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceChange[]
     */
    public function getPriceChange()
    {
      return $this->PriceChange;
    }

    /**
     * @param PriceChange[] $PriceChange
     * @return \DdD\\Stock\ArrayOfPriceChange
     */
    public function setPriceChange(array $PriceChange = null)
    {
      $this->PriceChange = $PriceChange;
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
      return isset($this->PriceChange[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PriceChange
     */
    public function offsetGet($offset)
    {
      return $this->PriceChange[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PriceChange $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PriceChange[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PriceChange[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PriceChange Return the current element
     */
    public function current()
    {
      return current($this->PriceChange);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PriceChange);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PriceChange);
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
      reset($this->PriceChange);
    }

    /**
     * Countable implementation
     *
     * @return PriceChange Return count of elements
     */
    public function count()
    {
      return count($this->PriceChange);
    }

}
