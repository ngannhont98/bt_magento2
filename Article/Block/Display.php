<?php
namespace Smartosc\Article\Block;

use Magento\Framework\View\Element\Template\Context;
use Smartosc\Article\Helper\Config;
use Smartosc\Article\Model\ResourceModel\Article\CollectionFactory;

class Display extends \Magento\Framework\View\Element\Template
{
    protected $helper;
    protected $articleFactory;

    public function __construct(Context $context, CollectionFactory $articleFactory, Config $helper)
    {
        $this->helper = $helper;
        $this->articleFactory = $articleFactory;
        parent::__construct($context);
    }

    public function getArticleCollection()
    {
        return $this->articleFactory->create();
    }

    public function getArticleDetail($id)
    {
        return  $this->articleFactory->create()->addFieldToFilter(['article_id'], [$id])->getData();
    }

    public function pagning()
    {
        $page = ($this->getRequest()->getParam('p')) ? $this->getRequest()->getParam('p') : 1;
        $limit = ($this->helper->getGeneralConfig('custom_limit_page')) ? ($this->getRequest()->getParam('limit')) : 1;

        $collection = $this->articleFactory->create();
        $collection->setPageSize($limit);
        $collection->setCurPage($page);

        return $collection;
    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $this->pageConfig->getTitle()->set(__('Latest News'));

        if ($this->pagning()) {
            $pager = $this->getLayout()->createBlock('Magento\Theme\Block\Html\Pager', 'Smartosc.Index')
                ->setAvailableLimit([1=>1,5=>5,10=>10])
                ->setShowPerPage(true)
                ->setCollection($this->pagning());

            $this->setChild('pager', $pager);
            $this->pagning()->load();
        }
        return $this;
    }

    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }

    public function isEnable()
    {
        if ($this->helper->getGeneralConfig('enable_article')==1) {
            return true;
        }
    }
}
