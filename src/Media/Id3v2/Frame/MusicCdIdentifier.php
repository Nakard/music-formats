<?php
/**
 * MusicCdIdentifier.php
 *
 * Creation date: 2014-09-27
 * Creation time: 21:09
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

/**
 * Class MusicCdIdentifier
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class MusicCdIdentifier extends AbstractFrame
{
    protected $identifier = 'MCDI';

    /**
     * @var string
     */
    private $cdToc;

    /**
     * Creates new music identifier frame
     */
    public function __construct()
    {
        parent::__construct();
        $this->cdToc = (binary) '';
    }

    /**
     * @return string
     */
    public function getCdToc()
    {
        return (binary) $this->cdToc;
    }

    /**
     * @param   string $cdToc
     * @throws  \InvalidArgumentException
     * @return  MusicCdIdentifier
     */
    public function setCdToc($cdToc)
    {
        if (!is_string($cdToc)) {
            throw new \InvalidArgumentException('CD TOC must be a binary string');
        }
        $this->cdToc = (binary) $cdToc;

        return $this;
    }


} 