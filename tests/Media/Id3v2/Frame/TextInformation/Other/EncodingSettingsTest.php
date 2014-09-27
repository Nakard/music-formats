<?php
/**
 * EncodingSettingsTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 18:37
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\EncodingSettings;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class EncodingSettingsTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class EncodingSettingsTest extends AbstractFrameTestCase
{
    /**
     * @var EncodingSettings
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new EncodingSettings();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TSSE', $this->frame->getIdentifier());
    }
} 