<?php
/**
 * RemixedTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:07
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\Remixed;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class RemixedTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class RemixedTest extends AbstractFrameTestCase
{
    /**
     * @var Remixed
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Remixed();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TPE4', $this->frame->getIdentifier());
    }
} 