<?php
/**
 * ComposerTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:13
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\Composer;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class ComposerTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class ComposerTest extends AbstractFrameTestCase
{
    /**
     * @var Composer
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Composer();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TCOM', $this->frame->getIdentifier());
    }
} 