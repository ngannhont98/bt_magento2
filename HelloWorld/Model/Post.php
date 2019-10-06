<?php
namespace Smartosc\HelloWorld\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'smartosc_helloworld';

    protected $_cacheTag = 'smartosc_helloworld';

    protected $_eventPrefix = 'smartosc_helloworld';

    protected function _construct()
    {
        $this->_init('Smartosc\HelloWorld\Model\ResourceModel\Post');
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