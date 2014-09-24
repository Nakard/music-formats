<?php
/**
 * FileTypeTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:42
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Derived\FileType;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class FileTypeTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived
 */
class FileTypeTest extends AbstractFrameTestCase
{
    /**
     * @var FileType
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new FileType();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TFLT', $this->frame->getIdentifier());
    }
} 