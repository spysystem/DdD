<?php

namespace DdD\Sale;

class Sale
{

    /**
     * @var int $ClientNumber
     */
    protected $ClientNumber = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var int $Employee
     */
    protected $Employee = null;

    /**
     * @var ArrayOfItemLine $ItemLines
     */
    protected $ItemLines = null;

    /**
     * @var int $NoteID
     */
    protected $NoteID = null;

    /**
     * @var ArrayOfPaymentLine $PaymentLines
     */
    protected $PaymentLines = null;

    /**
     * @var int $Terminal
     */
    protected $Terminal = null;

    /**
     * @var SaleType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getClientNumber()
    {
      return $this->ClientNumber;
    }

    /**
     * @param int $ClientNumber
     * @return \DdD\Sale\Sale
     */
    public function setClientNumber($ClientNumber)
    {
      $this->ClientNumber = $ClientNumber;
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
     * @return \DdD\Sale\Sale
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
     * @return int
     */
    public function getEmployee()
    {
      return $this->Employee;
    }

    /**
     * @param int $Employee
     * @return \DdD\Sale\Sale
     */
    public function setEmployee($Employee)
    {
      $this->Employee = $Employee;
      return $this;
    }

    /**
     * @return ArrayOfItemLine
     */
    public function getItemLines()
    {
      return $this->ItemLines;
    }

    /**
     * @param ArrayOfItemLine $ItemLines
     * @return \DdD\Sale\Sale
     */
    public function setItemLines($ItemLines)
    {
      $this->ItemLines = $ItemLines;
      return $this;
    }

    /**
     * @return int
     */
    public function getNoteID()
    {
      return $this->NoteID;
    }

    /**
     * @param int $NoteID
     * @return \DdD\Sale\Sale
     */
    public function setNoteID($NoteID)
    {
      $this->NoteID = $NoteID;
      return $this;
    }

    /**
     * @return ArrayOfPaymentLine
     */
    public function getPaymentLines()
    {
      return $this->PaymentLines;
    }

    /**
     * @param ArrayOfPaymentLine $PaymentLines
     * @return \DdD\Sale\Sale
     */
    public function setPaymentLines($PaymentLines)
    {
      $this->PaymentLines = $PaymentLines;
      return $this;
    }

    /**
     * @return int
     */
    public function getTerminal()
    {
      return $this->Terminal;
    }

    /**
     * @param int $Terminal
     * @return \DdD\Sale\Sale
     */
    public function setTerminal($Terminal)
    {
      $this->Terminal = $Terminal;
      return $this;
    }

    /**
     * @return SaleType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param SaleType $Type
     * @return \DdD\Sale\Sale
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
