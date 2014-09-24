<?php
/**
 * AccompanimentTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:03
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\Accompaniment;

/**
 * Class AccompanimentTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class AccompanimentTest extends AbstractFrameTestCase
{
    /**
     * @var Accompaniment
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Accompaniment();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TPE2', $this->frame->getIdentifier());
    }
} 