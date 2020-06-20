<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\File;
use Cinemasunshine\ORM\Entity\Title;
use PHPUnit\Framework\TestCase;

/**
 * Title test
 */
final class TitleTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return Title&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Title::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return Title&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Title::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<Title>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(Title::class);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 12;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getImage
     *
     * @test
     * @return void
     */
    public function testGetImage()
    {
        $image = new File();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $imagePropertyRef = $targetRef->getProperty('image');
        $imagePropertyRef->setAccessible(true);
        $imagePropertyRef->setValue($targetMock, $image);

        $this->assertEquals($image, $targetMock->getImage());
    }

    /**
     * test setImage
     *
     * @test
     * @return void
     */
    public function testSetImage()
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
     * @return void
     */
    public function testGetName()
    {
        $name = 'title_name';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($targetMock, $name);

        $this->assertEquals($name, $targetMock->getName());
    }

    /**
     * test setName
     *
     * @test
     * @return void
     */
    public function testSetName()
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
     * @return void
     */
    public function testGetNameKana()
    {
        $nameKana = 'title_name_kana';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $nameKanaPropertyRef = $targetRef->getProperty('nameKana');
        $nameKanaPropertyRef->setAccessible(true);
        $nameKanaPropertyRef->setValue($targetMock, $nameKana);

        $this->assertEquals($nameKana, $targetMock->getNameKana());
    }

    /**
     * test setNameKana
     *
     * @test
     * @return void
     */
    public function testSetNameKana()
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
     * @return void
     */
    public function testGetNameOriginal()
    {
        $nameOriginal = 'title_name_original';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $nameOriginalPropertyRef = $targetRef->getProperty('nameOriginal');
        $nameOriginalPropertyRef->setAccessible(true);
        $nameOriginalPropertyRef->setValue($targetMock, $nameOriginal);

        $this->assertEquals($nameOriginal, $targetMock->getNameOriginal());
    }

    /**
     * test setNameOriginal
     *
     * @test
     * @return void
     */
    public function testSetNameOriginal()
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
     * @return void
     */
    public function testGetCredit()
    {
        $credit = 'title_credit';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $creditPropertyRef = $targetRef->getProperty('credit');
        $creditPropertyRef->setAccessible(true);
        $creditPropertyRef->setValue($targetMock, $credit);

        $this->assertEquals($credit, $targetMock->getCredit());
    }

    /**
     * test setCredit
     *
     * @test
     * @return void
     */
    public function testSetCredit()
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
     * @return void
     */
    public function testGetCatchcopy()
    {
        $catchcopy = 'title_catchcopy';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $catchcopyPropertyRef = $targetRef->getProperty('catchcopy');
        $catchcopyPropertyRef->setAccessible(true);
        $catchcopyPropertyRef->setValue($targetMock, $catchcopy);

        $this->assertEquals($catchcopy, $targetMock->getCatchcopy());
    }

    /**
     * test setCatchcopy
     *
     * @test
     * @return void
     */
    public function testSetCatchcopy()
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
     * @return void
     */
    public function testGetIntroduction()
    {
        $introduction = 'title_introduction';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $introductionPropertyRef = $targetRef->getProperty('introduction');
        $introductionPropertyRef->setAccessible(true);
        $introductionPropertyRef->setValue($targetMock, $introduction);

        $this->assertEquals($introduction, $targetMock->getIntroduction());
    }

    /**
     * test setIntroduction
     *
     * @test
     * @return void
     */
    public function testSetIntroduction()
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
     * @return void
     */
    public function testGetDirector()
    {
        $director = 'title_director';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $directorPropertyRef = $targetRef->getProperty('director');
        $directorPropertyRef->setAccessible(true);
        $directorPropertyRef->setValue($targetMock, $director);

        $this->assertEquals($director, $targetMock->getDirector());
    }

    /**
     * test setDirector
     *
     * @test
     * @return void
     */
    public function testSetDirector()
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
     * @return void
     */
    public function testGetCast()
    {
        $cast = 'title_cast';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $castPropertyRef = $targetRef->getProperty('cast');
        $castPropertyRef->setAccessible(true);
        $castPropertyRef->setValue($targetMock, $cast);

        $this->assertEquals($cast, $targetMock->getCast());
    }

    /**
     * test setCast
     *
     * @test
     * @return void
     */
    public function testSetCast()
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
     * @return void
     */
    public function testGetPublishingExpectedDate()
    {
        $publishingExpectedDate = new \DateTime();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
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
     * @return void
     */
    public function testSetPublishingExpectedDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $publishingExpectedDatePropertyRef = $targetRef->getProperty('publishingExpectedDate');
        $publishingExpectedDatePropertyRef->setAccessible(true);

        $publishingExpectedDateObj = new \DateTime();
        $targetMock->setPublishingExpectedDate($publishingExpectedDateObj);
        $this->assertEquals(
            $publishingExpectedDateObj,
            $publishingExpectedDatePropertyRef->getValue($targetMock)
        );

        $publishingExpectedDateStr = '2020/01/01';
        $targetMock->setPublishingExpectedDate($publishingExpectedDateStr);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetPublishingExpectedDateInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublishingExpectedDate(123);
    }

    /**
     * test getOfficialSite
     *
     * @test
     * @return void
     */
    public function testGetOfficialSite()
    {
        $officialSite = 'https://example.com/';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $officialSitePropertyRef = $targetRef->getProperty('officialSite');
        $officialSitePropertyRef->setAccessible(true);
        $officialSitePropertyRef->setValue($targetMock, $officialSite);

        $this->assertEquals($officialSite, $targetMock->getOfficialSite());
    }

    /**
     * test setOfficialSite
     *
     * @test
     * @return void
     */
    public function testSetOfficialSite()
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
     * @return void
     */
    public function testGetRating()
    {
        $rating = 2;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $ratingPropertyRef = $targetRef->getProperty('rating');
        $ratingPropertyRef->setAccessible(true);
        $ratingPropertyRef->setValue($targetMock, $rating);

        $this->assertEquals($rating, $targetMock->getRating());
    }

    /**
     * test setRating
     *
     * @test
     * @return void
     */
    public function testSetRating()
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
     * @return void
     */
    public function testGetUniversal()
    {
        $universal = [1, 2];
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $universalPropertyRef = $targetRef->getProperty('universal');
        $universalPropertyRef->setAccessible(true);
        $universalPropertyRef->setValue($targetMock, $universal);

        $this->assertEquals($universal, $targetMock->getUniversal());
    }

    /**
     * test setUniversal
     *
     * @test
     * @return void
     */
    public function testSetUniversal()
    {
        $universal = [1, 2];
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setUniversal($universal);

        $targetRef = $this->createTargetReflection();
        $universalPropertyRef = $targetRef->getProperty('universal');
        $universalPropertyRef->setAccessible(true);

        $this->assertEquals($universal, $universalPropertyRef->getValue($targetMock));
    }
}
