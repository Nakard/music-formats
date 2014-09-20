<?php
/**
 * AbstractFrame.php
 *
 * Creation date: 2014-09-20
 * Creation time: 11:38
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

/**
 * Class AbstractFrame
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
abstract class AbstractFrame
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $size;

    /**
     * @var int
     */
    private $flags;

    /**
     * @return int
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * @param int $flags
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
}
