<?php
namespace Smartosc\Article\Controller\Index;

class Example extends \Magento\Framework\App\Action\Action
{
    protected $title_test;

    public function execute()
    {
        $this->setTitle('Welcome');
        echo $this->getTitle();
    }

    public function setTitle($title_test)
    {
        return $this->title_test = $title_test;
    }

    public function getTitle()
    {
        return $this->title_test;
    }
}
