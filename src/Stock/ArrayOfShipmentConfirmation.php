<?php

namespace DdD\\Stock;

class ArrayOfShipmentConfirmation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ShipmentConfirmation[] $ShipmentConfirmation
     */
    protected $ShipmentConfirmation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentConfirmation[]
     */
    public function getShipmentConfirmation()
    {
      return $this->ShipmentConfirmation;
    }

    /**
     * @param ShipmentConfirmation[] $ShipmentConfirmation
     * @return \DdD\\Stock\ArrayOfShipmentConfirmation
     */
    public function setShipmentConfirmation(array $ShipmentConfirmation = null)
    {
      $this->ShipmentConfirmation = $ShipmentConfirmation;
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
      return isset($this->ShipmentConfirmation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShipmentConfirmation
     */
    public function offsetGet($offset)
    {
      return $this->ShipmentConfirmation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShipmentConfirmation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ShipmentConfirmation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ShipmentConfirmation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShipmentConfirmation Return the current element
     */
    public function current()
    {
      return current($this->ShipmentConfirmation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ShipmentConfirmation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ShipmentConfirmation);
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
      reset($this->ShipmentConfirmation);
    }

    /**
     * Countable implementation
     *
     * @return ShipmentConfirmation Return count of elements
     */
    public function count()
    {
      return count($this->ShipmentConfirmation);
    }

}
