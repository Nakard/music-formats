<?php
/**
 * SyncTest.php
 *
 * Creation date: 2014-10-02
 * Creation time: 19:36
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Sync;

use Nakard\MusicFormats\Tests\Media\Id3v2\AbstractTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\Sync\Sync;

/**
 * Class SyncTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Sync
 */
class SyncTest extends AbstractTestCase
{
    /**
     * @var Sync
     */
    protected $sync;

    protected function setUp()
    {
        parent::setUp();
        $this->sync = new Sync();
    }

    public function testGetTimestamp()
    {
        $this->assertSame(0x00000000, $this->sync->getTimestamp());
    }

    public function testSetTimestamp()
    {
        $this->sync->setTimestamp(0x0f0facbe);
        $this->assertSame(0x0f0facbe, $this->sync->getTimestamp());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Timestamp must be an integer
     */
    public function testSetTimestampWithInvalidArgument($argument)
    {
        $this->sync->setTimestamp($argument);
    }

    public function testGetSyncedText()
    {
        $this->assertSame('', $this->sync->getSyncedText());
    }

    public function testSetSyncedText()
    {
        $this->sync->setSyncedText('text to be synced');
        $this->assertSame('text to be synced', $this->sync->getSyncedText());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Synced text must be a string
     */
    public function testSetSyncedTextWithInvalidArgument($argument)
    {
        $this->sync->setSyncedText($argument);
    }
}
 