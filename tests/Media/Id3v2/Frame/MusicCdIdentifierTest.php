<?php
/**
 * MusicCdIdentifierTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 21:15
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\MusicCdIdentifier;

/**
 * Class MusicCdIdentifierTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class MusicCdIdentifierTest extends AbstractFrameTestCase
{
    /**
     * @var MusicCdIdentifier
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new MusicCdIdentifier();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('MCDI', $this->frame->getIdentifier());
    }

    public function testGetCdToc()
    {
        $this->assertSame('', $this->frame->getCdToc());
    }

    public function testSetCdToc()
    {
        $this->frame->setCdToc('test');
        $this->assertSame('test', $this->frame->getCdToc());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage CD TOC must be a string
     */
    public function testSetCdTocWithInvalidArgument($argument)
    {
        $this->frame->setCdToc($argument);
    }
} 