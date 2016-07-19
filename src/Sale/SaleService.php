<?php

namespace DdD\Sale;

class SaleService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ArrayOfKeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1' => 'DdD\\Sale\\ArrayOfKeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1',
      'KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1' => 'DdD\\Sale\\KeyValueOfdateTimeArrayOfKeyValueOfintdecimalty7Ep6D1',
      'ArrayOfKeyValueOfintdecimal' => 'DdD\\Sale\\ArrayOfKeyValueOfintdecimal',
      'KeyValueOfintdecimal' => 'DdD\\Sale\\KeyValueOfintdecimal',
      'ArrayOfKeyValueOfdateTimeKeyFigureszJ_S5Vm7C' => 'DdD\\Sale\\ArrayOfKeyValueOfdateTimeKeyFigureszJ_S5Vm7C',
      'KeyValueOfdateTimeKeyFigureszJ_S5Vm7C' => 'DdD\\Sale\\KeyValueOfdateTimeKeyFigureszJ_S5Vm7C',
      'ArrayOfKeyValueOfdateTimeArrayOfKeyFigureszJ_S5Vm7C' => 'DdD\\Sale\\ArrayOfKeyValueOfdateTimeArrayOfKeyFigureszJ_S5Vm7C',
      'KeyValueOfdateTimeArrayOfKeyFigureszJ_S5Vm7C' => 'DdD\\Sale\\KeyValueOfdateTimeArrayOfKeyFigureszJ_S5Vm7C',
      'ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C' => 'DdD\\Sale\\ArrayOfKeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C',
      'KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C' => 'DdD\\Sale\\KeyValueOfdateTimeTransactionHeaderzJ_S5Vm7C',
      'ArrayOfstring' => 'DdD\\Sale\\ArrayOfstring',
      'Sale' => 'DdD\\Sale\\Sale',
      'ArrayOfItemLine' => 'DdD\\Sale\\ArrayOfItemLine',
      'ItemLine' => 'DdD\\Sale\\ItemLine',
      'ArrayOfPaymentLine' => 'DdD\\Sale\\ArrayOfPaymentLine',
      'PaymentLine' => 'DdD\\Sale\\PaymentLine',
      'Status' => 'DdD\\Sale\\Status',
      'ArrayOfSale' => 'DdD\\Sale\\ArrayOfSale',
      'ArrayOfStatus' => 'DdD\\Sale\\ArrayOfStatus',
      'Retry' => 'DdD\\Sale\\Retry',
      'SaleSum' => 'DdD\\Sale\\SaleSum',
      'KeyFigures' => 'DdD\\Sale\\KeyFigures',
      'ArrayOfKeyFigures' => 'DdD\\Sale\\ArrayOfKeyFigures',
      'TransactionHeader' => 'DdD\\Sale\\TransactionHeader',
      'ArrayOfTransactionRow' => 'DdD\\Sale\\ArrayOfTransactionRow',
      'TransactionRow' => 'DdD\\Sale\\TransactionRow',
      'ResponseMessage' => 'DdD\\Sale\\ResponseMessage',
      'CertificateResponse' => 'DdD\\Sale\\CertificateResponse',
      'ArrayOfCertificateResponse' => 'DdD\\Sale\\ArrayOfCertificateResponse',
      'ArrayOfWebOrder' => 'DdD\\Sale\\ArrayOfWebOrder',
      'WebOrder' => 'DdD\\Sale\\WebOrder',
      'SaveSale' => 'DdD\\Sale\\SaveSale',
      'SaveSaleResponse' => 'DdD\\Sale\\SaveSaleResponse',
      'SaveSale_Bulk' => 'DdD\\Sale\\SaveSale_Bulk',
      'SaveSale_BulkResponse' => 'DdD\\Sale\\SaveSale_BulkResponse',
      'RetrySales' => 'DdD\\Sale\\RetrySales',
      'RetrySalesResponse' => 'DdD\\Sale\\RetrySalesResponse',
      'SaleCouldNotBeDelivered' => 'DdD\\Sale\\SaleCouldNotBeDelivered',
      'SaleCouldNotBeDeliveredResponse' => 'DdD\\Sale\\SaleCouldNotBeDeliveredResponse',
      'StartSale' => 'DdD\\Sale\\StartSale',
      'StartSaleResponse' => 'DdD\\Sale\\StartSaleResponse',
      'GetSales' => 'DdD\\Sale\\GetSales',
      'GetSalesResponse' => 'DdD\\Sale\\GetSalesResponse',
      'GetSalesSinceDateTime' => 'DdD\\Sale\\GetSalesSinceDateTime',
      'GetSalesSinceDateTimeResponse' => 'DdD\\Sale\\GetSalesSinceDateTimeResponse',
      'GetKeyFigures' => 'DdD\\Sale\\GetKeyFigures',
      'GetKeyFiguresResponse' => 'DdD\\Sale\\GetKeyFiguresResponse',
      'GetKeyFiguresByTerminal' => 'DdD\\Sale\\GetKeyFiguresByTerminal',
      'GetKeyFiguresByTerminalResponse' => 'DdD\\Sale\\GetKeyFiguresByTerminalResponse',
      'GetTransactions' => 'DdD\\Sale\\GetTransactions',
      'GetTransactionsResponse' => 'DdD\\Sale\\GetTransactionsResponse',
      'GetTransactionsPaged' => 'DdD\\Sale\\GetTransactionsPaged',
      'GetTransactionsPagedResponse' => 'DdD\\Sale\\GetTransactionsPagedResponse',
      'GetTransactionsSinceLastNumber' => 'DdD\\Sale\\GetTransactionsSinceLastNumber',
      'GetTransactionsSinceLastNumberResponse' => 'DdD\\Sale\\GetTransactionsSinceLastNumberResponse',
      'GetCustomerTransactions' => 'DdD\\Sale\\GetCustomerTransactions',
      'GetCustomerTransactionsResponse' => 'DdD\\Sale\\GetCustomerTransactionsResponse',
      'GetSpecificTransaction' => 'DdD\\Sale\\GetSpecificTransaction',
      'GetSpecificTransactionResponse' => 'DdD\\Sale\\GetSpecificTransactionResponse',
      'GetTransactionsBySupplier' => 'DdD\\Sale\\GetTransactionsBySupplier',
      'GetTransactionsBySupplierResponse' => 'DdD\\Sale\\GetTransactionsBySupplierResponse',
      'GetTransactionsSinceLastNumberBySupplier' => 'DdD\\Sale\\GetTransactionsSinceLastNumberBySupplier',
      'GetTransactionsSinceLastNumberBySupplierResponse' => 'DdD\\Sale\\GetTransactionsSinceLastNumberBySupplierResponse',
      'GenerateGiftcertificateNumber' => 'DdD\\Sale\\GenerateGiftcertificateNumber',
      'GenerateGiftcertificateNumberResponse' => 'DdD\\Sale\\GenerateGiftcertificateNumberResponse',
      'ValidateCertificate' => 'DdD\\Sale\\ValidateCertificate',
      'ValidateCertificateResponse' => 'DdD\\Sale\\ValidateCertificateResponse',
      'GetCertificates' => 'DdD\\Sale\\GetCertificates',
      'GetCertificatesResponse' => 'DdD\\Sale\\GetCertificatesResponse',
      'SaveWebshopOrder' => 'DdD\\Sale\\SaveWebshopOrder',
      'SaveWebshopOrderResponse' => 'DdD\\Sale\\SaveWebshopOrderResponse',
      'GetWebOrders' => 'DdD\\Sale\\GetWebOrders',
      'GetWebOrdersResponse' => 'DdD\\Sale\\GetWebOrdersResponse',
      'WebOrdersReadyForPick' => 'DdD\\Sale\\WebOrdersReadyForPick',
      'WebOrdersReadyForPickResponse' => 'DdD\\Sale\\WebOrdersReadyForPickResponse',
      'WebPosParkedReceipts' => 'DdD\\Sale\\WebPosParkedReceipts',
      'WebPosParkedReceiptsResponse' => 'DdD\\Sale\\WebPosParkedReceiptsResponse',
      'RemoveWebPosParkedReceipts' => 'DdD\\Sale\\RemoveWebPosParkedReceipts',
      'RemoveWebPosParkedReceiptsResponse' => 'DdD\\Sale\\RemoveWebPosParkedReceiptsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://api.dddadmin.com/SaleService.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param SaveSale $parameters
     * @return SaveSaleResponse
     */
    public function SaveSale(SaveSale $parameters)
    {
      return $this->__soapCall('SaveSale', array($parameters));
    }

    /**
     * @param SaveSale_Bulk $parameters
     * @return SaveSale_BulkResponse
     */
    public function SaveSale_Bulk(SaveSale_Bulk $parameters)
    {
      return $this->__soapCall('SaveSale_Bulk', array($parameters));
    }

    /**
     * @param RetrySales $parameters
     * @return RetrySalesResponse
     */
    public function RetrySales(RetrySales $parameters)
    {
      return $this->__soapCall('RetrySales', array($parameters));
    }

    /**
     * @param SaleCouldNotBeDelivered $parameters
     * @return SaleCouldNotBeDeliveredResponse
     */
    public function SaleCouldNotBeDelivered(SaleCouldNotBeDelivered $parameters)
    {
      return $this->__soapCall('SaleCouldNotBeDelivered', array($parameters));
    }

    /**
     * @param StartSale $parameters
     * @return StartSaleResponse
     */
    public function StartSale(StartSale $parameters)
    {
      return $this->__soapCall('StartSale', array($parameters));
    }

    /**
     * @param GetSales $parameters
     * @return GetSalesResponse
     */
    public function GetSales(GetSales $parameters)
    {
      return $this->__soapCall('GetSales', array($parameters));
    }

    /**
     * @param GetSalesSinceDateTime $parameters
     * @return GetSalesSinceDateTimeResponse
     */
    public function GetSalesSinceDateTime(GetSalesSinceDateTime $parameters)
    {
      return $this->__soapCall('GetSalesSinceDateTime', array($parameters));
    }

    /**
     * @param GetKeyFigures $parameters
     * @return GetKeyFiguresResponse
     */
    public function GetKeyFigures(GetKeyFigures $parameters)
    {
      return $this->__soapCall('GetKeyFigures', array($parameters));
    }

    /**
     * @param GetKeyFiguresByTerminal $parameters
     * @return GetKeyFiguresByTerminalResponse
     */
    public function GetKeyFiguresByTerminal(GetKeyFiguresByTerminal $parameters)
    {
      return $this->__soapCall('GetKeyFiguresByTerminal', array($parameters));
    }

    /**
     * @param GetTransactions $parameters
     * @return GetTransactionsResponse
     */
    public function GetTransactions(GetTransactions $parameters)
    {
      return $this->__soapCall('GetTransactions', array($parameters));
    }

    /**
     * @param GetTransactionsPaged $parameters
     * @return GetTransactionsPagedResponse
     */
    public function GetTransactionsPaged(GetTransactionsPaged $parameters)
    {
      return $this->__soapCall('GetTransactionsPaged', array($parameters));
    }

    /**
     * @param GetTransactionsSinceLastNumber $parameters
     * @return GetTransactionsSinceLastNumberResponse
     */
    public function GetTransactionsSinceLastNumber(GetTransactionsSinceLastNumber $parameters)
    {
      return $this->__soapCall('GetTransactionsSinceLastNumber', array($parameters));
    }

    /**
     * @param GetCustomerTransactions $parameters
     * @return GetCustomerTransactionsResponse
     */
    public function GetCustomerTransactions(GetCustomerTransactions $parameters)
    {
      return $this->__soapCall('GetCustomerTransactions', array($parameters));
    }

    /**
     * @param GetSpecificTransaction $parameters
     * @return GetSpecificTransactionResponse
     */
    public function GetSpecificTransaction(GetSpecificTransaction $parameters)
    {
      return $this->__soapCall('GetSpecificTransaction', array($parameters));
    }

    /**
     * @param GetTransactionsBySupplier $parameters
     * @return GetTransactionsBySupplierResponse
     */
    public function GetTransactionsBySupplier(GetTransactionsBySupplier $parameters)
    {
      return $this->__soapCall('GetTransactionsBySupplier', array($parameters));
    }

    /**
     * @param GetTransactionsSinceLastNumberBySupplier $parameters
     * @return GetTransactionsSinceLastNumberBySupplierResponse
     */
    public function GetTransactionsSinceLastNumberBySupplier(GetTransactionsSinceLastNumberBySupplier $parameters)
    {
      return $this->__soapCall('GetTransactionsSinceLastNumberBySupplier', array($parameters));
    }

    /**
     * @param GenerateGiftcertificateNumber $parameters
     * @return GenerateGiftcertificateNumberResponse
     */
    public function GenerateGiftcertificateNumber(GenerateGiftcertificateNumber $parameters)
    {
      return $this->__soapCall('GenerateGiftcertificateNumber', array($parameters));
    }

    /**
     * @param ValidateCertificate $parameters
     * @return ValidateCertificateResponse
     */
    public function ValidateCertificate(ValidateCertificate $parameters)
    {
      return $this->__soapCall('ValidateCertificate', array($parameters));
    }

    /**
     * @param GetCertificates $parameters
     * @return GetCertificatesResponse
     */
    public function GetCertificates(GetCertificates $parameters)
    {
      return $this->__soapCall('GetCertificates', array($parameters));
    }

    /**
     * @param SaveWebshopOrder $parameters
     * @return SaveWebshopOrderResponse
     */
    public function SaveWebshopOrder(SaveWebshopOrder $parameters)
    {
      return $this->__soapCall('SaveWebshopOrder', array($parameters));
    }

    /**
     * @param GetWebOrders $parameters
     * @return GetWebOrdersResponse
     */
    public function GetWebOrders(GetWebOrders $parameters)
    {
      return $this->__soapCall('GetWebOrders', array($parameters));
    }

    /**
     * @param WebOrdersReadyForPick $parameters
     * @return WebOrdersReadyForPickResponse
     */
    public function WebOrdersReadyForPick(WebOrdersReadyForPick $parameters)
    {
      return $this->__soapCall('WebOrdersReadyForPick', array($parameters));
    }

    /**
     * @param WebPosParkedReceipts $parameters
     * @return WebPosParkedReceiptsResponse
     */
    public function WebPosParkedReceipts(WebPosParkedReceipts $parameters)
    {
      return $this->__soapCall('WebPosParkedReceipts', array($parameters));
    }

    /**
     * @param RemoveWebPosParkedReceipts $parameters
     * @return RemoveWebPosParkedReceiptsResponse
     */
    public function RemoveWebPosParkedReceipts(RemoveWebPosParkedReceipts $parameters)
    {
      return $this->__soapCall('RemoveWebPosParkedReceipts', array($parameters));
    }

}
