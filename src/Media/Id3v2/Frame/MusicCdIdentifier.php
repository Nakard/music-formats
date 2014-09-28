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
        $this->cdToc = '';
    }

    /**
     * @return string
     */
    public function getCdToc()
    {
        return $this->cdToc;
    }

    /**
     * @param   string $cdToc
     * @throws  \InvalidArgumentException
     * @return  MusicCdIdentifier
     */
    public function setCdToc($cdToc)
    {
        if (!is_string($cdToc)) {
            throw new \InvalidArgumentException('CD TOC must be a string');
        }
        $this->cdToc = $cdToc;

        return $this;
    }


} 