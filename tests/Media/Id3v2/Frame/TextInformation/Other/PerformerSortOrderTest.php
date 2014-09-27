<?php
/**
 * PerformerSortOrderTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 19:28
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\PerformerSortOrder;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class PerformerSortOrderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class PerformerSortOrderTest extends AbstractFrameTestCase
{
    /**
     * @var PerformerSortOrder
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new PerformerSortOrder();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TSOP', $this->frame->getIdentifier());
    }
} 