<?php

namespace DdD\Sale;

class ArrayOfKeyValueOfintdecimal implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyValueOfintdecimal[] $KeyValueOfintdecimal
     */
    protected $KeyValueOfintdecimal = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValueOfintdecimal[]
     */
    public function getKeyValueOfintdecimal()
    {
      return $this->KeyValueOfintdecimal;
    }

    /**
     * @param KeyValueOfintdecimal[] $KeyValueOfintdecimal
     * @return \DdD\Sale\ArrayOfKeyValueOfintdecimal
     */
    public function setKeyValueOfintdecimal(array $KeyValueOfintdecimal = null)
    {
      $this->KeyValueOfintdecimal = $KeyValueOfintdecimal;
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
      return isset($this->KeyValueOfintdecimal[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValueOfintdecimal
     */
    public function offsetGet($offset)
    {
      return $this->KeyValueOfintdecimal[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValueOfintdecimal $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->KeyValueOfintdecimal[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->KeyValueOfintdecimal[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyValueOfintdecimal Return the current element
     */
    public function current()
    {
      return current($this->KeyValueOfintdecimal);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyValueOfintdecimal);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyValueOfintdecimal);
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
      reset($this->KeyValueOfintdecimal);
    }

    /**
     * Countable implementation
     *
     * @return KeyValueOfintdecimal Return count of elements
     */
    public function count()
    {
      return count($this->KeyValueOfintdecimal);
    }

}
