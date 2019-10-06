<?php
namespace Smartosc\Article\Model;

class Article extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'smartosc_article';

    protected $_cacheTag = 'smartosc_article';

    protected $_eventPrefix = 'smartosc_article';

    protected function _construct()
    {
        $this->_init('Smartosc\Article\Model\ResourceModel\Article');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}