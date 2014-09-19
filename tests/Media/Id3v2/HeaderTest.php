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
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class HeaderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class HeaderTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $file = new File(__DIR__ . '/asset/tagtest.ID3v2.4.mp3');
        $header = new Header($file);
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Header', $header);
        $this->assertSame('ID3', $header->getIdentifier());
        $this->assertSame(0x04, $header->getVersion());
        $this->assertSame(0x00, $header->getRevision());
        $this->assertSame(0x80, $header->getFlags());
        $this->assertSame(0x000b535, $header->getSize());
        $this->assertTrue($header->isUnsynchronized());
        $this->assertFalse($header->isExtendedHeaderUsed());
        $this->assertFalse($header->isExperimentalSet());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidMimeTypeConstruct()
    {
        $file = new File(__DIR__ . '/asset/plain_text.txt');
        new Header($file);
    }
}
