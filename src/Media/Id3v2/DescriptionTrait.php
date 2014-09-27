<?php
/**
 * DescriptionTrait.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:29
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\Frame\AbstractFrame;
/**
 * Class DescriptionTrait
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
trait DescriptionTrait 
{
    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @throws \InvalidArgumentException
     * @return AbstractFrame
     */
    public function setDescription($description)
    {
        if (!is_string($description)) {
            throw new \InvalidArgumentException('Description must be a string');
        }
        $this->description = $description;

        return $this;
    }
}
