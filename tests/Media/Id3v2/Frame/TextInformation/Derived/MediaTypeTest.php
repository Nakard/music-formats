<?php
/**
 * MediaTypeTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:43
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Derived\MediaType;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class MediaTypeTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived
 */
class MediaTypeTest extends AbstractFrameTestCase
{
    /**
     * @var MediaType
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new MediaType();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TMED', $this->frame->getIdentifier());
    }
} 