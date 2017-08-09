<?php
/**
 * Created by PhpStorm.
 * User: Dairon Rodriguez
 * Date: 8/8/2017
 * Time: 8:35 PM
 */

class PrentClass {
    public $br = '<br />';
    public $space = '&nbsp;';

    /**
     * @param $content
     * @return string
     */
    public function wrapBtag($content) {
        return sprintf('<b>%s<b/>', $content);
    }

    /**
     * @return string
     */
    public function docType() {

        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"'
            .'"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">' . PHP_EOL;
    }
}

class ChildClass extends ParentClass {
    /**
     * @param $content
     * @return string
     */
    public function wrapItag($content) {
        return sprintf('<i>%s<i/>',$content);
    }

    /**
     * @return string
     */
    public function docType() {
        return '<!DOCTYPE html>' . PHP_EOL;
    }
}


$parentClass = new ParentClass();
$childClass = new ChildClass();



$wrapper = new ChildClass();
echo $wrapper->br,$wrapper->wrapBtag('BOLD'), $wrapper->space,$wrapper->wrapItag('ITALIC');
echo $wrapper->br,htmlentities(var_export($wrapper,TRUE));


echo $childClass->docType();
echo $childClass->wrapBody('<h1>TEST CHILD </h1>');
echo '<html>'