<?php

namespace DdD\Sale;

class GetTransactionsSinceLastNumberBySupplier
{

    /**
     * @var int $client
     */
    protected $client = null;

    /**
     * @var \DateTime $datefrom
     */
    protected $datefrom = null;

    /**
     * @var \DateTime $dateTo
     */
    protected $dateTo = null;

    /**
     * @var OrderableRowType $typeOfTransaction
     */
    protected $typeOfTransaction = null;

    /**
     * @var int $lastTransactionNumber
     */
    protected $lastTransactionNumber = null;

    /**
     * @var ArrayOfstring $nameOfSuppliers
     */
    protected $nameOfSuppliers = null;

    /**
     * @var string $psk
     */
    protected $psk = null;

    /**
     * @param int $client
     * @param \DateTime $datefrom
     * @param \DateTime $dateTo
     * @param OrderableRowType $typeOfTransaction
     * @param int $lastTransactionNumber
     * @param ArrayOfstring $nameOfSuppliers
     * @param string $psk
     */
    public function __construct($client, \DateTime $datefrom, \DateTime $dateTo, $typeOfTransaction, $lastTransactionNumber, $nameOfSuppliers, $psk)
    {
      $this->client = $client;
      $this->datefrom = $datefrom->format(\DateTime::ATOM);
      $this->dateTo = $dateTo->format(\DateTime::ATOM);
      $this->typeOfTransaction = $typeOfTransaction;
      $this->lastTransactionNumber = $lastTransactionNumber;
      $this->nameOfSuppliers = $nameOfSuppliers;
      $this->psk = $psk;
    }

    /**
     * @return int
     */
    public function getClient()
    {
      return $this->client;
    }

    /**
     * @param int $client
     * @return \DdD\Sale\GetTransactionsSinceLastNumberBySupplier
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatefrom()
    {
      if ($this->datefrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->datefrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $datefrom
     * @return \DdD\Sale\GetTransactionsSinceLastNumberBySupplier
     */
    public function setDatefrom(\DateTime $datefrom)
    {
      $this->datefrom = $datefrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
      if ($this->dateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateTo
     * @return \DdD\Sale\GetTransactionsSinceLastNumberBySupplier
     */
    public function setDateTo(\DateTime $dateTo)
    {
      $this->dateTo = $dateTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return OrderableRowType
     */
    public function getTypeOfTransaction()
    {
      return $this->typeOfTransaction;
    }

    /**
     * @param OrderableRowType $typeOfTransaction
     * @return \DdD\Sale\GetTransactionsSinceLastNumberBySupplier
     */
    public function setTypeOfTransaction($typeOfTransaction)
    {
      $this->typeOfTransaction = $typeOfTransaction;
      return $this;
    }

    /**
     * @return int
     */
    public function getLastTransactionNumber()
    {
      return $this->lastTransactionNumber;
    }

    /**
     * @param int $lastTransactionNumber
     * @return \DdD\Sale\GetTransactionsSinceLastNumberBySupplier
     */
    public function setLastTransactionNumber($lastTransactionNumber)
    {
      $this->lastTransactionNumber = $lastTransactionNumber;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getNameOfSuppliers()
    {
      return $this->nameOfSuppliers;
    }

    /**
     * @param ArrayOfstring $nameOfSuppliers
     * @return \DdD\Sale\GetTransactionsSinceLastNumberBySupplier
     */
    public function setNameOfSuppliers($nameOfSuppliers)
    {
      $this->nameOfSuppliers = $nameOfSuppliers;
      return $this;
    }

    /**
     * @return string
     */
    public function getPsk()
    {
      return $this->psk;
    }

    /**
     * @param string $psk
     * @return \DdD\Sale\GetTransactionsSinceLastNumberBySupplier
     */
    public function setPsk($psk)
    {
      $this->psk = $psk;
      return $this;
    }

}
