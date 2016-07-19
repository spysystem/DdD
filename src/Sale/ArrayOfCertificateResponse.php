<?php

namespace DdD\Sale;

class ArrayOfCertificateResponse implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CertificateResponse[] $CertificateResponse
     */
    protected $CertificateResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CertificateResponse[]
     */
    public function getCertificateResponse()
    {
      return $this->CertificateResponse;
    }

    /**
     * @param CertificateResponse[] $CertificateResponse
     * @return \DdD\Sale\ArrayOfCertificateResponse
     */
    public function setCertificateResponse(array $CertificateResponse = null)
    {
      $this->CertificateResponse = $CertificateResponse;
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
      return isset($this->CertificateResponse[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CertificateResponse
     */
    public function offsetGet($offset)
    {
      return $this->CertificateResponse[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CertificateResponse $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CertificateResponse[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CertificateResponse[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CertificateResponse Return the current element
     */
    public function current()
    {
      return current($this->CertificateResponse);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CertificateResponse);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CertificateResponse);
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
      reset($this->CertificateResponse);
    }

    /**
     * Countable implementation
     *
     * @return CertificateResponse Return count of elements
     */
    public function count()
    {
      return count($this->CertificateResponse);
    }

}
