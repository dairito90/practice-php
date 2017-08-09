<?php
/**
 * Created by PhpStorm.
 * User: Dairon Rodriguez
 * Date: 8/8/2017
 * Time: 9:08 PM
 */
class ParentClass {

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
     * @return string
     */
    public function docType() {
        return '<!DOCTYPE html>' . PHP_EOL;
    }
}


$parentClass = new ParentClass();
$childClass = new ChildClass();

echo $childClass->docType();
echo $childClass->wrapBody('<h1>TEST CHILD </h1>');
