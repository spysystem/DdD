<?php

namespace DdD\Sale;

class OrderableRowType
{
    const __default = 'AllTransactions';
    const AllTransactions = 'AllTransactions';
    const InventoryCorrections = 'InventoryCorrections';
    const ManualCorrections = 'ManualCorrections';
    const Purchase = 'Purchase';
    const ItemTransfer = 'ItemTransfer';
    const Sale = 'Sale';


}
