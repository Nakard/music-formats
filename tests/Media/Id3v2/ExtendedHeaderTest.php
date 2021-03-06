<?php
/**
 * ExtendedHeaderTest.php
 *
 * Creation date: 2014-09-20
 * Creation time: 01:50
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\ExtendedHeader;
use ErrorException;
use Nakard\MusicFormats\Media\Id3v2\TagRestrictions;

/**
 * Class ExtendedHeaderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class ExtendedHeaderTest extends AbstractTestCase
{
    /**
     * @var ExtendedHeader
     */
    private $extendedHeader;

    protected function setUp()
    {
        parent::setUp();
        $this->extendedHeader = new ExtendedHeader();
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\Media\\Id3v2\\ExtendedHeader', $this->extendedHeader);
    }

    public function testGetSize()
    {
        $this->assertSame(0, $this->extendedHeader->getSize());
    }

    public function testGetFlags()
    {
        $this->assertSame(0, $this->extendedHeader->getFlags());
    }

    public function testGetPaddingSize()
    {
        $this->assertSame(0, $this->extendedHeader->getPaddingSize());
    }

    public function testSetSize()
    {
        $this->extendedHeader->setSize(10);
        $this->assertSame(10, $this->extendedHeader->getSize());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Size must be an integer
     */
    public function testSetSizeWithInvalidArgument($argument)
    {
        $this->extendedHeader->setSize($argument);
    }

    /**
     * @dataProvider flagsProvider
     */
    public function testSetFlags($flags, $tagUpdate, $crcData, $tagRestrictions)
    {
        $this->extendedHeader->setFlags($flags);
        $this->assertSame($flags, $this->extendedHeader->getFlags());
        $this->assertSame($tagUpdate, $this->extendedHeader->hasTagUpdate());
        $this->assertSame($crcData, $this->extendedHeader->hasCrcData());
        $this->assertSame($tagRestrictions, $this->extendedHeader->hasTagRestrictions());
    }

    /**
     * @return array
     */
    public function flagsProvider()
    {
        return [
            'no flags'              =>  [0x00, false, false, false],
            'only update'           =>  [0x40, true, false, false],
            'only crc'              =>  [0x20, false, true, false],
            'only restriction'      =>  [0x10, false, false, true],
            'update + crc'          =>  [0x60, true, true, false],
            'update + restriction'  =>  [0x50, true, false, true],
            'crc + restriction'     =>  [0x30, false, true, true],
            'all'                   =>  [0x70, true, true, true]
        ];
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Flags must be an integer
     */
    public function testSetFlagsWithInvalidArgument($argument)
    {
        $this->extendedHeader->setFlags($argument);
    }

    public function testSetPaddingSize()
    {
        $this->extendedHeader->setPaddingSize(20);
        $this->assertSame(20, $this->extendedHeader->getPaddingSize());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Padding size must be an integer
     */
    public function testSetPaddingSizeWithInvalidArgument($argument)
    {
        $this->extendedHeader->setPaddingSize($argument);
    }

    public function testGetFlagBytesNumber()
    {
        $this->assertSame(0, $this->extendedHeader->getFlagBytesNumber());
    }

    public function testSetFlagBytesNumber()
    {
        $this->extendedHeader->setFlagBytesNumber(1);
        $this->assertSame(1, $this->extendedHeader->getFlagBytesNumber());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Flag bytes number must be an integer
     */
    public function testSetFlagBytesNumberWithInvalidArgument($argument)
    {
        $this->extendedHeader->setFlagBytesNumber($argument);
    }

    public function testGetCrcData()
    {
        $this->assertSame(0, $this->extendedHeader->getCrcData());
    }

    public function testSetCrcData()
    {
        $this->extendedHeader->setCrcData(10);
        $this->assertSame(10, $this->extendedHeader->getCrcData());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage CRC data must be an integer
     */
    public function testSetCrcDataWithInvalidArgument($argument)
    {
        $this->extendedHeader->setCrcData($argument);
    }

    public function testGetTagRestrictions()
    {
        $this->assertInstanceOf(
            'Nakard\\MusicFormats\\Media\\Id3v2\\TagRestrictions',
            $this->extendedHeader->getTagRestrictions()
        );
    }

    public function testSetTagRestrictions()
    {
        $restrictions = new TagRestrictions();
        $this->extendedHeader->setTagRestrictions($restrictions);
        $this->assertSame($restrictions, $this->extendedHeader->getTagRestrictions());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testSetTagRestrictionsWithInvalidArgument($argument)
    {
        $this->extendedHeader->setTagRestrictions($argument);
    }
}
