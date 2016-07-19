<?php

namespace DdD\Stock;

class ArticleResponse
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var ArticleResponseStatus $Response
     */
    protected $Response = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \DdD\Stock\ArticleResponse
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return ArticleResponseStatus
     */
    public function getResponse()
    {
      return $this->Response;
    }

    /**
     * @param ArticleResponseStatus $Response
     * @return \DdD\Stock\ArticleResponse
     */
    public function setResponse($Response)
    {
      $this->Response = $Response;
      return $this;
    }

}
