<?php
/**
 * UniqueFileIdentifier.php
 *
 * Creation date: 2014-09-24
 * Creation time: 19:44
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

/**
 * Class UniqueFileIdentifier
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class UniqueFileIdentifier extends AbstractFrame
{
    /**
     * @var string
     */
    private $ownerIdentifier;

    /**
     * @var string
     */
    private $fileIdentifier;

    /**
     * @var string
     */
    protected $identifier = 'UFID';

    /**
     * Constructs new unique file identifier frame
     */
    public function __construct()
    {
        parent::__construct();
        $this->ownerIdentifier = '';
        $this->fileIdentifier = '';
    }

    /**
     * @return string
     */
    public function getOwnerIdentifier()
    {
        return $this->ownerIdentifier;
    }

    /**
     * @param string $ownerIdentifier
     *
     * @return UniqueFileIdentifier
     */
    public function setOwnerIdentifier($ownerIdentifier)
    {
        if (!is_string($ownerIdentifier)) {
            throw new \InvalidArgumentException('Owner identifier must be a string');
        }
        $this->ownerIdentifier = $ownerIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileIdentifier()
    {
        return $this->fileIdentifier;
    }

    /**
     * @param string $fileIdentifier
     *
     * @return UniqueFileIdentifier
     */
    public function setFileIdentifier($fileIdentifier)
    {
        if (!is_string($fileIdentifier)) {
            throw new \InvalidArgumentException('File identifier must be a string');
        }
        $this->fileIdentifier = $fileIdentifier;

        return $this;
    }
} 