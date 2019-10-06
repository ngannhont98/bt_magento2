<?php
namespace Smartosc\Article\Model\Config\Source;
class Custom implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Retrieve Custom Option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('1')],
            ['value' => 5, 'label' => __('5')],
            ['value' => 10, 'label' => __('10')]
        ];
    }

    public function toArray()
    {
        return [1 => __('1'), 5 => __('5'), 10 => __('10')];
    }

}