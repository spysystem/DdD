<?php

namespace DdD\Stock;

class ArrayOfPOSInformation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var POSInformation[] $POSInformation
     */
    protected $POSInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return POSInformation[]
     */
    public function getPOSInformation()
    {
      return $this->POSInformation;
    }

    /**
     * @param POSInformation[] $POSInformation
     * @return \DdD\Stock\ArrayOfPOSInformation
     */
    public function setPOSInformation(array $POSInformation = null)
    {
      $this->POSInformation = $POSInformation;
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
      return isset($this->POSInformation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return POSInformation
     */
    public function offsetGet($offset)
    {
      return $this->POSInformation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param POSInformation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->POSInformation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->POSInformation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return POSInformation Return the current element
     */
    public function current()
    {
      return current($this->POSInformation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->POSInformation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->POSInformation);
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
      reset($this->POSInformation);
    }

    /**
     * Countable implementation
     *
     * @return POSInformation Return count of elements
     */
    public function count()
    {
      return count($this->POSInformation);
    }

}
