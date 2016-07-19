<?php

namespace DdD\Sale;

class ArrayOfKeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1[] $KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1
     */
    protected $KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1[]
     */
    public function getKeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1()
    {
      return $this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1;
    }

    /**
     * @param KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1[] $KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1
     * @return \DdD\Sale\ArrayOfKeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1
     */
    public function setKeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1(array $KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1 = null)
    {
      $this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1 = $KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1;
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
      return isset($this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1
     */
    public function offsetGet($offset)
    {
      return $this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1 Return the current element
     */
    public function current()
    {
      return current($this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1);
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
      reset($this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1);
    }

    /**
     * Countable implementation
     *
     * @return KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1 Return count of elements
     */
    public function count()
    {
      return count($this->KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1);
    }

}
