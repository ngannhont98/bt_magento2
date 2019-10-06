<?php
namespace Smartosc\Article\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $articleFactory;

    public function __construct(\Smartosc\Article\Model\ArticleFactory $factory)
    {
        $this->articleFactory = $factory;
    }
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        for ($i=1; $i<=10; $i++) {
            $data = [
                'title'      => "Title " . $i,
                'content'    => "Here is content " . $i,
                'image'      => 'image ' . $i,
            ];
            $article = $this->articleFactory->create();
            $article->addData($data)->save();
        }
    }
}
