<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\File;
use Cinemasunshine\ORM\Entities\Title;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

final class TitleTest extends TestCase
{
    /**
     * @return Title&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Title::class);
    }

    /**
     * @param string[] $methods
     * @return Title&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Title::class, $methods);
    }

    /**
     * @return ReflectionClass<Title>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(Title::class);
    }

    /**
     * @test
     */
    public function testConstruct(): void
    {
        $targetMock = $this->createTargetMock();
        $targetRef  = $this->createTargetReflection();

        /** @var ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock);

        $campaignsPropertyRef = $targetRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $campaignsPropertyRef->getValue($targetMock)
        );

        $trailersPropertyRef = $targetRef->getProperty('trailers');
        $trailersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $trailersPropertyRef->getValue($targetMock)
        );
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 12;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getImage
     *
     * @test
     */
    public function testGetImage(): void
    {
        $image = new File();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $imagePropertyRef = $targetRef->getProperty('image');
        $imagePropertyRef->setAccessible(true);
        $imagePropertyRef->setValue($targetMock, $image);

        $this->assertEquals($image, $targetMock->getImage());
    }

    /**
     * test setImage
     *
     * @test
     */
    public function testSetImage(): void
    {
        $image = new File();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setImage($image);

        $targetRef = $this->createTargetReflection();

        $imagePropertyRef = $targetRef->getProperty('image');
        $imagePropertyRef->setAccessible(true);

        $this->assertEquals($image, $imagePropertyRef->getValue($targetMock));
    }

    /**
     * test getName
     *
     * @test
     */
    public function testGetName(): void
    {
        $name = 'title_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($targetMock, $name);

        $this->assertEquals($name, $targetMock->getName());
    }

    /**
     * test setName
     *
     * @test
     */
    public function testSetName(): void
    {
        $name = 'title_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setName($name);

        $targetRef = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $this->assertEquals($name, $namePropertyRef->getValue($targetMock));
    }

    /**
     * test getNameKana
     *
     * @test
     */
    public function testGetNameKana(): void
    {
        $nameKana = 'title_name_kana';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $nameKanaPropertyRef = $targetRef->getProperty('nameKana');
        $nameKanaPropertyRef->setAccessible(true);
        $nameKanaPropertyRef->setValue($targetMock, $nameKana);

        $this->assertEquals($nameKana, $targetMock->getNameKana());
    }

    /**
     * test setNameKana
     *
     * @test
     */
    public function testSetNameKana(): void
    {
        $nameKana = 'title_name_kana';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setNameKana($nameKana);

        $targetRef = $this->createTargetReflection();

        $nameKanaPropertyRef = $targetRef->getProperty('nameKana');
        $nameKanaPropertyRef->setAccessible(true);

        $this->assertEquals($nameKana, $nameKanaPropertyRef->getValue($targetMock));
    }

    /**
     * test getNameOriginal
     *
     * @test
     */
    public function testGetNameOriginal(): void
    {
        $nameOriginal = 'title_name_original';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $nameOriginalPropertyRef = $targetRef->getProperty('nameOriginal');
        $nameOriginalPropertyRef->setAccessible(true);
        $nameOriginalPropertyRef->setValue($targetMock, $nameOriginal);

        $this->assertEquals($nameOriginal, $targetMock->getNameOriginal());
    }

    /**
     * test setNameOriginal
     *
     * @test
     */
    public function testSetNameOriginal(): void
    {
        $nameOriginal = 'title_name_original';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setNameOriginal($nameOriginal);

        $targetRef = $this->createTargetReflection();

        $nameOriginalPropertyRef = $targetRef->getProperty('nameOriginal');
        $nameOriginalPropertyRef->setAccessible(true);

        $this->assertEquals($nameOriginal, $nameOriginalPropertyRef->getValue($targetMock));
    }

    /**
     * test getCredit
     *
     * @test
     */
    public function testGetCredit(): void
    {
        $credit = 'title_credit';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $creditPropertyRef = $targetRef->getProperty('credit');
        $creditPropertyRef->setAccessible(true);
        $creditPropertyRef->setValue($targetMock, $credit);

        $this->assertEquals($credit, $targetMock->getCredit());
    }

    /**
     * test setCredit
     *
     * @test
     */
    public function testSetCredit(): void
    {
        $credit = 'title_credit';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCredit($credit);

        $targetRef = $this->createTargetReflection();

        $creditPropertyRef = $targetRef->getProperty('credit');
        $creditPropertyRef->setAccessible(true);

        $this->assertEquals($credit, $creditPropertyRef->getValue($targetMock));
    }

    /**
     * test getCatchcopy
     *
     * @test
     */
    public function testGetCatchcopy(): void
    {
        $catchcopy = 'title_catchcopy';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $catchcopyPropertyRef = $targetRef->getProperty('catchcopy');
        $catchcopyPropertyRef->setAccessible(true);
        $catchcopyPropertyRef->setValue($targetMock, $catchcopy);

        $this->assertEquals($catchcopy, $targetMock->getCatchcopy());
    }

    /**
     * test setCatchcopy
     *
     * @test
     */
    public function testSetCatchcopy(): void
    {
        $catchcopy = 'title_catchcopy';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCatchcopy($catchcopy);

        $targetRef = $this->createTargetReflection();

        $catchcopyPropertyRef = $targetRef->getProperty('catchcopy');
        $catchcopyPropertyRef->setAccessible(true);

        $this->assertEquals($catchcopy, $catchcopyPropertyRef->getValue($targetMock));
    }

    /**
     * test getIntroduction
     *
     * @test
     */
    public function testGetIntroduction(): void
    {
        $introduction = 'title_introduction';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $introductionPropertyRef = $targetRef->getProperty('introduction');
        $introductionPropertyRef->setAccessible(true);
        $introductionPropertyRef->setValue($targetMock, $introduction);

        $this->assertEquals($introduction, $targetMock->getIntroduction());
    }

    /**
     * test setIntroduction
     *
     * @test
     */
    public function testSetIntroduction(): void
    {
        $introduction = 'title_introduction';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setIntroduction($introduction);

        $targetRef = $this->createTargetReflection();

        $introductionPropertyRef = $targetRef->getProperty('introduction');
        $introductionPropertyRef->setAccessible(true);

        $this->assertEquals($introduction, $introductionPropertyRef->getValue($targetMock));
    }

    /**
     * test getDirector
     *
     * @test
     */
    public function testGetDirector(): void
    {
        $director = 'title_director';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $directorPropertyRef = $targetRef->getProperty('director');
        $directorPropertyRef->setAccessible(true);
        $directorPropertyRef->setValue($targetMock, $director);

        $this->assertEquals($director, $targetMock->getDirector());
    }

    /**
     * test setDirector
     *
     * @test
     */
    public function testSetDirector(): void
    {
        $director = 'title_director';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDirector($director);

        $targetRef = $this->createTargetReflection();

        $directorPropertyRef = $targetRef->getProperty('director');
        $directorPropertyRef->setAccessible(true);

        $this->assertEquals($director, $directorPropertyRef->getValue($targetMock));
    }

    /**
     * test getCast
     *
     * @test
     */
    public function testGetCast(): void
    {
        $cast = 'title_cast';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $castPropertyRef = $targetRef->getProperty('cast');
        $castPropertyRef->setAccessible(true);
        $castPropertyRef->setValue($targetMock, $cast);

        $this->assertEquals($cast, $targetMock->getCast());
    }

    /**
     * test setCast
     *
     * @test
     */
    public function testSetCast(): void
    {
        $cast = 'title_cast';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCast($cast);

        $targetRef = $this->createTargetReflection();

        $castPropertyRef = $targetRef->getProperty('cast');
        $castPropertyRef->setAccessible(true);

        $this->assertEquals($cast, $castPropertyRef->getValue($targetMock));
    }

    /**
     * test getPublishingExpectedDate
     *
     * @test
     */
    public function testGetPublishingExpectedDate(): void
    {
        $publishingExpectedDate = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publishingExpectedDatePropertyRef = $targetRef->getProperty('publishingExpectedDate');
        $publishingExpectedDatePropertyRef->setAccessible(true);
        $publishingExpectedDatePropertyRef->setValue($targetMock, $publishingExpectedDate);

        $this->assertEquals(
            $publishingExpectedDate,
            $targetMock->getPublishingExpectedDate()
        );
    }

    /**
     * test setPublishingExpectedDate
     *
     * @test
     */
    public function testSetPublishingExpectedDate(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publishingExpectedDatePropertyRef = $targetRef->getProperty('publishingExpectedDate');
        $publishingExpectedDatePropertyRef->setAccessible(true);

        $targetMock->setPublishingExpectedDate(null);
        $this->assertEquals(null, $publishingExpectedDatePropertyRef->getValue($targetMock));

        $publishingExpectedDateObj = new DateTime();
        $targetMock->setPublishingExpectedDate($publishingExpectedDateObj);
        $this->assertEquals(
            $publishingExpectedDateObj,
            $publishingExpectedDatePropertyRef->getValue($targetMock)
        );

        $publishingExpectedDateStr = '2020/01/01';
        $targetMock->setPublishingExpectedDate($publishingExpectedDateStr);
        $this->assertInstanceOf(
            DateTime::class,
            $publishingExpectedDatePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $publishingExpectedDateStr,
            $publishingExpectedDatePropertyRef->getValue($targetMock)->format('Y/m/d')
        );
    }

    /**
     * test setPublishingExpectedDate (invalid argument)
     *
     * @test
     */
    public function testSetPublishingExpectedDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublishingExpectedDate(123);
    }

