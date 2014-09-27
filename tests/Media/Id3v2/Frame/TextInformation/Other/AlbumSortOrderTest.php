<?php
/**
 * AlbumSortOrderTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 18:38
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\AlbumSortOrder;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class AlbumSortOrderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class AlbumSortOrderTest extends AbstractFrameTestCase
{
    /**
     * @var AlbumSortOrder
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new AlbumSortOrder();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TSOA', $this->frame->getIdentifier());
    }
} 