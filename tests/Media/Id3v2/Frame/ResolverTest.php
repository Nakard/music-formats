<?php
/**
 * ResolverTest.php
 *
 * Creation date: 2014-09-21
 * Creation time: 13:42
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\Resolver;
use PhpBinaryReader\BinaryReader;
use Nakard\MusicFormats\Media\Id3v2\Frame\Exception\InvalidIdentifierException;

/**
 * Class ResolverTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class ResolverTest extends \Nakard\MusicFormats\Tests\Media\Id3v2\AbstractTestCase
{
    /**
     * @var Resolver
     */
    private $resolver;

    protected function setUp()
    {
        parent::setUp();
        $this->resolver = new Resolver();
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Identifier must be a string
     */
    public function testResolveWithInvalidArgument($argument)
    {
        $this->resolver->resolve($argument);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Identifier can't be an empty string
     */
    public function testResolveWithEmptyIdentifier()
    {
        $this->resolver->resolve('');
    }

    /**
     * @expectedException \Nakard\MusicFormats\Media\Id3v2\Frame\Exception\InvalidIdentifierException
     * @expectedExceptionMessage Identifier must have 4 characters
     */
    public function testResolveWithTooShortIdentifier()
    {
        $this->resolver->resolve('AAA');
    }

    /**
     * @expectedException \Nakard\MusicFormats\Media\Id3v2\Frame\Exception\InvalidIdentifierException
     * @expectedExceptionMessage Identifier must have 4 characters
     */
    public function testResolveWithTooLongIdentifier()
    {
        $this->resolver->resolve('AAAAA');
    }

    /**
     * @dataProvider resolveProvider
     */
    public function testResolve($identifer, $className)
    {
        $frame = $this->resolver->resolve($identifer);
        $this->assertInstanceOf($className, $frame);
    }

    /**
     * @return array
     */
    public function resolveProvider()
    {
        return [
            'unknown'   =>  ['ABCD', 'Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Unknown']
        ];
    }
} 