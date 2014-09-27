<?php
/**
 * LegalInformationTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:17
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\LegalInformation;

/**
 * Class LegalInformationTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
class LegalInformationTest extends AbstractFrameTestCase
{
    /**
     * @var LegalInformation
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new LegalInformation();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('WCOP', $this->frame->getIdentifier());
    }
} 