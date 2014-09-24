<?php
/**
 * MoodTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:44
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Derived\Mood;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class MoodTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived
 */
class MoodTest extends AbstractFrameTestCase
{
    /**
     * @var Mood
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Mood();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TMOO', $this->frame->getIdentifier());
    }
} 