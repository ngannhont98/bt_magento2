<?php

namespace Smartosc\HelloWorld\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{
    protected $helperData;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Smartosc\HelloWorld\Helper\Data $helperData)
    {
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

    public function execute()
    {
        echo $this->helperData->getGeneralConfig('enable_helloworld');
        echo "\n";
        echo $this->helperData->getGeneralConfig('display_text');
    }
}
