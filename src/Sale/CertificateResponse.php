<?php

namespace DdD\Sale;

class CertificateResponse
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var \DateTime $IssueDate
     */
    protected $IssueDate = null;

    /**
     * @var int $IssueShop
     */
    protected $IssueShop = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var CertificateStatus $State
     */
    protected $State = null;

    /**
     * @var CertificateType $Type
     */
    protected $Type = null;

    /**
     * @var int $UsedInShop
     */
    protected $UsedInShop = null;

    /**
     * @var boolean $Valid
     */
    protected $Valid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \DdD\Sale\CertificateResponse
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
      if ($this->IssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IssueDate
     * @return \DdD\Sale\CertificateResponse
     */
    public function setIssueDate(\DateTime $IssueDate = null)
    {
      if ($IssueDate == null) {
       $this->IssueDate = null;
      } else {
        $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getIssueShop()
    {
      return $this->IssueShop;
    }

    /**
     * @param int $IssueShop
     * @return \DdD\Sale\CertificateResponse
     */
    public function setIssueShop($IssueShop)
    {
      $this->IssueShop = $IssueShop;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \DdD\Sale\CertificateResponse
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return CertificateStatus
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param CertificateStatus $State
     * @return \DdD\Sale\CertificateResponse
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return CertificateType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CertificateType $Type
     * @return \DdD\Sale\CertificateResponse
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getUsedInShop()
    {
      return $this->UsedInShop;
    }

    /**
     * @param int $UsedInShop
     * @return \DdD\Sale\CertificateResponse
     */
    public function setUsedInShop($UsedInShop)
    {
      $this->UsedInShop = $UsedInShop;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValid()
    {
      return $this->Valid;
    }

    /**
     * @param boolean $Valid
     * @return \DdD\Sale\CertificateResponse
     */
    public function setValid($Valid)
    {
      $this->Valid = $Valid;
      return $this;
    }

}
