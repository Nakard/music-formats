<?php
/**
 * PublisherTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:49
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\License\Publisher;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class PublisherTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License
 */
class PublisherTest extends AbstractFrameTestCase
{
    /**
     * @var Publisher
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Publisher();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TPUB', $this->frame->getIdentifier());
    }
} 