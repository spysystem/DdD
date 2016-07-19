<?php

namespace DdD\Sale;

class ArrayOfKeyValueOfdateTimeKeyFigureszJ_S5Vm7C implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyValueOfdateTimeKeyFigureszJ_S5Vm7C[] $KeyValueOfdateTimeKeyFigureszJ_S5Vm7C
     */
    protected $KeyValueOfdateTimeKeyFigureszJ_S5Vm7C = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValueOfdateTimeKeyFigureszJ_S5Vm7C[]
     */
    public function getKeyValueOfdateTimeKeyFigureszJ_S5Vm7C()
    {
      return $this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C;
    }

    /**
     * @param KeyValueOfdateTimeKeyFigureszJ_S5Vm7C[] $KeyValueOfdateTimeKeyFigureszJ_S5Vm7C
     * @return \DdD\Sale\ArrayOfKeyValueOfdateTimeKeyFigureszJ_S5Vm7C
     */
    public function setKeyValueOfdateTimeKeyFigureszJ_S5Vm7C(array $KeyValueOfdateTimeKeyFigureszJ_S5Vm7C = null)
    {
      $this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C = $KeyValueOfdateTimeKeyFigureszJ_S5Vm7C;
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
      return isset($this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValueOfdateTimeKeyFigureszJ_S5Vm7C
     */
    public function offsetGet($offset)
    {
      return $this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValueOfdateTimeKeyFigureszJ_S5Vm7C $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyValueOfdateTimeKeyFigureszJ_S5Vm7C Return the current element
     */
    public function current()
    {
      return current($this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C);
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
      reset($this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C);
    }

    /**
     * Countable implementation
     *
     * @return KeyValueOfdateTimeKeyFigureszJ_S5Vm7C Return count of elements
     */
    public function count()
    {
      return count($this->KeyValueOfdateTimeKeyFigureszJ_S5Vm7C);
    }

}
