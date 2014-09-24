<?php
/**
 * InvolvedPeopleTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:30
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\InvolvedPeople;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class InvolvedPeopleTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class InvolvedPeopleTest extends AbstractFrameTestCase
{
    /**
     * @var InvolvedPeople
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new InvolvedPeople();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TIPL', $this->frame->getIdentifier());
    }
} 