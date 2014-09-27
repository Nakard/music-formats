<?php
/**
 * OfficialInternetRadioWebpageTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:41
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\OfficialInternetRadioWebpage;

/**
 * Class OfficialInternetRadioWebpageTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
class OfficialInternetRadioWebpageTest extends AbstractFrameTestCase
{
    /**
     * @var OfficialInternetRadioWebpage
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new OfficialInternetRadioWebpage();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('WORS', $this->frame->getIdentifier());
    }
} 