<?php

namespace SGK\BarcodeBundle\Tests\Type;

use PHPUnit_Framework_TestCase;
use SGK\BarcodeBundle\Type\Type;

/**
 * Class TypeTest
 *
 * @package SGK\BarcodeBundle\Tests\Type
 */
class TypeTest extends PHPUnit_Framework_TestCase
{
    /**
     * testConfigureOptions
     *
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        $type = new Type();
        $type->getDimension('Unknown Type');
    }
}
