<?php
/**
 * Daniel Coull <d.coull@suttonsilver.co.uk>
 * 2019-2020
 *
 */

namespace SuttonSilver\PriceLists\Model\ResourceModel\PriceListCustomers;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \SuttonSilver\PriceLists\Model\PriceListCustomers::class,
            \SuttonSilver\PriceLists\Model\ResourceModel\PriceListCustomers::class
        );
    }
}
