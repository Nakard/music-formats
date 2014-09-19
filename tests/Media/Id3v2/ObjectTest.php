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
use Nakard\MusicFormats\Tests\FileTestCase;

/**
 * Class ObjectTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class ObjectTest extends FileTestCase
{
    public function testConstruct()
    {
        $file = $this->getFileMock();
        $file->expects($this->any())->method('getMimeType')->will($this->returnValue('audio/mpeg'));
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Object', new Object($file));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidMimeTypeConstruct()
    {
        $file = $this->getFileMock();
        $file->expects($this->any())->method('getMimeType')->will($this->returnValue('text/plain'));
        new Object($file);
    }
}
