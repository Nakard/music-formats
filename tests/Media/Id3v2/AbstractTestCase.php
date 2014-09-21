<?php
/**
 * AbstractTestCase.php
 *
 * Creation date: 2014-09-21
 * Creation time: 11:57
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use PhpBinaryReader\BinaryReader;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;

/**
 * Class AbstractTestCase
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    protected $binaryReader;

    protected function setUp()
    {
        Debug::enable();
        ErrorHandler::register();
        $handle = fopen(__DIR__ . '/asset/tagtest.ID3v2.4.mp3', 'rb+');
        $this->binaryReader = new BinaryReader($handle);
    }

    /**
     * @return array
     */
    public function exceptionForOnlyStringProvider()
    {
        $callback = function () {
            return 1;
        };
        return [
            'bool'      =>  [false],
            'int'       =>  [1],
            'float'     =>  [1.23],
            'array'     =>  [[1,2,3]],
            'object'    =>  [new \stdClass()],
            'null'      =>  [null],
            'resource'  =>  [fopen('php://memory', 'r')],
            'callback'  =>  [$callback]
        ];
    }

    /**
     * @return array
     */
    public function exceptionForOnlyIntegerProvider()
    {
        $callback = function () {
            return 1;
        };
        return [
            'bool'      =>  [false],
            'string'    =>  ['test'],
            'float'     =>  [1.23],
            'array'     =>  [[1,2,3]],
            'object'    =>  [new \stdClass()],
            'null'      =>  [null],
            'resource'  =>  [fopen('php://memory', 'r')],
            'callback'  =>  [$callback]
        ];
    }
} 