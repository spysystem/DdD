<?php

namespace DdD\\Sale;

class ArrayOfWebOrder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WebOrder[] $WebOrder
     */
    protected $WebOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WebOrder[]
     */
    public function getWebOrder()
    {
      return $this->WebOrder;
    }

    /**
     * @param WebOrder[] $WebOrder
     * @return \DdD\\Sale\ArrayOfWebOrder
     */
    public function setWebOrder(array $WebOrder = null)
    {
      $this->WebOrder = $WebOrder;
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
      return isset($this->WebOrder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WebOrder
     */
    public function offsetGet($offset)
    {
      return $this->WebOrder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WebOrder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->WebOrder[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->WebOrder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WebOrder Return the current element
     */
    public function current()
    {
      return current($this->WebOrder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WebOrder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WebOrder);
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
      reset($this->WebOrder);
    }

    /**
     * Countable implementation
     *
     * @return WebOrder Return count of elements
     */
    public function count()
    {
      return count($this->WebOrder);
    }

}
