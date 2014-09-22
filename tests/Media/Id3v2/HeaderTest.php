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
use PhpBinaryReader\BinaryReader;

/**
 * Class HeaderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class HeaderTest extends AbstractTestCase
{
    /**
     * @var Header
     */
    private $header;

    protected function setUp()
    {
        parent::setUp();
        $this->header = new Header();
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Header', $this->header);
    }

    public function testGetIdentifier()
    {
        $this->assertSame('ID3', $this->header->getIdentifier());
    }

    public function testGetVersion()
    {
        $this->assertSame(0x00, $this->header->getVersion());
    }

    public function testGetRevision()
    {
        $this->assertSame(0x00, $this->header->getRevision());
    }

    public function testGetFlags()
    {
        $this->assertSame(0x00, $this->header->getFlags());
    }

    public function testGetSize()
    {
        $this->assertSame(0x0000000, $this->header->getSize());
    }

    public function testIsUnsynchronized()
    {
        $this->assertFalse($this->header->isUnsynchronized());
    }

    public function testIsExtendedHeaderUsed()
    {
        $this->assertFalse($this->header->isExtendedHeaderUsed());
    }

    public function testIsExperimentalSet()
    {
        $this->assertFalse($this->header->isExperimentalSet());
    }

    public function testSetIdentifier()
    {
        $this->header->setIdentifier('test');
        $this->assertSame('test', $this->header->getIdentifier());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Identifier must be a string
     */
    public function testSetIdentifierWithInvalidArgument($argument)
    {
        $this->header->setIdentifier($argument);
    }

    public function testSetVersion()
    {
        $this->header->setVersion(1);
        $this->assertSame(1, $this->header->getVersion());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Version must be an integer
     */
    public function testSetVersionWithInvalidArgument($argument)
    {
        $this->header->setVersion($argument);
    }

    public function testSetRevision()
    {
        $this->header->setRevision(2);
        $this->assertSame(2, $this->header->getRevision());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Revision must be an integer
     */
    public function testSetRevisionWithInvalidArgument($argument)
    {
        $this->header->setRevision($argument);
    }

    /**
     * @dataProvider flagsProvider
     */
    public function testSetFlags($flags, $unsynchronized, $extHeader, $experimental, $footer)
    {
        $this->header->setFlags($flags);
        $this->assertSame($flags, $this->header->getFlags());
        $this->assertSame($unsynchronized, $this->header->isUnsynchronized());
        $this->assertSame($extHeader, $this->header->isExtendedHeaderUsed());
        $this->assertSame($experimental, $this->header->isExperimentalSet());
        $this->assertSame($footer, $this->header->isFooterSet());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Flags must be an integer
     */
    public function testSetFlagsWithInvalidArgument($argument)
    {
        $this->header->setFlags($argument);
    }

    /**
     * @return array
     */
    public function flagsProvider()
    {
        return [
            'no flags'                              =>  [0x00, false, false, false, false],
            'only unsynchronization'                =>  [0x80, true, false, false, false],
            'only extended header'                  =>  [0x40, false, true, false, false],
            'only experimental'                     =>  [0x20, false, false, true, false],
            'only footer'                           =>  [0x10, false, false, false, true],
            'unsynchronization and extended header' =>  [0xc0, true, true, false, false],
            'unsynchronization and experimental'    =>  [0xa0, true, false, true, false],
            'unsynchronization and footer'          =>  [0x90, true, false, false, true],
            'extended header and experimental'      =>  [0x60, false, true, true, false],
            'extended header and footer'            =>  [0x50, false, true, false, true],
            'experimental and footer'               =>  [0x30, false, false, true, true],
            'unsynchro + header + experimental'     =>  [0xe0, true, true, true, false],
            'unsynchro + header + footer'           =>  [0xd0, true, true, false, true],
            'header + experimental + footer'        =>  [0x70, false, true, true, true],
            'all'                                   =>  [0xf0, true, true, true, true],
        ];
    }

    public function testSetSize()
    {
        $this->header->setSize(100);
        $this->assertSame(100, $this->header->getSize());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Size must be an integer
     */
    public function testSetSizeWithInvalidArgument($argument)
    {
        $this->header->setSize($argument);
    }
}
