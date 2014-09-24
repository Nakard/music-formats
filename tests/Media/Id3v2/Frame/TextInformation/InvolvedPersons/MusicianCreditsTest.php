<?php
/**
 * MusicianCreditsTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:26
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\MusicianCredits;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class MusicianCreditsTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class MusicianCreditsTest extends AbstractFrameTestCase
{
    /**
     * @var MusicianCredits
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new MusicianCredits();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TMCL', $this->frame->getIdentifier());
    }
}