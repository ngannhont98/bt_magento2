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
        $data = [
            'title'      => "How to Create SQL Setup Script in Magento 2",
            'content'    => "In this article, we will find out how to install and upgrade sql script for module in Magento 2. When you install or upgrade a module, you may need to change the database structure or add some new data for current table. To do this, Magento 2 provide you some classes which you can do all of them.",
            'image'      => '/magento-2-module-development/magento-2-how-to-create-sql-setup-script.html',
        ];
        $article = $this->articleFactory->create();
        $article->addData($data)->save();
    }

}
