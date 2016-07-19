<?php

namespace DdD\Stock;

class ArrayOfConfirmation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Confirmation[] $Confirmation
     */
    protected $Confirmation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Confirmation[]
     */
    public function getConfirmation()
    {
      return $this->Confirmation;
    }

    /**
     * @param Confirmation[] $Confirmation
     * @return \DdD\Stock\ArrayOfConfirmation
     */
    public function setConfirmation(array $Confirmation = null)
    {
      $this->Confirmation = $Confirmation;
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
      return isset($this->Confirmation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Confirmation
     */
    public function offsetGet($offset)
    {
      return $this->Confirmation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Confirmation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Confirmation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Confirmation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Confirmation Return the current element
     */
    public function current()
    {
      return current($this->Confirmation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Confirmation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Confirmation);
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
      reset($this->Confirmation);
    }

    /**
     * Countable implementation
     *
     * @return Confirmation Return count of elements
     */
    public function count()
    {
      return count($this->Confirmation);
    }

}
