<?php
/**
 * FileTestCase.php
 *
 * Creation date: 2014-09-19
 * Creation time: 21:30
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests;

use Symfony\Component\HttpFoundation\File\File;


/**
 * Class FileTestCase
 *
 * @package Nakard\MusicFormats\Tests
 */
class FileTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|File
     */
    protected function getFileMock()
    {
        return $this->getMockBuilder('Symfony\\Component\\HttpFoundation\\File\\File')
                    ->disableOriginalConstructor()
                    ->setMethods(['getMimeType'])
                    ->getMock();
    }
}
