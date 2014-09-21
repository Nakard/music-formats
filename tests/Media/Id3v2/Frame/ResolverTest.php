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
        $this->resolver = new Resolver($this->binaryReader);
    }

    public function testGetBinaryReader()
    {
        $this->assertInstanceOf('PhpBinaryReader\\BinaryReader', $this->resolver->getBinaryReader());
        $this->assertSame($this->binaryReader, $this->resolver->getBinaryReader());
    }

    public function testSetBinaryReader()
    {
        $reader = new BinaryReader(fopen('php://memory', 'rb+'));
        $this->resolver->setBinaryReader($reader);
        $this->assertSame($reader, $this->resolver->getBinaryReader());
        $this->assertInstanceOf('PhpBinaryReader\\BinaryReader', $this->resolver->getBinaryReader());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testSetBinaryReaderWithInvalidArgument()
    {
        $this->resolver->setBinaryReader($this->resolver);
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