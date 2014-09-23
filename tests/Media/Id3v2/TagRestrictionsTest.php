<?php
/**
 * TagRestrictionsTest.php
 *
 * Creation date: 2014-09-23
 * Creation time: 19:12
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\TagRestrictions;

/**
 * Class TagRestrictionsTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class TagRestrictionsTest extends AbstractTestCase
{
    /**
     * @var TagRestrictions
     */
    private $tagRestrictions;

    protected function setUp()
    {
        parent::setUp();
        $this->tagRestrictions = new TagRestrictions();
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\TagRestrictions', $this->tagRestrictions);
    }

    public function testGetTagSizeRestrictions()
    {
        $this->assertSame(0, $this->tagRestrictions->getTagSizeRestrictions());
    }

    public function testSetTagSizeRestrictions()
    {
        $this->tagRestrictions->setTagSizeRestrictions(3);
        $this->assertSame(3, $this->tagRestrictions->getTagSizeRestrictions());
        $this->assertSame(0b11000000, $this->tagRestrictions->getFlags());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Tag size restrictions must be an integer
     */
    public function testSetTagSizeRestrictionsWithInvalidArgument($argument)
    {
        $this->tagRestrictions->setTagSizeRestrictions($argument);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Tag size restrictions can only accept values 0,1,2,3
     */
    public function testSetTagSizeRestrictionsTooLarge()
    {
        $this->tagRestrictions->setTagSizeRestrictions(4);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Tag size restrictions can only accept values 0,1,2,3
     */
    public function testSetTagSizeRestrictionsTooSmall()
    {
        $this->tagRestrictions->setTagSizeRestrictions(-1);
    }

    public function testGetTextEncodingRestrictions()
    {
        $this->assertSame(0, $this->tagRestrictions->getTextEncodingRestrictions());
    }

    public function testSetTextEncodingRestrictions()
    {
        $this->tagRestrictions->setTextEncodingRestrictions(1);
        $this->assertSame(1, $this->tagRestrictions->getTextEncodingRestrictions());
        $this->assertSame(0b00100000, $this->tagRestrictions->getFlags());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Text encoding restrictions can only accept values 0,1
     */
    public function testSetTextEncodingRestrictionsTooLarge()
    {
        $this->tagRestrictions->setTextEncodingRestrictions(2);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Text encoding restrictions can only accept values 0,1
     */
    public function testSetTextEncodingRestrictionsTooSmall()
    {
        $this->tagRestrictions->setTextEncodingRestrictions(-1);
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Text encoding restrictions must be an integer
     */
    public function testSetTextEncodingRestrictionsWithInvalidArgument($argument)
    {
        $this->tagRestrictions->setTextEncodingRestrictions($argument);
    }

    public function testGetTextFieldsSizeRestrictions()
    {
        $this->assertSame(0, $this->tagRestrictions->getTextFieldsSizeRestrictions());
    }

    public function testSetTextFieldsSizeRestrictions()
    {
        $this->tagRestrictions->setTextFieldsSizeRestrictions(2);
        $this->assertSame(2, $this->tagRestrictions->getTextFieldsSizeRestrictions());
        $this->assertSame(0b00010000, $this->tagRestrictions->getFlags());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Text fields size restrictions can only accept values 0,1,2,3
     */
    public function testSetTextFieldsSizeRestrictionsTooLarge()
    {
        $this->tagRestrictions->setTextFieldsSizeRestrictions(4);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Text fields size restrictions can only accept values 0,1,2,3
     */
    public function testSetTextFieldsSizeRestrictionsTooSmall()
    {
        $this->tagRestrictions->setTextFieldsSizeRestrictions(-1);
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Text fields size restrictions must be an integer
     */
    public function testSetTextFieldsSizeRestrictionsWithInvalidArgument($argument)
    {
        $this->tagRestrictions->setTextFieldsSizeRestrictions($argument);
    }

    public function testGetImageEncodingRestrictions()
    {
        $this->assertSame(0, $this->tagRestrictions->getImageEncodingRestrictions());
    }

    public function testSetImageEncodingRestrictions()
    {
        $this->tagRestrictions->setImageEncodingRestrictions(1);
        $this->assertSame(1, $this->tagRestrictions->getImageEncodingRestrictions());
        $this->assertSame(0b00000100, $this->tagRestrictions->getFlags());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Image encoding restrictions can only accept values 0,1
     */
    public function testSetImageEncodingRestrictionsTooLarge()
    {
        $this->tagRestrictions->setImageEncodingRestrictions(2);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Image encoding restrictions can only accept values 0,1
     */
    public function testSetImageEncodingRestrictionsTooSmall()
    {
        $this->tagRestrictions->setImageEncodingRestrictions(-1);
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Image encoding restrictions must be an integer
     */
    public function testSetImageEncodingRestrictionsWithInvalidArgument($argument)
    {
        $this->tagRestrictions->setImageEncodingRestrictions($argument);
    }

    public function testGetImageSizeRestrictions()
    {
        $this->assertSame(0, $this->tagRestrictions->getImageSizeRestrictions());
    }

    public function testSetImageSizeRestrictions()
    {
        $this->tagRestrictions->setImageSizeRestrictions(2);
        $this->assertSame(2, $this->tagRestrictions->getImageSizeRestrictions());
        $this->assertSame(0b00000010, $this->tagRestrictions->getFlags());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Image size restrictions can only accept values 0,1,2,3
     */
    public function testSetImageSizeRestrictionsTooLarge()
    {
        $this->tagRestrictions->setImageSizeRestrictions(4);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Image size restrictions can only accept values 0,1,2,3
     */
    public function testSetImageSizeRestrictionsTooSmall()
    {
        $this->tagRestrictions->setImageSizeRestrictions(-1);
    }
    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Image size restrictions must be an integer
     */
    public function testSetImageSizeRestrictionsWithInvalidArgument($argument)
    {
        $this->tagRestrictions->setImageSizeRestrictions($argument);
    }

    public function testGetFlags()
    {
        $this->assertSame(0, $this->tagRestrictions->getFlags());
    }

    /**
     * @dataProvider flagsProvider
     */
    public function testSetFlags($flags, $tsr, $ter, $tfsr, $ier, $isr)
    {
        $this->tagRestrictions->setFlags($flags);
        $this->assertSame($flags, $this->tagRestrictions->getFlags());
        $this->assertSame($tsr, $this->tagRestrictions->getTagSizeRestrictions());
        $this->assertSame($ter, $this->tagRestrictions->getTextEncodingRestrictions());
        $this->assertSame($tfsr, $this->tagRestrictions->getTextFieldsSizeRestrictions());
        $this->assertSame($ier, $this->tagRestrictions->getImageEncodingRestrictions());
        $this->assertSame($isr, $this->tagRestrictions->getImageSizeRestrictions());
    }

    /**
     * @return array
     */
    public function flagsProvider()
    {
        return [
            'tsr0b0+ter0b0+tsfr0b0+ier0b0+isr0b0' => [0b0, 0b0, 0b0, 0b0, 0b0, 0b0],
            'tsr0b0+ter0b0+tsfr0b0+ier0b0+isr0b1' => [0b1, 0b0, 0b0, 0b0, 0b0, 0b1],
            'tsr0b0+ter0b0+tsfr0b0+ier0b0+isr0b10' => [0b10, 0b0, 0b0, 0b0, 0b0, 0b10],
            'tsr0b0+ter0b0+tsfr0b0+ier0b0+isr0b11' => [0b11, 0b0, 0b0, 0b0, 0b0, 0b11],
            'tsr0b0+ter0b0+tsfr0b0+ier0b1+isr0b0' => [0b100, 0b0, 0b0, 0b0, 0b1, 0b0],
            'tsr0b0+ter0b0+tsfr0b0+ier0b1+isr0b1' => [0b101, 0b0, 0b0, 0b0, 0b1, 0b1],
            'tsr0b0+ter0b0+tsfr0b0+ier0b1+isr0b10' => [0b110, 0b0, 0b0, 0b0, 0b1, 0b10],
            'tsr0b0+ter0b0+tsfr0b0+ier0b1+isr0b11' => [0b111, 0b0, 0b0, 0b0, 0b1, 0b11],
            'tsr0b0+ter0b0+tsfr0b1+ier0b0+isr0b0' => [0b1000, 0b0, 0b0, 0b1, 0b0, 0b0],
            'tsr0b0+ter0b0+tsfr0b1+ier0b0+isr0b1' => [0b1001, 0b0, 0b0, 0b1, 0b0, 0b1],
            'tsr0b0+ter0b0+tsfr0b1+ier0b0+isr0b10' => [0b1010, 0b0, 0b0, 0b1, 0b0, 0b10],
            'tsr0b0+ter0b0+tsfr0b1+ier0b0+isr0b11' => [0b1011, 0b0, 0b0, 0b1, 0b0, 0b11],
            'tsr0b0+ter0b0+tsfr0b1+ier0b1+isr0b0' => [0b1100, 0b0, 0b0, 0b1, 0b1, 0b0],
            'tsr0b0+ter0b0+tsfr0b1+ier0b1+isr0b1' => [0b1101, 0b0, 0b0, 0b1, 0b1, 0b1],
            'tsr0b0+ter0b0+tsfr0b1+ier0b1+isr0b10' => [0b1110, 0b0, 0b0, 0b1, 0b1, 0b10],
            'tsr0b0+ter0b0+tsfr0b1+ier0b1+isr0b11' => [0b1111, 0b0, 0b0, 0b1, 0b1, 0b11],
            'tsr0b0+ter0b0+tsfr0b10+ier0b0+isr0b0' => [0b10000, 0b0, 0b0, 0b10, 0b0, 0b0],
            'tsr0b0+ter0b0+tsfr0b10+ier0b0+isr0b1' => [0b10001, 0b0, 0b0, 0b10, 0b0, 0b1],
            'tsr0b0+ter0b0+tsfr0b10+ier0b0+isr0b10' => [0b10010, 0b0, 0b0, 0b10, 0b0, 0b10],
            'tsr0b0+ter0b0+tsfr0b10+ier0b0+isr0b11' => [0b10011, 0b0, 0b0, 0b10, 0b0, 0b11],
            'tsr0b0+ter0b0+tsfr0b10+ier0b1+isr0b0' => [0b10100, 0b0, 0b0, 0b10, 0b1, 0b0],
            'tsr0b0+ter0b0+tsfr0b10+ier0b1+isr0b1' => [0b10101, 0b0, 0b0, 0b10, 0b1, 0b1],
            'tsr0b0+ter0b0+tsfr0b10+ier0b1+isr0b10' => [0b10110, 0b0, 0b0, 0b10, 0b1, 0b10],
            'tsr0b0+ter0b0+tsfr0b10+ier0b1+isr0b11' => [0b10111, 0b0, 0b0, 0b10, 0b1, 0b11],
            'tsr0b0+ter0b0+tsfr0b11+ier0b0+isr0b0' => [0b11000, 0b0, 0b0, 0b11, 0b0, 0b0],
            'tsr0b0+ter0b0+tsfr0b11+ier0b0+isr0b1' => [0b11001, 0b0, 0b0, 0b11, 0b0, 0b1],
            'tsr0b0+ter0b0+tsfr0b11+ier0b0+isr0b10' => [0b11010, 0b0, 0b0, 0b11, 0b0, 0b10],
            'tsr0b0+ter0b0+tsfr0b11+ier0b0+isr0b11' => [0b11011, 0b0, 0b0, 0b11, 0b0, 0b11],
            'tsr0b0+ter0b0+tsfr0b11+ier0b1+isr0b0' => [0b11100, 0b0, 0b0, 0b11, 0b1, 0b0],
            'tsr0b0+ter0b0+tsfr0b11+ier0b1+isr0b1' => [0b11101, 0b0, 0b0, 0b11, 0b1, 0b1],
            'tsr0b0+ter0b0+tsfr0b11+ier0b1+isr0b10' => [0b11110, 0b0, 0b0, 0b11, 0b1, 0b10],
            'tsr0b0+ter0b0+tsfr0b11+ier0b1+isr0b11' => [0b11111, 0b0, 0b0, 0b11, 0b1, 0b11],
            'tsr0b0+ter0b1+tsfr0b0+ier0b0+isr0b0' => [0b100000, 0b0, 0b1, 0b0, 0b0, 0b0],
            'tsr0b0+ter0b1+tsfr0b0+ier0b0+isr0b1' => [0b100001, 0b0, 0b1, 0b0, 0b0, 0b1],
            'tsr0b0+ter0b1+tsfr0b0+ier0b0+isr0b10' => [0b100010, 0b0, 0b1, 0b0, 0b0, 0b10],
            'tsr0b0+ter0b1+tsfr0b0+ier0b0+isr0b11' => [0b100011, 0b0, 0b1, 0b0, 0b0, 0b11],
            'tsr0b0+ter0b1+tsfr0b0+ier0b1+isr0b0' => [0b100100, 0b0, 0b1, 0b0, 0b1, 0b0],
            'tsr0b0+ter0b1+tsfr0b0+ier0b1+isr0b1' => [0b100101, 0b0, 0b1, 0b0, 0b1, 0b1],
            'tsr0b0+ter0b1+tsfr0b0+ier0b1+isr0b10' => [0b100110, 0b0, 0b1, 0b0, 0b1, 0b10],
            'tsr0b0+ter0b1+tsfr0b0+ier0b1+isr0b11' => [0b100111, 0b0, 0b1, 0b0, 0b1, 0b11],
            'tsr0b0+ter0b1+tsfr0b1+ier0b0+isr0b0' => [0b101000, 0b0, 0b1, 0b1, 0b0, 0b0],
            'tsr0b0+ter0b1+tsfr0b1+ier0b0+isr0b1' => [0b101001, 0b0, 0b1, 0b1, 0b0, 0b1],
            'tsr0b0+ter0b1+tsfr0b1+ier0b0+isr0b10' => [0b101010, 0b0, 0b1, 0b1, 0b0, 0b10],
            'tsr0b0+ter0b1+tsfr0b1+ier0b0+isr0b11' => [0b101011, 0b0, 0b1, 0b1, 0b0, 0b11],
            'tsr0b0+ter0b1+tsfr0b1+ier0b1+isr0b0' => [0b101100, 0b0, 0b1, 0b1, 0b1, 0b0],
            'tsr0b0+ter0b1+tsfr0b1+ier0b1+isr0b1' => [0b101101, 0b0, 0b1, 0b1, 0b1, 0b1],
            'tsr0b0+ter0b1+tsfr0b1+ier0b1+isr0b10' => [0b101110, 0b0, 0b1, 0b1, 0b1, 0b10],
            'tsr0b0+ter0b1+tsfr0b1+ier0b1+isr0b11' => [0b101111, 0b0, 0b1, 0b1, 0b1, 0b11],
            'tsr0b0+ter0b1+tsfr0b10+ier0b0+isr0b0' => [0b110000, 0b0, 0b1, 0b10, 0b0, 0b0],
            'tsr0b0+ter0b1+tsfr0b10+ier0b0+isr0b1' => [0b110001, 0b0, 0b1, 0b10, 0b0, 0b1],
            'tsr0b0+ter0b1+tsfr0b10+ier0b0+isr0b10' => [0b110010, 0b0, 0b1, 0b10, 0b0, 0b10],
            'tsr0b0+ter0b1+tsfr0b10+ier0b0+isr0b11' => [0b110011, 0b0, 0b1, 0b10, 0b0, 0b11],
            'tsr0b0+ter0b1+tsfr0b10+ier0b1+isr0b0' => [0b110100, 0b0, 0b1, 0b10, 0b1, 0b0],
            'tsr0b0+ter0b1+tsfr0b10+ier0b1+isr0b1' => [0b110101, 0b0, 0b1, 0b10, 0b1, 0b1],
            'tsr0b0+ter0b1+tsfr0b10+ier0b1+isr0b10' => [0b110110, 0b0, 0b1, 0b10, 0b1, 0b10],
            'tsr0b0+ter0b1+tsfr0b10+ier0b1+isr0b11' => [0b110111, 0b0, 0b1, 0b10, 0b1, 0b11],
            'tsr0b0+ter0b1+tsfr0b11+ier0b0+isr0b0' => [0b111000, 0b0, 0b1, 0b11, 0b0, 0b0],
            'tsr0b0+ter0b1+tsfr0b11+ier0b0+isr0b1' => [0b111001, 0b0, 0b1, 0b11, 0b0, 0b1],
            'tsr0b0+ter0b1+tsfr0b11+ier0b0+isr0b10' => [0b111010, 0b0, 0b1, 0b11, 0b0, 0b10],
            'tsr0b0+ter0b1+tsfr0b11+ier0b0+isr0b11' => [0b111011, 0b0, 0b1, 0b11, 0b0, 0b11],
            'tsr0b0+ter0b1+tsfr0b11+ier0b1+isr0b0' => [0b111100, 0b0, 0b1, 0b11, 0b1, 0b0],
            'tsr0b0+ter0b1+tsfr0b11+ier0b1+isr0b1' => [0b111101, 0b0, 0b1, 0b11, 0b1, 0b1],
            'tsr0b0+ter0b1+tsfr0b11+ier0b1+isr0b10' => [0b111110, 0b0, 0b1, 0b11, 0b1, 0b10],
            'tsr0b0+ter0b1+tsfr0b11+ier0b1+isr0b11' => [0b111111, 0b0, 0b1, 0b11, 0b1, 0b11],
            'tsr0b1+ter0b0+tsfr0b0+ier0b0+isr0b0' => [0b1000000, 0b1, 0b0, 0b0, 0b0, 0b0],
            'tsr0b1+ter0b0+tsfr0b0+ier0b0+isr0b1' => [0b1000001, 0b1, 0b0, 0b0, 0b0, 0b1],
            'tsr0b1+ter0b0+tsfr0b0+ier0b0+isr0b10' => [0b1000010, 0b1, 0b0, 0b0, 0b0, 0b10],
            'tsr0b1+ter0b0+tsfr0b0+ier0b0+isr0b11' => [0b1000011, 0b1, 0b0, 0b0, 0b0, 0b11],
            'tsr0b1+ter0b0+tsfr0b0+ier0b1+isr0b0' => [0b1000100, 0b1, 0b0, 0b0, 0b1, 0b0],
            'tsr0b1+ter0b0+tsfr0b0+ier0b1+isr0b1' => [0b1000101, 0b1, 0b0, 0b0, 0b1, 0b1],
            'tsr0b1+ter0b0+tsfr0b0+ier0b1+isr0b10' => [0b1000110, 0b1, 0b0, 0b0, 0b1, 0b10],
            'tsr0b1+ter0b0+tsfr0b0+ier0b1+isr0b11' => [0b1000111, 0b1, 0b0, 0b0, 0b1, 0b11],
            'tsr0b1+ter0b0+tsfr0b1+ier0b0+isr0b0' => [0b1001000, 0b1, 0b0, 0b1, 0b0, 0b0],
            'tsr0b1+ter0b0+tsfr0b1+ier0b0+isr0b1' => [0b1001001, 0b1, 0b0, 0b1, 0b0, 0b1],
            'tsr0b1+ter0b0+tsfr0b1+ier0b0+isr0b10' => [0b1001010, 0b1, 0b0, 0b1, 0b0, 0b10],
            'tsr0b1+ter0b0+tsfr0b1+ier0b0+isr0b11' => [0b1001011, 0b1, 0b0, 0b1, 0b0, 0b11],
            'tsr0b1+ter0b0+tsfr0b1+ier0b1+isr0b0' => [0b1001100, 0b1, 0b0, 0b1, 0b1, 0b0],
            'tsr0b1+ter0b0+tsfr0b1+ier0b1+isr0b1' => [0b1001101, 0b1, 0b0, 0b1, 0b1, 0b1],
            'tsr0b1+ter0b0+tsfr0b1+ier0b1+isr0b10' => [0b1001110, 0b1, 0b0, 0b1, 0b1, 0b10],
            'tsr0b1+ter0b0+tsfr0b1+ier0b1+isr0b11' => [0b1001111, 0b1, 0b0, 0b1, 0b1, 0b11],
            'tsr0b1+ter0b0+tsfr0b10+ier0b0+isr0b0' => [0b1010000, 0b1, 0b0, 0b10, 0b0, 0b0],
            'tsr0b1+ter0b0+tsfr0b10+ier0b0+isr0b1' => [0b1010001, 0b1, 0b0, 0b10, 0b0, 0b1],
            'tsr0b1+ter0b0+tsfr0b10+ier0b0+isr0b10' => [0b1010010, 0b1, 0b0, 0b10, 0b0, 0b10],
            'tsr0b1+ter0b0+tsfr0b10+ier0b0+isr0b11' => [0b1010011, 0b1, 0b0, 0b10, 0b0, 0b11],
            'tsr0b1+ter0b0+tsfr0b10+ier0b1+isr0b0' => [0b1010100, 0b1, 0b0, 0b10, 0b1, 0b0],
            'tsr0b1+ter0b0+tsfr0b10+ier0b1+isr0b1' => [0b1010101, 0b1, 0b0, 0b10, 0b1, 0b1],
            'tsr0b1+ter0b0+tsfr0b10+ier0b1+isr0b10' => [0b1010110, 0b1, 0b0, 0b10, 0b1, 0b10],
            'tsr0b1+ter0b0+tsfr0b10+ier0b1+isr0b11' => [0b1010111, 0b1, 0b0, 0b10, 0b1, 0b11],
            'tsr0b1+ter0b0+tsfr0b11+ier0b0+isr0b0' => [0b1011000, 0b1, 0b0, 0b11, 0b0, 0b0],
            'tsr0b1+ter0b0+tsfr0b11+ier0b0+isr0b1' => [0b1011001, 0b1, 0b0, 0b11, 0b0, 0b1],
            'tsr0b1+ter0b0+tsfr0b11+ier0b0+isr0b10' => [0b1011010, 0b1, 0b0, 0b11, 0b0, 0b10],
            'tsr0b1+ter0b0+tsfr0b11+ier0b0+isr0b11' => [0b1011011, 0b1, 0b0, 0b11, 0b0, 0b11],
            'tsr0b1+ter0b0+tsfr0b11+ier0b1+isr0b0' => [0b1011100, 0b1, 0b0, 0b11, 0b1, 0b0],
            'tsr0b1+ter0b0+tsfr0b11+ier0b1+isr0b1' => [0b1011101, 0b1, 0b0, 0b11, 0b1, 0b1],
            'tsr0b1+ter0b0+tsfr0b11+ier0b1+isr0b10' => [0b1011110, 0b1, 0b0, 0b11, 0b1, 0b10],
            'tsr0b1+ter0b0+tsfr0b11+ier0b1+isr0b11' => [0b1011111, 0b1, 0b0, 0b11, 0b1, 0b11],
            'tsr0b1+ter0b1+tsfr0b0+ier0b0+isr0b0' => [0b1100000, 0b1, 0b1, 0b0, 0b0, 0b0],
            'tsr0b1+ter0b1+tsfr0b0+ier0b0+isr0b1' => [0b1100001, 0b1, 0b1, 0b0, 0b0, 0b1],
            'tsr0b1+ter0b1+tsfr0b0+ier0b0+isr0b10' => [0b1100010, 0b1, 0b1, 0b0, 0b0, 0b10],
            'tsr0b1+ter0b1+tsfr0b0+ier0b0+isr0b11' => [0b1100011, 0b1, 0b1, 0b0, 0b0, 0b11],
            'tsr0b1+ter0b1+tsfr0b0+ier0b1+isr0b0' => [0b1100100, 0b1, 0b1, 0b0, 0b1, 0b0],
            'tsr0b1+ter0b1+tsfr0b0+ier0b1+isr0b1' => [0b1100101, 0b1, 0b1, 0b0, 0b1, 0b1],
            'tsr0b1+ter0b1+tsfr0b0+ier0b1+isr0b10' => [0b1100110, 0b1, 0b1, 0b0, 0b1, 0b10],
            'tsr0b1+ter0b1+tsfr0b0+ier0b1+isr0b11' => [0b1100111, 0b1, 0b1, 0b0, 0b1, 0b11],
            'tsr0b1+ter0b1+tsfr0b1+ier0b0+isr0b0' => [0b1101000, 0b1, 0b1, 0b1, 0b0, 0b0],
            'tsr0b1+ter0b1+tsfr0b1+ier0b0+isr0b1' => [0b1101001, 0b1, 0b1, 0b1, 0b0, 0b1],
            'tsr0b1+ter0b1+tsfr0b1+ier0b0+isr0b10' => [0b1101010, 0b1, 0b1, 0b1, 0b0, 0b10],
            'tsr0b1+ter0b1+tsfr0b1+ier0b0+isr0b11' => [0b1101011, 0b1, 0b1, 0b1, 0b0, 0b11],
            'tsr0b1+ter0b1+tsfr0b1+ier0b1+isr0b0' => [0b1101100, 0b1, 0b1, 0b1, 0b1, 0b0],
            'tsr0b1+ter0b1+tsfr0b1+ier0b1+isr0b1' => [0b1101101, 0b1, 0b1, 0b1, 0b1, 0b1],
            'tsr0b1+ter0b1+tsfr0b1+ier0b1+isr0b10' => [0b1101110, 0b1, 0b1, 0b1, 0b1, 0b10],
            'tsr0b1+ter0b1+tsfr0b1+ier0b1+isr0b11' => [0b1101111, 0b1, 0b1, 0b1, 0b1, 0b11],
            'tsr0b1+ter0b1+tsfr0b10+ier0b0+isr0b0' => [0b1110000, 0b1, 0b1, 0b10, 0b0, 0b0],
            'tsr0b1+ter0b1+tsfr0b10+ier0b0+isr0b1' => [0b1110001, 0b1, 0b1, 0b10, 0b0, 0b1],
            'tsr0b1+ter0b1+tsfr0b10+ier0b0+isr0b10' => [0b1110010, 0b1, 0b1, 0b10, 0b0, 0b10],
            'tsr0b1+ter0b1+tsfr0b10+ier0b0+isr0b11' => [0b1110011, 0b1, 0b1, 0b10, 0b0, 0b11],
            'tsr0b1+ter0b1+tsfr0b10+ier0b1+isr0b0' => [0b1110100, 0b1, 0b1, 0b10, 0b1, 0b0],
            'tsr0b1+ter0b1+tsfr0b10+ier0b1+isr0b1' => [0b1110101, 0b1, 0b1, 0b10, 0b1, 0b1],
            'tsr0b1+ter0b1+tsfr0b10+ier0b1+isr0b10' => [0b1110110, 0b1, 0b1, 0b10, 0b1, 0b10],
            'tsr0b1+ter0b1+tsfr0b10+ier0b1+isr0b11' => [0b1110111, 0b1, 0b1, 0b10, 0b1, 0b11],
            'tsr0b1+ter0b1+tsfr0b11+ier0b0+isr0b0' => [0b1111000, 0b1, 0b1, 0b11, 0b0, 0b0],
            'tsr0b1+ter0b1+tsfr0b11+ier0b0+isr0b1' => [0b1111001, 0b1, 0b1, 0b11, 0b0, 0b1],
            'tsr0b1+ter0b1+tsfr0b11+ier0b0+isr0b10' => [0b1111010, 0b1, 0b1, 0b11, 0b0, 0b10],
            'tsr0b1+ter0b1+tsfr0b11+ier0b0+isr0b11' => [0b1111011, 0b1, 0b1, 0b11, 0b0, 0b11],
            'tsr0b1+ter0b1+tsfr0b11+ier0b1+isr0b0' => [0b1111100, 0b1, 0b1, 0b11, 0b1, 0b0],
            'tsr0b1+ter0b1+tsfr0b11+ier0b1+isr0b1' => [0b1111101, 0b1, 0b1, 0b11, 0b1, 0b1],
            'tsr0b1+ter0b1+tsfr0b11+ier0b1+isr0b10' => [0b1111110, 0b1, 0b1, 0b11, 0b1, 0b10],
            'tsr0b1+ter0b1+tsfr0b11+ier0b1+isr0b11' => [0b1111111, 0b1, 0b1, 0b11, 0b1, 0b11],
            'tsr0b10+ter0b0+tsfr0b0+ier0b0+isr0b0' => [0b10000000, 0b10, 0b0, 0b0, 0b0, 0b0],
            'tsr0b10+ter0b0+tsfr0b0+ier0b0+isr0b1' => [0b10000001, 0b10, 0b0, 0b0, 0b0, 0b1],
            'tsr0b10+ter0b0+tsfr0b0+ier0b0+isr0b10' => [0b10000010, 0b10, 0b0, 0b0, 0b0, 0b10],
            'tsr0b10+ter0b0+tsfr0b0+ier0b0+isr0b11' => [0b10000011, 0b10, 0b0, 0b0, 0b0, 0b11],
            'tsr0b10+ter0b0+tsfr0b0+ier0b1+isr0b0' => [0b10000100, 0b10, 0b0, 0b0, 0b1, 0b0],
            'tsr0b10+ter0b0+tsfr0b0+ier0b1+isr0b1' => [0b10000101, 0b10, 0b0, 0b0, 0b1, 0b1],
            'tsr0b10+ter0b0+tsfr0b0+ier0b1+isr0b10' => [0b10000110, 0b10, 0b0, 0b0, 0b1, 0b10],
            'tsr0b10+ter0b0+tsfr0b0+ier0b1+isr0b11' => [0b10000111, 0b10, 0b0, 0b0, 0b1, 0b11],
            'tsr0b10+ter0b0+tsfr0b1+ier0b0+isr0b0' => [0b10001000, 0b10, 0b0, 0b1, 0b0, 0b0],
            'tsr0b10+ter0b0+tsfr0b1+ier0b0+isr0b1' => [0b10001001, 0b10, 0b0, 0b1, 0b0, 0b1],
            'tsr0b10+ter0b0+tsfr0b1+ier0b0+isr0b10' => [0b10001010, 0b10, 0b0, 0b1, 0b0, 0b10],
            'tsr0b10+ter0b0+tsfr0b1+ier0b0+isr0b11' => [0b10001011, 0b10, 0b0, 0b1, 0b0, 0b11],
            'tsr0b10+ter0b0+tsfr0b1+ier0b1+isr0b0' => [0b10001100, 0b10, 0b0, 0b1, 0b1, 0b0],
            'tsr0b10+ter0b0+tsfr0b1+ier0b1+isr0b1' => [0b10001101, 0b10, 0b0, 0b1, 0b1, 0b1],
            'tsr0b10+ter0b0+tsfr0b1+ier0b1+isr0b10' => [0b10001110, 0b10, 0b0, 0b1, 0b1, 0b10],
            'tsr0b10+ter0b0+tsfr0b1+ier0b1+isr0b11' => [0b10001111, 0b10, 0b0, 0b1, 0b1, 0b11],
            'tsr0b10+ter0b0+tsfr0b10+ier0b0+isr0b0' => [0b10010000, 0b10, 0b0, 0b10, 0b0, 0b0],
            'tsr0b10+ter0b0+tsfr0b10+ier0b0+isr0b1' => [0b10010001, 0b10, 0b0, 0b10, 0b0, 0b1],
            'tsr0b10+ter0b0+tsfr0b10+ier0b0+isr0b10' => [0b10010010, 0b10, 0b0, 0b10, 0b0, 0b10],
            'tsr0b10+ter0b0+tsfr0b10+ier0b0+isr0b11' => [0b10010011, 0b10, 0b0, 0b10, 0b0, 0b11],
            'tsr0b10+ter0b0+tsfr0b10+ier0b1+isr0b0' => [0b10010100, 0b10, 0b0, 0b10, 0b1, 0b0],
            'tsr0b10+ter0b0+tsfr0b10+ier0b1+isr0b1' => [0b10010101, 0b10, 0b0, 0b10, 0b1, 0b1],
            'tsr0b10+ter0b0+tsfr0b10+ier0b1+isr0b10' => [0b10010110, 0b10, 0b0, 0b10, 0b1, 0b10],
            'tsr0b10+ter0b0+tsfr0b10+ier0b1+isr0b11' => [0b10010111, 0b10, 0b0, 0b10, 0b1, 0b11],
            'tsr0b10+ter0b0+tsfr0b11+ier0b0+isr0b0' => [0b10011000, 0b10, 0b0, 0b11, 0b0, 0b0],
            'tsr0b10+ter0b0+tsfr0b11+ier0b0+isr0b1' => [0b10011001, 0b10, 0b0, 0b11, 0b0, 0b1],
            'tsr0b10+ter0b0+tsfr0b11+ier0b0+isr0b10' => [0b10011010, 0b10, 0b0, 0b11, 0b0, 0b10],
            'tsr0b10+ter0b0+tsfr0b11+ier0b0+isr0b11' => [0b10011011, 0b10, 0b0, 0b11, 0b0, 0b11],
            'tsr0b10+ter0b0+tsfr0b11+ier0b1+isr0b0' => [0b10011100, 0b10, 0b0, 0b11, 0b1, 0b0],
            'tsr0b10+ter0b0+tsfr0b11+ier0b1+isr0b1' => [0b10011101, 0b10, 0b0, 0b11, 0b1, 0b1],
            'tsr0b10+ter0b0+tsfr0b11+ier0b1+isr0b10' => [0b10011110, 0b10, 0b0, 0b11, 0b1, 0b10],
            'tsr0b10+ter0b0+tsfr0b11+ier0b1+isr0b11' => [0b10011111, 0b10, 0b0, 0b11, 0b1, 0b11],
            'tsr0b10+ter0b1+tsfr0b0+ier0b0+isr0b0' => [0b10100000, 0b10, 0b1, 0b0, 0b0, 0b0],
            'tsr0b10+ter0b1+tsfr0b0+ier0b0+isr0b1' => [0b10100001, 0b10, 0b1, 0b0, 0b0, 0b1],
            'tsr0b10+ter0b1+tsfr0b0+ier0b0+isr0b10' => [0b10100010, 0b10, 0b1, 0b0, 0b0, 0b10],
            'tsr0b10+ter0b1+tsfr0b0+ier0b0+isr0b11' => [0b10100011, 0b10, 0b1, 0b0, 0b0, 0b11],
            'tsr0b10+ter0b1+tsfr0b0+ier0b1+isr0b0' => [0b10100100, 0b10, 0b1, 0b0, 0b1, 0b0],
            'tsr0b10+ter0b1+tsfr0b0+ier0b1+isr0b1' => [0b10100101, 0b10, 0b1, 0b0, 0b1, 0b1],
            'tsr0b10+ter0b1+tsfr0b0+ier0b1+isr0b10' => [0b10100110, 0b10, 0b1, 0b0, 0b1, 0b10],
            'tsr0b10+ter0b1+tsfr0b0+ier0b1+isr0b11' => [0b10100111, 0b10, 0b1, 0b0, 0b1, 0b11],
            'tsr0b10+ter0b1+tsfr0b1+ier0b0+isr0b0' => [0b10101000, 0b10, 0b1, 0b1, 0b0, 0b0],
            'tsr0b10+ter0b1+tsfr0b1+ier0b0+isr0b1' => [0b10101001, 0b10, 0b1, 0b1, 0b0, 0b1],
            'tsr0b10+ter0b1+tsfr0b1+ier0b0+isr0b10' => [0b10101010, 0b10, 0b1, 0b1, 0b0, 0b10],
            'tsr0b10+ter0b1+tsfr0b1+ier0b0+isr0b11' => [0b10101011, 0b10, 0b1, 0b1, 0b0, 0b11],
            'tsr0b10+ter0b1+tsfr0b1+ier0b1+isr0b0' => [0b10101100, 0b10, 0b1, 0b1, 0b1, 0b0],
            'tsr0b10+ter0b1+tsfr0b1+ier0b1+isr0b1' => [0b10101101, 0b10, 0b1, 0b1, 0b1, 0b1],
            'tsr0b10+ter0b1+tsfr0b1+ier0b1+isr0b10' => [0b10101110, 0b10, 0b1, 0b1, 0b1, 0b10],
            'tsr0b10+ter0b1+tsfr0b1+ier0b1+isr0b11' => [0b10101111, 0b10, 0b1, 0b1, 0b1, 0b11],
            'tsr0b10+ter0b1+tsfr0b10+ier0b0+isr0b0' => [0b10110000, 0b10, 0b1, 0b10, 0b0, 0b0],
            'tsr0b10+ter0b1+tsfr0b10+ier0b0+isr0b1' => [0b10110001, 0b10, 0b1, 0b10, 0b0, 0b1],
            'tsr0b10+ter0b1+tsfr0b10+ier0b0+isr0b10' => [0b10110010, 0b10, 0b1, 0b10, 0b0, 0b10],
            'tsr0b10+ter0b1+tsfr0b10+ier0b0+isr0b11' => [0b10110011, 0b10, 0b1, 0b10, 0b0, 0b11],
            'tsr0b10+ter0b1+tsfr0b10+ier0b1+isr0b0' => [0b10110100, 0b10, 0b1, 0b10, 0b1, 0b0],
            'tsr0b10+ter0b1+tsfr0b10+ier0b1+isr0b1' => [0b10110101, 0b10, 0b1, 0b10, 0b1, 0b1],
            'tsr0b10+ter0b1+tsfr0b10+ier0b1+isr0b10' => [0b10110110, 0b10, 0b1, 0b10, 0b1, 0b10],
            'tsr0b10+ter0b1+tsfr0b10+ier0b1+isr0b11' => [0b10110111, 0b10, 0b1, 0b10, 0b1, 0b11],
            'tsr0b10+ter0b1+tsfr0b11+ier0b0+isr0b0' => [0b10111000, 0b10, 0b1, 0b11, 0b0, 0b0],
            'tsr0b10+ter0b1+tsfr0b11+ier0b0+isr0b1' => [0b10111001, 0b10, 0b1, 0b11, 0b0, 0b1],
            'tsr0b10+ter0b1+tsfr0b11+ier0b0+isr0b10' => [0b10111010, 0b10, 0b1, 0b11, 0b0, 0b10],
            'tsr0b10+ter0b1+tsfr0b11+ier0b0+isr0b11' => [0b10111011, 0b10, 0b1, 0b11, 0b0, 0b11],
            'tsr0b10+ter0b1+tsfr0b11+ier0b1+isr0b0' => [0b10111100, 0b10, 0b1, 0b11, 0b1, 0b0],
            'tsr0b10+ter0b1+tsfr0b11+ier0b1+isr0b1' => [0b10111101, 0b10, 0b1, 0b11, 0b1, 0b1],
            'tsr0b10+ter0b1+tsfr0b11+ier0b1+isr0b10' => [0b10111110, 0b10, 0b1, 0b11, 0b1, 0b10],
            'tsr0b10+ter0b1+tsfr0b11+ier0b1+isr0b11' => [0b10111111, 0b10, 0b1, 0b11, 0b1, 0b11],
            'tsr0b11+ter0b0+tsfr0b0+ier0b0+isr0b0' => [0b11000000, 0b11, 0b0, 0b0, 0b0, 0b0],
            'tsr0b11+ter0b0+tsfr0b0+ier0b0+isr0b1' => [0b11000001, 0b11, 0b0, 0b0, 0b0, 0b1],
            'tsr0b11+ter0b0+tsfr0b0+ier0b0+isr0b10' => [0b11000010, 0b11, 0b0, 0b0, 0b0, 0b10],
            'tsr0b11+ter0b0+tsfr0b0+ier0b0+isr0b11' => [0b11000011, 0b11, 0b0, 0b0, 0b0, 0b11],
            'tsr0b11+ter0b0+tsfr0b0+ier0b1+isr0b0' => [0b11000100, 0b11, 0b0, 0b0, 0b1, 0b0],
            'tsr0b11+ter0b0+tsfr0b0+ier0b1+isr0b1' => [0b11000101, 0b11, 0b0, 0b0, 0b1, 0b1],
            'tsr0b11+ter0b0+tsfr0b0+ier0b1+isr0b10' => [0b11000110, 0b11, 0b0, 0b0, 0b1, 0b10],
            'tsr0b11+ter0b0+tsfr0b0+ier0b1+isr0b11' => [0b11000111, 0b11, 0b0, 0b0, 0b1, 0b11],
            'tsr0b11+ter0b0+tsfr0b1+ier0b0+isr0b0' => [0b11001000, 0b11, 0b0, 0b1, 0b0, 0b0],
            'tsr0b11+ter0b0+tsfr0b1+ier0b0+isr0b1' => [0b11001001, 0b11, 0b0, 0b1, 0b0, 0b1],
            'tsr0b11+ter0b0+tsfr0b1+ier0b0+isr0b10' => [0b11001010, 0b11, 0b0, 0b1, 0b0, 0b10],
            'tsr0b11+ter0b0+tsfr0b1+ier0b0+isr0b11' => [0b11001011, 0b11, 0b0, 0b1, 0b0, 0b11],
            'tsr0b11+ter0b0+tsfr0b1+ier0b1+isr0b0' => [0b11001100, 0b11, 0b0, 0b1, 0b1, 0b0],
            'tsr0b11+ter0b0+tsfr0b1+ier0b1+isr0b1' => [0b11001101, 0b11, 0b0, 0b1, 0b1, 0b1],
            'tsr0b11+ter0b0+tsfr0b1+ier0b1+isr0b10' => [0b11001110, 0b11, 0b0, 0b1, 0b1, 0b10],
            'tsr0b11+ter0b0+tsfr0b1+ier0b1+isr0b11' => [0b11001111, 0b11, 0b0, 0b1, 0b1, 0b11],
            'tsr0b11+ter0b0+tsfr0b10+ier0b0+isr0b0' => [0b11010000, 0b11, 0b0, 0b10, 0b0, 0b0],
            'tsr0b11+ter0b0+tsfr0b10+ier0b0+isr0b1' => [0b11010001, 0b11, 0b0, 0b10, 0b0, 0b1],
            'tsr0b11+ter0b0+tsfr0b10+ier0b0+isr0b10' => [0b11010010, 0b11, 0b0, 0b10, 0b0, 0b10],
            'tsr0b11+ter0b0+tsfr0b10+ier0b0+isr0b11' => [0b11010011, 0b11, 0b0, 0b10, 0b0, 0b11],
            'tsr0b11+ter0b0+tsfr0b10+ier0b1+isr0b0' => [0b11010100, 0b11, 0b0, 0b10, 0b1, 0b0],
            'tsr0b11+ter0b0+tsfr0b10+ier0b1+isr0b1' => [0b11010101, 0b11, 0b0, 0b10, 0b1, 0b1],
            'tsr0b11+ter0b0+tsfr0b10+ier0b1+isr0b10' => [0b11010110, 0b11, 0b0, 0b10, 0b1, 0b10],
            'tsr0b11+ter0b0+tsfr0b10+ier0b1+isr0b11' => [0b11010111, 0b11, 0b0, 0b10, 0b1, 0b11],
            'tsr0b11+ter0b0+tsfr0b11+ier0b0+isr0b0' => [0b11011000, 0b11, 0b0, 0b11, 0b0, 0b0],
            'tsr0b11+ter0b0+tsfr0b11+ier0b0+isr0b1' => [0b11011001, 0b11, 0b0, 0b11, 0b0, 0b1],
            'tsr0b11+ter0b0+tsfr0b11+ier0b0+isr0b10' => [0b11011010, 0b11, 0b0, 0b11, 0b0, 0b10],
            'tsr0b11+ter0b0+tsfr0b11+ier0b0+isr0b11' => [0b11011011, 0b11, 0b0, 0b11, 0b0, 0b11],
            'tsr0b11+ter0b0+tsfr0b11+ier0b1+isr0b0' => [0b11011100, 0b11, 0b0, 0b11, 0b1, 0b0],
            'tsr0b11+ter0b0+tsfr0b11+ier0b1+isr0b1' => [0b11011101, 0b11, 0b0, 0b11, 0b1, 0b1],
            'tsr0b11+ter0b0+tsfr0b11+ier0b1+isr0b10' => [0b11011110, 0b11, 0b0, 0b11, 0b1, 0b10],
            'tsr0b11+ter0b0+tsfr0b11+ier0b1+isr0b11' => [0b11011111, 0b11, 0b0, 0b11, 0b1, 0b11],
            'tsr0b11+ter0b1+tsfr0b0+ier0b0+isr0b0' => [0b11100000, 0b11, 0b1, 0b0, 0b0, 0b0],
            'tsr0b11+ter0b1+tsfr0b0+ier0b0+isr0b1' => [0b11100001, 0b11, 0b1, 0b0, 0b0, 0b1],
            'tsr0b11+ter0b1+tsfr0b0+ier0b0+isr0b10' => [0b11100010, 0b11, 0b1, 0b0, 0b0, 0b10],
            'tsr0b11+ter0b1+tsfr0b0+ier0b0+isr0b11' => [0b11100011, 0b11, 0b1, 0b0, 0b0, 0b11],
            'tsr0b11+ter0b1+tsfr0b0+ier0b1+isr0b0' => [0b11100100, 0b11, 0b1, 0b0, 0b1, 0b0],
            'tsr0b11+ter0b1+tsfr0b0+ier0b1+isr0b1' => [0b11100101, 0b11, 0b1, 0b0, 0b1, 0b1],
            'tsr0b11+ter0b1+tsfr0b0+ier0b1+isr0b10' => [0b11100110, 0b11, 0b1, 0b0, 0b1, 0b10],
            'tsr0b11+ter0b1+tsfr0b0+ier0b1+isr0b11' => [0b11100111, 0b11, 0b1, 0b0, 0b1, 0b11],
            'tsr0b11+ter0b1+tsfr0b1+ier0b0+isr0b0' => [0b11101000, 0b11, 0b1, 0b1, 0b0, 0b0],
            'tsr0b11+ter0b1+tsfr0b1+ier0b0+isr0b1' => [0b11101001, 0b11, 0b1, 0b1, 0b0, 0b1],
            'tsr0b11+ter0b1+tsfr0b1+ier0b0+isr0b10' => [0b11101010, 0b11, 0b1, 0b1, 0b0, 0b10],
            'tsr0b11+ter0b1+tsfr0b1+ier0b0+isr0b11' => [0b11101011, 0b11, 0b1, 0b1, 0b0, 0b11],
            'tsr0b11+ter0b1+tsfr0b1+ier0b1+isr0b0' => [0b11101100, 0b11, 0b1, 0b1, 0b1, 0b0],
            'tsr0b11+ter0b1+tsfr0b1+ier0b1+isr0b1' => [0b11101101, 0b11, 0b1, 0b1, 0b1, 0b1],
            'tsr0b11+ter0b1+tsfr0b1+ier0b1+isr0b10' => [0b11101110, 0b11, 0b1, 0b1, 0b1, 0b10],
            'tsr0b11+ter0b1+tsfr0b1+ier0b1+isr0b11' => [0b11101111, 0b11, 0b1, 0b1, 0b1, 0b11],
            'tsr0b11+ter0b1+tsfr0b10+ier0b0+isr0b0' => [0b11110000, 0b11, 0b1, 0b10, 0b0, 0b0],
            'tsr0b11+ter0b1+tsfr0b10+ier0b0+isr0b1' => [0b11110001, 0b11, 0b1, 0b10, 0b0, 0b1],
            'tsr0b11+ter0b1+tsfr0b10+ier0b0+isr0b10' => [0b11110010, 0b11, 0b1, 0b10, 0b0, 0b10],
            'tsr0b11+ter0b1+tsfr0b10+ier0b0+isr0b11' => [0b11110011, 0b11, 0b1, 0b10, 0b0, 0b11],
            'tsr0b11+ter0b1+tsfr0b10+ier0b1+isr0b0' => [0b11110100, 0b11, 0b1, 0b10, 0b1, 0b0],
            'tsr0b11+ter0b1+tsfr0b10+ier0b1+isr0b1' => [0b11110101, 0b11, 0b1, 0b10, 0b1, 0b1],
            'tsr0b11+ter0b1+tsfr0b10+ier0b1+isr0b10' => [0b11110110, 0b11, 0b1, 0b10, 0b1, 0b10],
            'tsr0b11+ter0b1+tsfr0b10+ier0b1+isr0b11' => [0b11110111, 0b11, 0b1, 0b10, 0b1, 0b11],
            'tsr0b11+ter0b1+tsfr0b11+ier0b0+isr0b0' => [0b11111000, 0b11, 0b1, 0b11, 0b0, 0b0],
            'tsr0b11+ter0b1+tsfr0b11+ier0b0+isr0b1' => [0b11111001, 0b11, 0b1, 0b11, 0b0, 0b1],
            'tsr0b11+ter0b1+tsfr0b11+ier0b0+isr0b10' => [0b11111010, 0b11, 0b1, 0b11, 0b0, 0b10],
            'tsr0b11+ter0b1+tsfr0b11+ier0b0+isr0b11' => [0b11111011, 0b11, 0b1, 0b11, 0b0, 0b11],
            'tsr0b11+ter0b1+tsfr0b11+ier0b1+isr0b0' => [0b11111100, 0b11, 0b1, 0b11, 0b1, 0b0],
            'tsr0b11+ter0b1+tsfr0b11+ier0b1+isr0b1' => [0b11111101, 0b11, 0b1, 0b11, 0b1, 0b1],
            'tsr0b11+ter0b1+tsfr0b11+ier0b1+isr0b10' => [0b11111110, 0b11, 0b1, 0b11, 0b1, 0b10],
            'tsr0b11+ter0b1+tsfr0b11+ier0b1+isr0b11' => [0b11111111, 0b11, 0b1, 0b11, 0b1, 0b11],
        ];
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Flags must be an integer
     */
    public function testSetFlagsWithInvalidArgument($argument)
    {
        $this->tagRestrictions->setFlags($argument);
    }
} 