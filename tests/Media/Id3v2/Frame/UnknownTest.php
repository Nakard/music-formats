<?php
/**
 * UnknownTest.php
 *
 * Creation date: 2014-09-21
 * Creation time: 14:58
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\Unknown;

/**
 * Class UnknownTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class UnknownTest extends AbstractFrameTestCase
{
    /**
     * @var Unknown
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Unknown();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('XXXX', $this->frame->getIdentifier());
    }
} 