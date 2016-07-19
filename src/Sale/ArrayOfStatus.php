<?php

namespace DdD\\Sale;

class ArrayOfStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Status[] $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Status[]
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param Status[] $Status
     * @return \DdD\\Sale\ArrayOfStatus
     */
    public function setStatus(array $Status = null)
    {
      $this->Status = $Status;
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
      return isset($this->Status[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Status
     */
    public function offsetGet($offset)
    {
      return $this->Status[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Status $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Status[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Status[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Status Return the current element
     */
    public function current()
    {
      return current($this->Status);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Status);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Status);
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
      reset($this->Status);
    }

    /**
     * Countable implementation
     *
     * @return Status Return count of elements
     */
    public function count()
    {
      return count($this->Status);
    }

}
