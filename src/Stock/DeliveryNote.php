<?php

namespace DdD\\Stock;

class DeliveryNote extends ArticleHeader
{

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $DeliveryNoteId
     */
    protected $DeliveryNoteId = null;

    /**
     * @var int $ImportListNo
     */
    protected $ImportListNo = null;

    /**
     * @var boolean $IncludeZeroLinesInDraft
     */
    protected $IncludeZeroLinesInDraft = null;

    /**
     * @var string $OrderReference
     */
    protected $OrderReference = null;

    /**
     * @var int $Recipient
     */
    protected $Recipient = null;

    /**
     * @var boolean $SkipMatchOnItemgroupName
     */
    protected $SkipMatchOnItemgroupName = null;

    /**
     * @var DeliveryNoteNoteState $State
     */
    protected $State = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return \DdD\\Stock\DeliveryNote
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null)
    {
      if ($DeliveryDate == null) {
       $this->DeliveryDate = null;
      } else {
        $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNoteId()
    {
      return $this->DeliveryNoteId;
    }

    /**
     * @param string $DeliveryNoteId
     * @return \DdD\\Stock\DeliveryNote
     */
    public function setDeliveryNoteId($DeliveryNoteId)
    {
      $this->DeliveryNoteId = $DeliveryNoteId;
      return $this;
    }

    /**
     * @return int
     */
    public function getImportListNo()
    {
      return $this->ImportListNo;
    }

    /**
     * @param int $ImportListNo
     * @return \DdD\\Stock\DeliveryNote
     */
    public function setImportListNo($ImportListNo)
    {
      $this->ImportListNo = $ImportListNo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeZeroLinesInDraft()
    {
      return $this->IncludeZeroLinesInDraft;
    }

    /**
     * @param boolean $IncludeZeroLinesInDraft
     * @return \DdD\\Stock\DeliveryNote
     */
    public function setIncludeZeroLinesInDraft($IncludeZeroLinesInDraft)
    {
      $this->IncludeZeroLinesInDraft = $IncludeZeroLinesInDraft;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
      return $this->OrderReference;
    }

    /**
     * @param string $OrderReference
     * @return \DdD\\Stock\DeliveryNote
     */
    public function setOrderReference($OrderReference)
    {
      $this->OrderReference = $OrderReference;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipient()
    {
      return $this->Recipient;
    }

    /**
     * @param int $Recipient
     * @return \DdD\\Stock\DeliveryNote
     */
    public function setRecipient($Recipient)
    {
      $this->Recipient = $Recipient;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipMatchOnItemgroupName()
    {
      return $this->SkipMatchOnItemgroupName;
    }

    /**
     * @param boolean $SkipMatchOnItemgroupName
     * @return \DdD\\Stock\DeliveryNote
     */
    public function setSkipMatchOnItemgroupName($SkipMatchOnItemgroupName)
    {
      $this->SkipMatchOnItemgroupName = $SkipMatchOnItemgroupName;
      return $this;
    }

    /**
     * @return DeliveryNoteNoteState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param DeliveryNoteNoteState $State
     * @return \DdD\\Stock\DeliveryNote
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

}
