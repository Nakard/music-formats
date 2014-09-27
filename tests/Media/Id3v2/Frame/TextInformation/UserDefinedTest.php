<?php
/**
 * UserDefinedTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 19:40
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\UserDefined;

class UserDefinedTest extends AbstractFrameTestCase
{
    /**
     * @var UserDefined
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new UserDefined();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TXXX', $this->frame->getIdentifier());
    }

    public function testGetDescription()
    {
        $this->assertSame('', $this->frame->getDescription());
    }

    public function testSetDescription()
    {
        $this->frame->setDescription('test description');
        $this->assertSame('test description', $this->frame->getDescription());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Description must be a string
     */
    public function testSetDescriptionWithInvalidArgument($argument)
    {
        $this->frame->setDescription($argument);
    }
} 