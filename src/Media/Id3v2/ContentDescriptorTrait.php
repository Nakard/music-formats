<?php
/**
 * ContentDescriptorTrait.php
 *
 * Creation date: 2014-10-02
 * Creation time: 19:04
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

/**
 * Class ContentDescriptorTrait
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
trait ContentDescriptorTrait
{
    /**
     * @var string
     */
    private $contentDescriptor;

    /**
     * @return string
     */
    public function getContentDescriptor()
    {
        return $this->contentDescriptor;
    }

    /**
     * @param string $contentDescriptor
     */
    public function setContentDescriptor($contentDescriptor)
    {
        if (!is_string($contentDescriptor)) {
            throw new \InvalidArgumentException('Content descriptor must be a string');
        }
        $this->contentDescriptor = $contentDescriptor;

        return $this;
    }
}
