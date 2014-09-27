<?php
/**
 * PaymentTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:42
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\Payment;

/**
 * Class PaymentTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
class PaymentTest extends AbstractFrameTestCase
{
    /**
     * @var Payment
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Payment();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('WPAY', $this->frame->getIdentifier());
    }
} 