<?php

namespace DdD\Stock;

class ArticleHeader
{

    /**
     * @var int $ClientId
     */
    protected $ClientId = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var ArrayOfArticleLine $Lines
     */
    protected $Lines = null;

    /**
     * @var boolean $MatchOnEan
     */
    protected $MatchOnEan = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getClientId()
    {
      return $this->ClientId;
    }

    /**
     * @param int $ClientId
     * @return \DdD\Stock\ArticleHeader
     */
    public function setClientId($ClientId)
    {
      $this->ClientId = $ClientId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \DdD\Stock\ArticleHeader
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfArticleLine
     */
    public function getLines()
    {
      return $this->Lines;
    }

    /**
     * @param ArrayOfArticleLine $Lines
     * @return \DdD\Stock\ArticleHeader
     */
    public function setLines($Lines)
    {
      $this->Lines = $Lines;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMatchOnEan()
    {
      return $this->MatchOnEan;
    }

    /**
     * @param boolean $MatchOnEan
     * @return \DdD\Stock\ArticleHeader
     */
    public function setMatchOnEan($MatchOnEan)
    {
      $this->MatchOnEan = $MatchOnEan;
      return $this;
    }

}
