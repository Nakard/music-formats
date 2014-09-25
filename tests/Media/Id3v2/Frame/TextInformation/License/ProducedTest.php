<?php
/**
 * ProducedTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:48
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\License\Produced;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class ProducedTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License
 */
class ProducedTest extends AbstractFrameTestCase
{
    /**
     * @var Produced
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Produced();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TPRO', $this->frame->getIdentifier());
    }
} 