<?php
/**
 * InternationStandardRecordingCodeTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:57
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification\InternationalStandardRecordingCode;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class InternationStandardRecordingCodeTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification
 */
class InternationStandardRecordingCodeTest extends AbstractFrameTestCase
{
    /**
     * @var InternationalStandardRecordingCode
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new InternationalStandardRecordingCode();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TSRC', $this->frame->getIdentifier());
    }
} 