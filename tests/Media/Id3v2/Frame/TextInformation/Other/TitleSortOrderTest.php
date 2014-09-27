<?php
/**
 * TitleSortOrderTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 19:31
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\TitleSortOrder;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class TitleSortOrderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class TitleSortOrderTest extends AbstractFrameTestCase
{
    /**
     * @var TitleSortOrder
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new TitleSortOrder();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TSOT', $this->frame->getIdentifier());
    }
} 