    /**
     * test getOfficialSite
     *
     * @test
     */
    public function testGetOfficialSite(): void
    {
        $officialSite = 'https://example.com/';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $officialSitePropertyRef = $targetRef->getProperty('officialSite');
        $officialSitePropertyRef->setAccessible(true);
        $officialSitePropertyRef->setValue($targetMock, $officialSite);

        $this->assertEquals($officialSite, $targetMock->getOfficialSite());
    }

    /**
     * test setOfficialSite
     *
     * @test
     */
    public function testSetOfficialSite(): void
    {
        $officialSite = 'https://example.com/';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setOfficialSite($officialSite);

        $targetRef = $this->createTargetReflection();

        $officialSitePropertyRef = $targetRef->getProperty('officialSite');
        $officialSitePropertyRef->setAccessible(true);

        $this->assertEquals($officialSite, $officialSitePropertyRef->getValue($targetMock));
    }

    /**
     * test getRating
     *
     * @test
     */
    public function testGetRating(): void
    {
        $rating = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $ratingPropertyRef = $targetRef->getProperty('rating');
        $ratingPropertyRef->setAccessible(true);
        $ratingPropertyRef->setValue($targetMock, $rating);

        $this->assertEquals($rating, $targetMock->getRating());
    }

    /**
     * test setRating
     *
     * @test
     */
    public function testSetRating(): void
    {
        $rating = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setRating($rating);

        $targetRef = $this->createTargetReflection();

        $ratingPropertyRef = $targetRef->getProperty('rating');
        $ratingPropertyRef->setAccessible(true);

        $this->assertEquals($rating, $ratingPropertyRef->getValue($targetMock));
    }

