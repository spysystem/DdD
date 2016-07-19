<?php

namespace DdD\Sale;

class Retry
{

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var int $FromNoteId
     */
    protected $FromNoteId = null;

    /**
     * @var RetryRetryOption $Option
     */
    protected $Option = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var int $ToNoteId
     */
    protected $ToNoteId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return \DdD\Sale\Retry
     */
    public function setFromDate(\DateTime $FromDate = null)
    {
      if ($FromDate == null) {
       $this->FromDate = null;
      } else {
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getFromNoteId()
    {
      return $this->FromNoteId;
    }

    /**
     * @param int $FromNoteId
     * @return \DdD\Sale\Retry
     */
    public function setFromNoteId($FromNoteId)
    {
      $this->FromNoteId = $FromNoteId;
      return $this;
    }

    /**
     * @return RetryRetryOption
     */
    public function getOption()
    {
      return $this->Option;
    }

    /**
     * @param RetryRetryOption $Option
     * @return \DdD\Sale\Retry
     */
    public function setOption($Option)
    {
      $this->Option = $Option;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return \DdD\Sale\Retry
     */
    public function setToDate(\DateTime $ToDate = null)
    {
      if ($ToDate == null) {
       $this->ToDate = null;
      } else {
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getToNoteId()
    {
      return $this->ToNoteId;
    }

    /**
     * @param int $ToNoteId
     * @return \DdD\Sale\Retry
     */
    public function setToNoteId($ToNoteId)
    {
      $this->ToNoteId = $ToNoteId;
      return $this;
    }

}
