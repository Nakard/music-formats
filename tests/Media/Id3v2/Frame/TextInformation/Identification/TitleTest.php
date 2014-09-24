<?php
/**
 * TitleTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:41
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification\Title;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class TitleTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification
 */
class TitleTest extends AbstractFrameTestCase
{
    /**
     * @var Title
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Title();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TIT2', $this->frame->getIdentifier());
    }
} 