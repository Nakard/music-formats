<?php
/**
 * BinaryReaderTest.php
 *
 * Creation date: 2014-09-22
 * Creation time: 22:23
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests;

use Nakard\MusicFormats\BinaryReader;
use PhpBinaryReader\Endian;

/**
 * Class BinaryReaderTest
 *
 * @package Nakard\MusicFormats\Tests
 */
class BinaryReaderTest extends \PHPUnit_Framework_TestCase
{
    private $handle;

    protected function setUp()
    {
        $this->handle = fopen(
            implode(
                '/', [
                    __DIR__,
                    '..',
                    'vendor',
                    'mdurrant',
                    'php-binary-reader',
                    'test',
                    'asset',
                    'testfile-big.bin'
                ]
            ),
            'rb'
        );
    }

    protected function tearDown()
    {
        fclose($this->handle);
    }

    /**
     * @dataProvider binaryInteger28BitProvider
     */
    public function testRead28BitsInteger($position, $expected)
    {
        $reader = new BinaryReader($this->handle, Endian::ENDIAN_BIG);
        $reader->setPosition($position);
        $this->assertSame($expected, $reader->read28BitInteger());
    }

    /**
     * @return array
     */
    public function binaryInteger28BitProvider()
    {
        return [
            [0, 0b0000000000000000000000000011],
            [4, 0b0000000000001011001111110100],
            [8, 0b1100101111001111101000100001],
            [12, 0b1111111111111111111111111111]
        ];
    }
} 