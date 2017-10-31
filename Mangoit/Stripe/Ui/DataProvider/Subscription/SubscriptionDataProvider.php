<?php
/**
 * Created by Mangoit.
 * Author: MangoIT Solutions
 * Date: 26/05/2016
 * Time: 22:43
 */

namespace Mangoit\Stripe\Ui\DataProvider\Subscription;

use Mangoit\Stripe\Model\ResourceModel\Subscription\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

class SubscriptionDataProvider extends AbstractDataProvider
{
    protected $collection;

    protected $addFieldStrategies;

    protected $addFilterStrategies;

    public function __construct(
        CollectionFactory $collectionFactory,
        $name,
        $primaryFieldName,
        $requestFieldName,
        array $meta,
        array $data
    ) {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (!$this->getCollection()->isLoaded()) {
            $this->getCollection()->load();
        }
        $items = $this->getCollection()->toArray();

        return [
            'totalRecords' => $this->getCollection()->getSize(),
            'items' => array_values($items),
        ];
    }
}
