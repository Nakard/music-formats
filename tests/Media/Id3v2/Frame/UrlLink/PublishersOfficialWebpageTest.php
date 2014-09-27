<?php
/**
 * PublishersOfficialWebpageTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:43
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\PublishersOfficialWebpage;

/**
 * Class PublishersOfficialWebpageTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
class PublishersOfficialWebpageTest extends AbstractFrameTestCase
{
    /**
     * @var PublishersOfficialWebpage
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new PublishersOfficialWebpage();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('WPUB', $this->frame->getIdentifier());
    }
} 