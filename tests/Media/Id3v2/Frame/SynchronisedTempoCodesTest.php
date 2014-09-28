<?php
/**
 * SynchronisedTempoCodesTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 16:48
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\SynchronisedTempoCodes;

/**
 * Class SynchronisedTempoCodesTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class SynchronisedTempoCodesTest extends AbstractFrameTestCase
{
    /**
     * @var SynchronisedTempoCodes
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new SynchronisedTempoCodes();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('SYTC', $this->frame->getIdentifier());
    }

    public function testGetTimestampFormat()
    {
        $this->assertSame(0x01, $this->frame->getTimestampFormat());
    }

    public function testSetTimestampFormat()
    {
        $this->frame->setTimestampFormat(0x02);
        $this->assertSame(0x02, $this->frame->getTimestampFormat());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Timestamp format must be an integer
     */
    public function testSetTimestampFormatWithInvalidArgument($argument)
    {
        $this->frame->setTimestampFormat($argument);
    }

    public function testGetTempoData()
    {
        $this->assertSame((binary) '', $this->frame->getTempoData());
    }

    public function testSetTempoData()
    {
        $this->frame->setTempoData('test');
        $this->assertSame((binary) 'test', $this->frame->getTempoData());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Tempo data must be a binary string
     */
    public function testSetTempoDataWithInvalidArgument($argument)
    {
        $this->frame->setTempoData($argument);
    }
}
 