<?php
namespace Smartosc\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\DataObject;

/**
 * Class Display
 * @package Smartosc\HelloWorld\Controller\Index
 */
class Display extends \Magento\Framework\App\Action\Action
{
    /**
     * Display constructor.
     *
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        //Find to way get the config: smartosc_configuration/configuration/enable
        $textDisplay = new DataObject(['text' => 'Mageplaza']);
        $this->_eventManager->dispatch('smartosc_helloworld_display_text', ['mp_text' => $textDisplay]);
        echo $textDisplay->getText();
    }
}
