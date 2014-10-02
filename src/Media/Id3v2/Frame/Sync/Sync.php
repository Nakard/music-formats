<?php
/**
 * Sync.php
 *
 * Creation date: 2014-10-02
 * Creation time: 19:33
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Sync;

use Nakard\MusicFormats\Media\Id3v2\TimestampTrait;

/**
 * Class Sync
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Sync
 */
class Sync 
{
    use TimestampTrait;

    /**
     * @var string
     */
    private $syncedText;

    /**
     * Constructs new synced text
     */
    public function __construct()
    {
        $this->timestamp = 0x0000;
        $this->syncedText = '';
    }

    /**
     * @return string
     */
    public function getSyncedText()
    {
        return $this->syncedText;
    }

    /**
     * @param string $syncedText
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSyncedText($syncedText)
    {
        if (!is_string($syncedText)) {
            throw new \InvalidArgumentException('Synced text must be a string');
        }
        $this->syncedText = $syncedText;

        return $this;
    }
}
