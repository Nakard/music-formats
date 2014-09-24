<?php
/**
 * OriginalLyricistTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:12
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\OriginalLyricist;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class OriginalLyricistTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class OriginalLyricistTest extends AbstractFrameTestCase
{
    /**
     * @var OriginalLyricist
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new OriginalLyricist();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TOLY', $this->frame->getIdentifier());
    }
} 