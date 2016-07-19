<?php

namespace DdD\\Stock;

class ArrayOfProductTransfer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductTransfer[] $ProductTransfer
     */
    protected $ProductTransfer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductTransfer[]
     */
    public function getProductTransfer()
    {
      return $this->ProductTransfer;
    }

    /**
     * @param ProductTransfer[] $ProductTransfer
     * @return \DdD\\Stock\ArrayOfProductTransfer
     */
    public function setProductTransfer(array $ProductTransfer = null)
    {
      $this->ProductTransfer = $ProductTransfer;
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
      return isset($this->ProductTransfer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductTransfer
     */
    public function offsetGet($offset)
    {
      return $this->ProductTransfer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductTransfer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductTransfer[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductTransfer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductTransfer Return the current element
     */
    public function current()
    {
      return current($this->ProductTransfer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductTransfer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductTransfer);
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
      reset($this->ProductTransfer);
    }

    /**
     * Countable implementation
     *
     * @return ProductTransfer Return count of elements
     */
    public function count()
    {
      return count($this->ProductTransfer);
    }

}
