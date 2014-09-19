<?php
/**
 * ObjectTest.php
 *
 * Creation date: 2014-09-19
 * Creation time: 20:41
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\Object;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class ObjectTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class ObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $file = new File(__DIR__ . '/asset/tagtest.ID3v2.4.mp3');
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Object', new Object($file));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidMimeTypeConstruct()
    {
        $file = new File(__DIR__ . '/asset/plain_text.txt');
        new Object($file);
    }
}
