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
        $this->tagRestrictions->setTagSizeRestrictions(1);
        $this->assertSame(1, $this->tagRestrictions->getTagSizeRestrictions());
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

    public function testGetTextEncodingRestrictions()
    {
        $this->assertSame(0, $this->tagRestrictions->getTextEncodingRestrictions());
    }

    public function testSetTextEncodingRestrictions()
    {
        $this->tagRestrictions->setTextEncodingRestrictions(1);
        $this->assertSame(1, $this->tagRestrictions->getTextEncodingRestrictions());
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
        $this->tagRestrictions->setTextFieldsSizeRestrictions(1);
        $this->assertSame(1, $this->tagRestrictions->getTextFieldsSizeRestrictions());
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
        $this->tagRestrictions->setImageSizeRestrictions(1);
        $this->assertSame(1, $this->tagRestrictions->getImageSizeRestrictions());
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
} 