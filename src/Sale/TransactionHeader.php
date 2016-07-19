<?php

namespace DdD\\Sale;

class TransactionHeader
{

    /**
     * @var int $ClientId
     */
    protected $ClientId = null;

    /**
     * @var int $HeaderRowTypeAsInt
     */
    protected $HeaderRowTypeAsInt = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var OrderableRowType $OrderedRowType
     */
    protected $OrderedRowType = null;

    /**
     * @var \DateTime $TransactionDate
     */
    protected $TransactionDate = null;

    /**
     * @var ArrayOfTransactionRow $Transactions
     */
    protected $Transactions = null;

    
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
     * @return \DdD\\Sale\TransactionHeader
     */
    public function setClientId($ClientId)
    {
      $this->ClientId = $ClientId;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeaderRowTypeAsInt()
    {
      return $this->HeaderRowTypeAsInt;
    }

    /**
     * @param int $HeaderRowTypeAsInt
     * @return \DdD\\Sale\TransactionHeader
     */
    public function setHeaderRowTypeAsInt($HeaderRowTypeAsInt)
    {
      $this->HeaderRowTypeAsInt = $HeaderRowTypeAsInt;
      return $this;
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
     * @return \DdD\\Sale\TransactionHeader
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return OrderableRowType
     */
    public function getOrderedRowType()
    {
      return $this->OrderedRowType;
    }

    /**
     * @param OrderableRowType $OrderedRowType
     * @return \DdD\\Sale\TransactionHeader
     */
    public function setOrderedRowType($OrderedRowType)
    {
      $this->OrderedRowType = $OrderedRowType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTransactionDate()
    {
      if ($this->TransactionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TransactionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TransactionDate
     * @return \DdD\\Sale\TransactionHeader
     */
    public function setTransactionDate(\DateTime $TransactionDate = null)
    {
      if ($TransactionDate == null) {
       $this->TransactionDate = null;
      } else {
        $this->TransactionDate = $TransactionDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfTransactionRow
     */
    public function getTransactions()
    {
      return $this->Transactions;
    }

    /**
     * @param ArrayOfTransactionRow $Transactions
     * @return \DdD\\Sale\TransactionHeader
     */
    public function setTransactions($Transactions)
    {
      $this->Transactions = $Transactions;
      return $this;
    }

}
