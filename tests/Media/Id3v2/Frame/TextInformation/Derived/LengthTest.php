<?php
/**
 * LengthTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:36
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Derived\Length;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class LengthTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived
 */
class LengthTest extends AbstractFrameTestCase
{
    /**
     * @var Length
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Length();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TLEN', $this->frame->getIdentifier());
    }
} 