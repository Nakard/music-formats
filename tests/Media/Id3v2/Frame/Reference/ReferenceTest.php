<?php
/**
 * ReferenceTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 15:34
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Reference;

use Nakard\MusicFormats\Tests\Media\Id3v2\AbstractTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\Reference\Reference;

/**
 * Class ReferenceTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Reference
 */
class ReferenceTest extends AbstractTestCase
{
    /**
     * @var Reference
     */
    private $reference;

    protected function setUp()
    {
        parent::setUp();
        $this->reference = new Reference(0x04, 0x04);
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Bits for bytes deviation must be an integer
     */
    public function testConstructWithInvalidBitsForBytesDeviation($argument)
    {
        new Reference($argument, 0x04);
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Bits for ms deviation must be an integer
     */
    public function testConstructWithInvalidBitsForMsDeviation($argument)
    {
        new Reference(0x04, $argument);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Number of bits for both deviations must be divisible by 4
     */
    public function testConstructWithLengthNotDivisibleByFour()
    {
        new Reference(0x03, 0x10);
    }

    public function testGetBytesDeviation()
    {
        $this->assertSame(0, $this->reference->getBytesDeviation());
    }

    public function testSetBytesDeviation()
    {
        $this->reference->setBytesDeviation(pow(2,4) - 1);
        $this->assertSame(15, $this->reference->getBytesDeviation());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Bytes deviation must be an integer
     */
    public function testSetBytesDeviationWithInvalidArgument($argument)
    {
        $this->reference->setBytesDeviation($argument);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Value beyond defined range
     */
    public function testSetBytesDeviationWithTooBigArgument()
    {
        $this->reference->setBytesDeviation(pow(2,4));
    }

    public function testGetMsDeviation()
    {
        $this->assertSame(0, $this->reference->getMsDeviation());
    }

    public function testSetMsDeviation()
    {
        $this->reference->setMsDeviation(pow(2,4) - 1);
        $this->assertSame(15, $this->reference->getMsDeviation());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Milisecond deviation must be an integer
     */
    public function testSetMsDeviationWithInvalidArgument($argument)
    {
        $this->reference->setMsDeviation($argument);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Value beyond defined range
     */
    public function testSetMsDeviationWithTooBigArgument()
    {
        $this->reference->setMsDeviation(pow(2,4));
    }
}
 