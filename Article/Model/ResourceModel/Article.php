<?php
namespace  Smartosc\Article\Model\ResourceModel;

class Article extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    ) {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('smartosc_article', 'article_id');
    }
}
