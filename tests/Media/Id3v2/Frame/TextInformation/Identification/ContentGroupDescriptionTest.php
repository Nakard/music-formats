<?php
/**
 * ContentGroupDescription.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:35
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification\ContentGroupDescription;

/**
 * Class ContentGroupDescriptionTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification
 */
class ContentGroupDescriptionTest extends AbstractFrameTestCase
{
    /**
     * @var ContentGroupDescription
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new ContentGroupDescription();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TIT1', $this->frame->getIdentifier());
    }
} 