<?php
/**
 * AbstractFrameTestCase.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:15
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation;

use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\AbstractFrameTestCase as BaseAbstractFrameTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\AbstractFrame;

/**
 * Class AbstractFrameTestCase
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation
 */
abstract class AbstractFrameTestCase extends BaseAbstractFrameTestCase
{
    /**
     * @var AbstractFrame
     */
    protected $frame;

    public function testGetInformation()
    {
        $this->assertSame('', $this->frame->getInformation());
    }

    public function testSetInformation()
    {
        $this->frame->setInformation('Sample Information');
        $this->assertSame('Sample Information', $this->frame->getInformation());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Information must be a string
     */
    public function testSetInformationWithInvalidArgument($argument)
    {
        $this->frame->setInformation($argument);
    }

    public function testGetTextEncoding()
    {
        $this->assertSame(0x00, $this->frame->getTextEncoding());
    }

    public function testSetTextEncoding()
    {
        $this->frame->setTextEncoding(0x02);
        $this->assertSame(0x02, $this->frame->getTextEncoding());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Text encoding must be an integer
     */
    public function testSetTextEncodingWithInvalidArgument($argument)
    {
        $this->frame->setTextEncoding($argument);
    }
}
