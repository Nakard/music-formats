<?php
/**
 * SetSubtitleTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:55
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification\SetSubtitle;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class SetSubtitleTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification
 */
class SetSubtitleTest extends AbstractFrameTestCase
{
    /**
     * @var SetSubtitle
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new SetSubtitle();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TSST', $this->frame->getIdentifier());
    }
} 