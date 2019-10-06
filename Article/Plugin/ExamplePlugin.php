<?php

namespace Smartosc\Article\Plugin;

use Smartosc\Article\Controller\Index\Example;

class ExamplePlugin
{
    public function beforeSetTitle(Example $subject, $title_test)
    {
        $title_test = $title_test . " to ";
        echo __METHOD__ . "</br>";
        return [$title_test];
    }

    public function afterGetTitle(Example $subject, $result)
    {
        echo __METHOD__ . "</br>";
        return '<h1>' . $result . 'Ngan2.com' . '</h1>';
    }

    public function aroundGetTitle(Example $subject, callable $proceed)
    {
        echo __METHOD__ . " - Before proceed() </br>";
        $result = $proceed();
        echo __METHOD__ . " - After proceed() </br>";

        return $result;
    }
}
