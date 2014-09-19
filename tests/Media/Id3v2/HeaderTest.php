<?php
/**
 * HeaderTes.php
 *
 * Creation date: 2014-09-19
 * Creation time: 20:48
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\Header;
use Nakard\MusicFormats\Tests\FileTestCase;

/**
 * Class HeaderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class HeaderTest extends FileTestCase
{
    public function testConstruct()
    {
        $file = $this->getFileMock();
        $file->expects($this->any())->method('getMimeType')->will($this->returnValue('audio/mpeg'));
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Header', new Header($file));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidMimeTypeConstruct()
    {
        $file = $this->getFileMock();
        $file->expects($this->any())->method('getMimeType')->will($this->returnValue('text/plain'));
        new Header($file);
    }
}
