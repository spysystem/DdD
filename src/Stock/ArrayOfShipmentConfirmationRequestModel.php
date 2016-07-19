<?php

namespace DdD\\Stock;

class ArrayOfShipmentConfirmationRequestModel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ShipmentConfirmationRequestModel[] $ShipmentConfirmationRequestModel
     */
    protected $ShipmentConfirmationRequestModel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentConfirmationRequestModel[]
     */
    public function getShipmentConfirmationRequestModel()
    {
      return $this->ShipmentConfirmationRequestModel;
    }

    /**
     * @param ShipmentConfirmationRequestModel[] $ShipmentConfirmationRequestModel
     * @return \DdD\\Stock\ArrayOfShipmentConfirmationRequestModel
     */
    public function setShipmentConfirmationRequestModel(array $ShipmentConfirmationRequestModel = null)
    {
      $this->ShipmentConfirmationRequestModel = $ShipmentConfirmationRequestModel;
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
      return isset($this->ShipmentConfirmationRequestModel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShipmentConfirmationRequestModel
     */
    public function offsetGet($offset)
    {
      return $this->ShipmentConfirmationRequestModel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShipmentConfirmationRequestModel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ShipmentConfirmationRequestModel[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ShipmentConfirmationRequestModel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShipmentConfirmationRequestModel Return the current element
     */
    public function current()
    {
      return current($this->ShipmentConfirmationRequestModel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ShipmentConfirmationRequestModel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ShipmentConfirmationRequestModel);
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
      reset($this->ShipmentConfirmationRequestModel);
    }

    /**
     * Countable implementation
     *
     * @return ShipmentConfirmationRequestModel Return count of elements
     */
    public function count()
    {
      return count($this->ShipmentConfirmationRequestModel);
    }

}
