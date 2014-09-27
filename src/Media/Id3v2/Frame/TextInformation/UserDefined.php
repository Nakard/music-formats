<?php
/**
 * UserDefined.php
 *
 * Creation date: 2014-09-27
 * Creation time: 19:37
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation;

/**
 * Class UserDefined
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation
 */
class UserDefined extends AbstractFrame
{
    protected $identifier = 'TXXX';

    /**
     * @var string
     */
    private $description;

    /**
     * Constructs new user defined text information frame
     */
    public function __construct()
    {
        parent::__construct();
        $this->description = '';
    }

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
     * @return UserDefined
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