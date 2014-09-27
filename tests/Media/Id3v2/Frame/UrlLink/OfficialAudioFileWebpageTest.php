<?php
/**
 * OfficialAudioFileWebpageTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:18
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\OfficialAudioFileWebpage;

/**
 * Class OfficialAudioFileWebpageTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
class OfficialAudioFileWebpageTest extends AbstractFrameTestCase
{
    /**
     * @var OfficialAudioFileWebpage
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new OfficialAudioFileWebpage();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('WCOP', $this->frame->getIdentifier());
    }
} 