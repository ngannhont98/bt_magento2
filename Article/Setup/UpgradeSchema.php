<?php
//namespace Smartosc\Index\Setup;
//
//use Magento\Framework\Setup\UpgradeSchemaInterface;
//use Magento\Framework\Setup\SchemaSetupInterface;
//use Magento\Framework\Setup\ModuleContextInterface;
//
//class UpgradeSchema implements UpgradeSchemaInterface
//{
//    public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context )
//    {
//        $installer = $setup;
//        $installer->startSetup();
//        if(version_compare($context->getVersion(), '1.1.0', '<')) {
//            if (!$installer->tableExists('smartosc_article')) {
//                $table = $installer->getConnection()->newTable(
//                    $installer->getTable('smartosc_article'))
//                    ->addColumn(
//                        'article_id',
//                        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
//                        null,
//                        [
//                            'identity' => true,
//                            'nullable' => false,
//                            'primary'  => true,
//                            'unsigned' => true,
//                        ],
//                        'Index ID'
//                    )
//                    ->addColumn(
//                        'title',
//                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
//                        255,
//                        ['nullable => false'],
//                        'Index Title'
//                    )
//                    ->addColumn(
//                        'content',
//                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
//                        255,
//                        [],
//                        'Content'
//                    )
//                    ->addColumn(
//                        'image',
//                        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
//                        255,
//                        [],
//                        'Images of Index'
//                    )
//                    ->addColumn(
//                        'created_at',
//                        \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
//                        null,
//                        ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
//                        'Created At'
//                    )->addColumn(
//                        'updated_at',
//                        \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
//                        null,
//                        ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
//                        'Updated At'
//                    )
//                    ->setComment('Index Table');
//                $installer->getConnection()->createTable($table);
//
//                $installer->getConnection()->addIndex(
//                    $installer->getTable('smartosc_article'),
//                    $setup->getIdxName(
//                        $installer->getTable('smartosc_article'),
//                        ['title','content','image'],
//                        \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
//                    ),
//                    ['title','content','image'],
//                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
//                );
//            }
//        }
//
//        $installer->endSetup();
//    }
//}