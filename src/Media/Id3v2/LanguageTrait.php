<?php
/**
 * LanguageTrait.php
 *
 * Creation date: 2014-09-28
 * Creation time: 21:19
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

/**
 * Class LanguageTrait
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
trait LanguageTrait
{
    /**
     * @var int
     */
    protected $language;


    /**
     * @return int
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param int $language
     */
    public function setLanguage($language)
    {
        if (!is_int($language)) {
            throw new \InvalidArgumentException('Language must be an integer');
        }
        $this->language = $language;

        return $this;
    }
}
 