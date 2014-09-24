<?php
/**
 * SetPartTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:53
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification\SetPart;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class SetPartTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification
 */
class SetPartTest extends AbstractFrameTestCase
{
    /**
     * @var SetPart
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new SetPart();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TPOS', $this->frame->getIdentifier());
    }
} 