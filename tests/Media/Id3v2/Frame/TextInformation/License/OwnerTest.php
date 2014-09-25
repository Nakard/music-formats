<?php
/**
 * OwnerTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:51
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\License\Owner;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class OwnerTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License
 */
class OwnerTest extends AbstractFrameTestCase
{
    /**
     * @var Owner
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Owner();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TOWN', $this->frame->getIdentifier());
    }
} 