<?php
/**
 * LanguageTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:39
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Derived\Language;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class LanguageTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived
 */
class LanguageTest extends AbstractFrameTestCase
{
    /**
     * @var Language
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Language();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TLAN', $this->frame->getIdentifier());
    }
} 