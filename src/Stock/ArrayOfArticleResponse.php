<?php

namespace DdD\\Stock;

class ArrayOfArticleResponse implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArticleResponse[] $ArticleResponse
     */
    protected $ArticleResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArticleResponse[]
     */
    public function getArticleResponse()
    {
      return $this->ArticleResponse;
    }

    /**
     * @param ArticleResponse[] $ArticleResponse
     * @return \DdD\\Stock\ArrayOfArticleResponse
     */
    public function setArticleResponse(array $ArticleResponse = null)
    {
      $this->ArticleResponse = $ArticleResponse;
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
      return isset($this->ArticleResponse[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArticleResponse
     */
    public function offsetGet($offset)
    {
      return $this->ArticleResponse[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArticleResponse $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ArticleResponse[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ArticleResponse[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArticleResponse Return the current element
     */
    public function current()
    {
      return current($this->ArticleResponse);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArticleResponse);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArticleResponse);
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
      reset($this->ArticleResponse);
    }

    /**
     * Countable implementation
     *
     * @return ArticleResponse Return count of elements
     */
    public function count()
    {
      return count($this->ArticleResponse);
    }

}
