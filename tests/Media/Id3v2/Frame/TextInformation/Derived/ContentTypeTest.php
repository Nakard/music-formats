<?php
/**
 * ContentTypeTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:41
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Derived\ContentType;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class ContentTypeTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived
 */
class ContentTypeTest extends AbstractFrameTestCase
{
    /**
     * @var ContentType
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new ContentType();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TCON', $this->frame->getIdentifier());
    }
} 