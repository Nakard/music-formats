<?php
/**
 * ResolverTest.php
 *
 * Creation date: 2014-09-21
 * Creation time: 13:42
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\Resolver;

/**
 * Class ResolverTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class ResolverTest extends \Nakard\MusicFormats\Tests\Media\Id3v2\AbstractTestCase
{
    /**
     * @var Resolver
     */
    private $resolver;

    protected function setUp()
    {
        parent::setUp();
        $this->resolver = new Resolver();
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Identifier must be a string
     */
    public function testResolveWithInvalidArgument($argument)
    {
        $this->resolver->resolve($argument);
    }

    /**
     * @expectedException \Nakard\MusicFormats\Media\Id3v2\Frame\Exception\EmptyIdentifierException
     * @expectedExceptionMessage Identifier can't be empty
     */
    public function testResolveWithEmptyIdentifier()
    {
        $this->resolver->resolve('');
    }

    /**
     * @expectedException \Nakard\MusicFormats\Media\Id3v2\Frame\Exception\InvalidIdentifierException
     * @expectedExceptionMessage Identifier must have 4 characters
     */
    public function testResolveWithTooShortIdentifier()
    {
        $this->resolver->resolve('AAA');
    }

    /**
     * @expectedException \Nakard\MusicFormats\Media\Id3v2\Frame\Exception\InvalidIdentifierException
     * @expectedExceptionMessage Identifier must have 4 characters
     */
    public function testResolveWithTooLongIdentifier()
    {
        $this->resolver->resolve('AAAAA');
    }

    /**
     * @dataProvider resolveProvider
     */
    public function testResolve($identifer, $className)
    {
        $frame = $this->resolver->resolve($identifer);
        $this->assertInstanceOf($className, $frame);
    }

    /**
     * @return array
     */
    public function resolveProvider()
    {
        return [
            ['ABCD', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Unknown'],
            ['UFID', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UniqueFileIdentifier'],
            ['MCDI', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\MusicCdIdentifier'],
            ['ETCO', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\EventTimingCodes'],
            ['MLLT', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\MpegLocationLookupTable'],
            ['SYTC', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\SynchronizedTempoCodes'],
            ['USLT', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UnsynchronizedLyricsTranscription'],
            ['SYLT', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\SynchronizedLyrics'],
            ['COMM', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Comments'],
            ['RVA2', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\RelativeVolumeAdjustment'],
            ['EQU2', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Equalistion'],
            ['RVBB', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Reverb'],
            ['APIC', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\AttachedPicture'],
            ['GEOB', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\GeneralEncapsulatedObject'],
            ['PCNT', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\PlayCounter'],
            ['POPM', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Popularimeter'],
            ['RBUF', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\RecommendedBufferSize'],
            ['AENC', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\AudioEncryption'],
            ['LINK', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\LinkedInformation'],
            ['POSS', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\PositionSynchronization'],
            ['USER', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TermsOfUse'],
            ['OWNE', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Ownership'],
            ['COMR', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Commercial'],
            ['ENCR', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\EncryptionMethodRegistration'],
            ['GRID', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\GroupIdentificationRegistration'],
            ['PRIV', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Private'],
            ['SIGN', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Signature'],
            ['SEEK', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Seek'],
            ['ASPI', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\AudioSeekPointIndex'],
            ['TBPM', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Derived\\BeatsPerMinute'],
            ['TCON', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Derived\\ContentType'],
            ['TFLT', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Derived\\FileType'],
            ['TKEY', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Derived\\InitialKey'],
            ['TLAN', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Derived\\Language'],
            ['TLEN', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Derived\\Length'],
            ['TMED', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Derived\\MediaType'],
            ['TMOO', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Derived\\Mood'],
            ['TALB', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Identification\\Album'],
            ['TIT1', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Identification' .
        '\\ContentGroupDescription'],
            ['TSRC', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Identification' .
        '\\InternationalStandardRecordingCode'],
            ['TOAL', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Identification\\OriginalAlbum'],
            ['TPOS', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Identification\\SetPart'],
            ['TSST', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Identification\\SetSubtitle'],
            ['TIT3', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Identification\\Subtitle'],
            ['TIT2', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Identification\\Title'],
            ['TRCK', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Identification\\TrackNumber'],
            ['TPE2', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\Accompaniment'],
            ['TPE1', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\Artist'],
            ['TCOM', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\Composer'],
            ['TPE3', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\Conductor'],
            ['TENC', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\Encoder'],
            ['TIPL', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\InvolvedPeople'],
            ['TEXT', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\Lyricist'],
            ['TMCL', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\MusicianCredits'],
            ['TOPE', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\OriginalArtist'],
            ['TOLY', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\OriginalLyricist'],
            ['TPE4', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\InvolvedPersons\\Remixed'],
            ['TCOP', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\License\\Copyright'],
            ['TRSN', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\License\\InternetStation'],
            ['TRSO', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\License\\InternetStationOwner'],
            ['TOWN', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\License\\Owner'],
            ['TPRO', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\License\\Produced'],
            ['TPUB', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\License\\Publisher'],
            ['TSOA', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\AlbumSortOrder'],
            ['TSSE', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\EncodingSettings'],
            ['TDEN', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\EncodingTime'],
            ['TOFN', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\OriginalFilename'],
            ['TDOR', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\OriginalReleaseTime'],
            ['TSOP', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\PerformerSortOrder'],
            ['TDLY', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\PlaylistDelay'],
            ['TDRC', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\RecordingTime'],
            ['TDRL', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\ReleaseTime'],
            ['TDTG', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\TaggingTime'],
            ['TSOT', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\Other\\TitleSortOrder'],
            ['TXXX', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\TextInformation\\UserDefined'],
            ['WXXX', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UrlLink\\UserDefined'],
            ['WCOM', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UrlLink\\CommercialInformation'],
            ['WCOP', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UrlLink\\LegalInformation'],
            ['WOAR', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UrlLink\\OfficialArtistWebpage'],
            ['WOAF', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UrlLink\\OfficialAudioFileWebpage'],
            ['WOAS', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UrlLink\\OfficialAudioSourceWebpage'],
            ['WORS', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UrlLink\\OfficialInternetRadioWebpage'],
            ['WPAY', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UrlLink\\Payment'],
            ['WPUB', '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\UrlLink\\PublishersOfficialWebpage'],
        ];
    }
} 