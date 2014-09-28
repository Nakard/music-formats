<?php
/**
 * Resolver.php
 *
 * Creation date: 2014-09-20
 * Creation time: 13:43
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\Exception\EmptyIdentifierException;
use Nakard\MusicFormats\Media\Id3v2\Frame\Exception\InvalidIdentifierException;

/**
 * Class Resolver
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class Resolver
{
    private $mapping = [
        'UFID'  =>  'UniqueFileIdentifier',
        'MCDI'  =>  'MusicCdIdentifier',
        'ETCO'  =>  'EventTimingCodes',
        'MLLT'  =>  'MpegLocationLookupTable',
        'SYTC'  =>  'SynchronisedTempoCodes',
        'USLT'  =>  'UnsynchronisedLyricsTranscription',
        'TBPM'  =>  'TextInformation\\Derived\\BeatsPerMinute',
        'TCON'  =>  'TextInformation\\Derived\\ContentType',
        'TFLT'  =>  'TextInformation\\Derived\\FileType',
        'TKEY'  =>  'TextInformation\\Derived\\InitialKey',
        'TLAN'  =>  'TextInformation\\Derived\\Language',
        'TLEN'  =>  'TextInformation\\Derived\\Length',
        'TMED'  =>  'TextInformation\\Derived\\MediaType',
        'TMOO'  =>  'TextInformation\\Derived\\Mood',
        'TALB'  =>  'TextInformation\\Identification\\Album',
        'TIT1'  =>  'TextInformation\\Identification\\ContentGroupDescription',
        'TSRC'  =>  'TextInformation\\Identification\\InternationalStandardRecordingCode',
        'TOAL'  =>  'TextInformation\\Identification\\OriginalAlbum',
        'TPOS'  =>  'TextInformation\\Identification\\SetPart',
        'TSST'  =>  'TextInformation\\Identification\\SetSubtitle',
        'TIT3'  =>  'TextInformation\\Identification\\Subtitle',
        'TIT2'  =>  'TextInformation\\Identification\\Title',
        'TRCK'  =>  'TextInformation\\Identification\\TrackNumber',
        'TPE2'  =>  'TextInformation\\InvolvedPersons\\Accompaniment',
        'TPE1'  =>  'TextInformation\\InvolvedPersons\\Artist',
        'TCOM'  =>  'TextInformation\\InvolvedPersons\\Composer',
        'TPE3'  =>  'TextInformation\\InvolvedPersons\\Conductor',
        'TENC'  =>  'TextInformation\\InvolvedPersons\\Encoder',
        'TIPL'  =>  'TextInformation\\InvolvedPersons\\InvolvedPeople',
        'TEXT'  =>  'TextInformation\\InvolvedPersons\\Lyricist',
        'TMCL'  =>  'TextInformation\\InvolvedPersons\\MusicianCredits',
        'TOPE'  =>  'TextInformation\\InvolvedPersons\\OriginalArtist',
        'TOLY'  =>  'TextInformation\\InvolvedPersons\\OriginalLyricist',
        'TPE4'  =>  'TextInformation\\InvolvedPersons\\Remixed',
        'TCOP'  =>  'TextInformation\\License\\Copyright',
        'TRSN'  =>  'TextInformation\\License\\InternetStation',
        'TRSO'  =>  'TextInformation\\License\\InternetStationOwner',
        'TOWN'  =>  'TextInformation\\License\\Owner',
        'TPRO'  =>  'TextInformation\\License\\Produced',
        'TPUB'  =>  'TextInformation\\License\\Publisher',
        'TSOA'  =>  'TextInformation\\Other\\AlbumSortOrder',
        'TSSE'  =>  'TextInformation\\Other\\EncodingSettings',
        'TDEN'  =>  'TextInformation\\Other\\EncodingTime',
        'TOFN'  =>  'TextInformation\\Other\\OriginalFilename',
        'TDOR'  =>  'TextInformation\\Other\\OriginalReleaseTime',
        'TSOP'  =>  'TextInformation\\Other\\PerformerSortOrder',
        'TDLY'  =>  'TextInformation\\Other\\PlaylistDelay',
        'TDRC'  =>  'TextInformation\\Other\\RecordingTime',
        'TDRL'  =>  'TextInformation\\Other\\ReleaseTime',
        'TDTG'  =>  'TextInformation\\Other\\TaggingTime',
        'TSOT'  =>  'TextInformation\\Other\\TitleSortOrder',
        'TXXX'  =>  'TextInformation\\UserDefined',
        'WXXX'  =>  'UrlLink\\UserDefined',
        'WCOM'  =>  'UrlLink\\CommercialInformation',
        'WCOP'  =>  'UrlLink\\LegalInformation',
        'WOAR'  =>  'UrlLink\\OfficialArtistWebpage',
        'WOAF'  =>  'UrlLink\\OfficialAudioFileWebpage',
        'WOAS'  =>  'UrlLink\\OfficialAudioSourceWebpage',
        'WORS'  =>  'UrlLink\\OfficialInternetRadioWebpage',
        'WPAY'  =>  'UrlLink\\Payment',
        'WPUB'  =>  'UrlLink\\PublishersOfficialWebpage',
    ];
    /**
     * @param   string       $identifier
     *
     * @return  AbstractFrame
     * @throws \InvalidArgumentException
     * @throws InvalidIdentifierException
     * @throws EmptyIdentifierException
     */
    public function resolve($identifier)
    {
        if (!is_string($identifier)) {
            throw new \InvalidArgumentException('Identifier must be a string');
        }
        if ('' === $identifier) {
            throw new EmptyIdentifierException;
        }
        if (4 !== strlen($identifier)) {
            throw new InvalidIdentifierException('Identifier must have 4 characters');
        }
        $id = strtoupper($identifier);
        if (!isset($this->mapping[$id])) {
            return new Unknown();
        }
        $classFQCN = '\\' . __NAMESPACE__ . '\\' . $this->mapping[$id];
        return new $classFQCN();
    }
}
