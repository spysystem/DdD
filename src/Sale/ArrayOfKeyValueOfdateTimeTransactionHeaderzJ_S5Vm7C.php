<?php

namespace DdD\\Sale;

class ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C[] $KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    protected $KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C[]
     */
    public function getKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C()
    {
      return $this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C;
    }

    /**
     * @param KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C[] $KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     * @return \DdD\\Sale\ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function setKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C(array $KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C = null)
    {
      $this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C = $KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C;
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
      return isset($this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C
     */
    public function offsetGet($offset)
    {
      return $this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C Return the current element
     */
    public function current()
    {
      return current($this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C);
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
      reset($this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C);
    }

    /**
     * Countable implementation
     *
     * @return KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C Return count of elements
     */
    public function count()
    {
      return count($this->KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C);
    }

}
