<?php
/**
 * OfficialAudioSourceWebpageTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:39
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\OfficialAudioSourceWebpage;

/**
 * Class OfficialAudioSourceWebpageTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
class OfficialAudioSourceWebpageTest extends AbstractFrameTestCase
{
    /**
     * @var OfficialAudioSourceWebpage
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new OfficialAudioSourceWebpage();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('WOAS', $this->frame->getIdentifier());
    }
} 