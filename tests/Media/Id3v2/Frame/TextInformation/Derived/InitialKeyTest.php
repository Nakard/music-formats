<?php
/**
 * InitialKeyTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:37
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Derived\InitialKey;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class InitialKeyTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived
 */
class InitialKeyTest extends AbstractFrameTestCase
{
    /**
     * @var InitialKey
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new InitialKey();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TKEY', $this->frame->getIdentifier());
    }
} 