    /**
     * test getUniversal
     *
     * @test
     */
    public function testGetUniversal(): void
    {
        $universal = [1, 2];

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $universalPropertyRef = $targetRef->getProperty('universal');
        $universalPropertyRef->setAccessible(true);
        $universalPropertyRef->setValue($targetMock, $universal);

        $this->assertEquals($universal, $targetMock->getUniversal());
    }

    /**
     * test setUniversal
     *
     * @test
     */
    public function testSetUniversal(): void
    {
        $universal = [1, 2];

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUniversal($universal);

        $targetRef = $this->createTargetReflection();

        $universalPropertyRef = $targetRef->getProperty('universal');
        $universalPropertyRef->setAccessible(true);

        $this->assertEquals($universal, $universalPropertyRef->getValue($targetMock));
    }

    /**
     * test getCampaigns
     *
     * @test
     */
    public function testGetCampaigns(): void
    {
        $campaigns = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $campaignsPropertyRef = $targetRef->getProperty('campaigns');
        $campaignsPropertyRef->setAccessible(true);
        $campaignsPropertyRef->setValue($targetMock, $campaigns);

        $this->assertEquals($campaigns, $targetMock->getCampaigns());
    }

    /**
     * test getTrailers
     *
     * @test
     */
    public function testGetTrailers(): void
    {
        $trailers = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $trailersPropertyRef = $targetRef->getProperty('trailers');
        $trailersPropertyRef->setAccessible(true);
        $trailersPropertyRef->setValue($targetMock, $trailers);

        $this->assertEquals($trailers, $targetMock->getTrailers());
    }
}
