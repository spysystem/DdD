<?php

namespace DdD\Stock;

class ProductTransfer
{

    /**
     * @var \DateTime $DateOfTransfer
     */
    protected $DateOfTransfer = null;

    /**
     * @var ArrayOfArticleLine $ProductLines
     */
    protected $ProductLines = null;

    /**
     * @var int $ReceiptNumber
     */
    protected $ReceiptNumber = null;

    /**
     * @var Client $RecievingClient
     */
    protected $RecievingClient = null;

    /**
     * @var Client $SenderClient
     */
    protected $SenderClient = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDateOfTransfer()
    {
      if ($this->DateOfTransfer == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOfTransfer);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOfTransfer
     * @return \DdD\Stock\ProductTransfer
     */
    public function setDateOfTransfer(\DateTime $DateOfTransfer = null)
    {
      if ($DateOfTransfer == null) {
       $this->DateOfTransfer = null;
      } else {
        $this->DateOfTransfer = $DateOfTransfer->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfArticleLine
     */
    public function getProductLines()
    {
      return $this->ProductLines;
    }

    /**
     * @param ArrayOfArticleLine $ProductLines
     * @return \DdD\Stock\ProductTransfer
     */
    public function setProductLines($ProductLines)
    {
      $this->ProductLines = $ProductLines;
      return $this;
    }

    /**
     * @return int
     */
    public function getReceiptNumber()
    {
      return $this->ReceiptNumber;
    }

    /**
     * @param int $ReceiptNumber
     * @return \DdD\Stock\ProductTransfer
     */
    public function setReceiptNumber($ReceiptNumber)
    {
      $this->ReceiptNumber = $ReceiptNumber;
      return $this;
    }

    /**
     * @return Client
     */
    public function getRecievingClient()
    {
      return $this->RecievingClient;
    }

    /**
     * @param Client $RecievingClient
     * @return \DdD\Stock\ProductTransfer
     */
    public function setRecievingClient($RecievingClient)
    {
      $this->RecievingClient = $RecievingClient;
      return $this;
    }

    /**
     * @return Client
     */
    public function getSenderClient()
    {
      return $this->SenderClient;
    }

    /**
     * @param Client $SenderClient
     * @return \DdD\Stock\ProductTransfer
     */
    public function setSenderClient($SenderClient)
    {
      $this->SenderClient = $SenderClient;
      return $this;
    }

}
