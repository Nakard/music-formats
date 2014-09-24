<?php
/**
 * ConductorTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:05
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\Conductor;

/**
 * Class ConductorTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class ConductorTest extends AbstractFrameTestCase
{
    /**
     * @var Conductor
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Conductor();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TPE3', $this->frame->getIdentifier());
    }
} 