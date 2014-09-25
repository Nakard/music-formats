<?php
/**
 * OriginalFilenameTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:59
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\OriginalFilename;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class OriginalFilenameTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class OriginalFilenameTest extends AbstractFrameTestCase
{
    /**
     * @var OriginalFilename
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new OriginalFilename();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TOFN', $this->frame->getIdentifier());
    }
} 