<?php
/**
 * CopyrightTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:47
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\License\Copyright;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class CopyrightTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License
 */
class CopyrightTest extends AbstractFrameTestCase
{
    /**
     * @var Copyright
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Copyright();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TCOP', $this->frame->getIdentifier());
    }
} 