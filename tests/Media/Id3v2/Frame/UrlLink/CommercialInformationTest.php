<?php
/**
 * CommercialInformationTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:15
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\CommercialInformation;

/**
 * Class CommercialInformationTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
class CommercialInformationTest extends AbstractFrameTestCase
{
    /**
     * @var CommercialInformation
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new CommercialInformation();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('WCOM', $this->frame->getIdentifier());
    }
} 