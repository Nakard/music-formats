<?php
/**
 * AbstractFrame.php
 *
 * Creation date: 2014-09-27
 * Creation time: 19:49
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\AbstractFrame as BaseFrame;

/**
 * Class AbstractFrame
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink
 */
class AbstractFrame extends BaseFrame
{
    /**
     * @var string
     */
    protected $url;

    /**
     * Constructs new url link frame
     */
    public function __construct()
    {
        parent::__construct();
        $this->url = '';
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param   string $url
     * @throws  \InvalidArgumentException
     * @return  AbstractFrame
     */
    public function setUrl($url)
    {
        if (!is_string($url)) {
            throw new \InvalidArgumentException('URL must be a string');
        }
        $this->url = $url;

        return $this;
    }


} 