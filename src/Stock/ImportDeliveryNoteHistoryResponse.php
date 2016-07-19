<?php

namespace DdD\\Stock;

class ImportDeliveryNoteHistoryResponse
{

    /**
     * @var ArrayOfKeyValueOfstringArticleResponsezJ_S5Vm7C $ImportDeliveryNoteHistoryResult
     */
    protected $ImportDeliveryNoteHistoryResult = null;

    /**
     * @param ArrayOfKeyValueOfstringArticleResponsezJ_S5Vm7C $ImportDeliveryNoteHistoryResult
     */
    public function __construct($ImportDeliveryNoteHistoryResult)
    {
      $this->ImportDeliveryNoteHistoryResult = $ImportDeliveryNoteHistoryResult;
    }

    /**
     * @return ArrayOfKeyValueOfstringArticleResponsezJ_S5Vm7C
     */
    public function getImportDeliveryNoteHistoryResult()
    {
      return $this->ImportDeliveryNoteHistoryResult;
    }

    /**
     * @param ArrayOfKeyValueOfstringArticleResponsezJ_S5Vm7C $ImportDeliveryNoteHistoryResult
     * @return \DdD\\Stock\ImportDeliveryNoteHistoryResponse
     */
    public function setImportDeliveryNoteHistoryResult($ImportDeliveryNoteHistoryResult)
    {
      $this->ImportDeliveryNoteHistoryResult = $ImportDeliveryNoteHistoryResult;
      return $this;
    }

}
