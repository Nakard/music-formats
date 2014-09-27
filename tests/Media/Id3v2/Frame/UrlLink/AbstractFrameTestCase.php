<?php
/**
 * AbstractFrameTestCase.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:06
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\AbstractFrame;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\AbstractFrameTestCase as BaseFrameTestCase;

/**
 * Class AbstractFrameTestCase
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
abstract class AbstractFrameTestCase extends BaseFrameTestCase
{
    /**
     * @var AbstractFrame
     */
    protected $frame;

    public function testGetUrl()
    {
        $this->assertSame('', $this->frame->getUrl());
    }

    public function testSetUrl()
    {
        $this->frame->setUrl('http://example.com');
        $this->assertSame('http://example.com', $this->frame->getUrl());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage URL must be a string
     */
    public function testSetUrlWithInvalidArgument($argument)
    {
        $this->frame->setUrl($argument);
    }
} 