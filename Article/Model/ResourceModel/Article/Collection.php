<?php
namespace Smartosc\Article\Model\ResourceModel\Article;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'article_id';
    protected $_eventPrefix = 'smartosc_article';
    protected $_eventObject = 'article_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Smartosc\Article\Model\Article', 'Smartosc\Article\Model\ResourceModel\Article');
    }

}
