<?php
/**
 * ExtendedHeaderTest.php
 *
 * Creation date: 2014-09-20
 * Creation time: 01:50
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\ExtendedHeader;

/**
 * Class ExtendedHeaderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class ExtendedHeaderTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        new ExtendedHeader();
    }
}
