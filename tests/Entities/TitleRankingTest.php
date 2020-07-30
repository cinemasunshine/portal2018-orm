<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Title;
use Cinemasunshine\ORM\Entities\TitleRanking;
use PHPUnit\Framework\TestCase;

/**
 * TitleRanking test
 */
final class TitleRankingTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return TitleRanking&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(TitleRanking::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return TitleRanking&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TitleRanking::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<TitleRanking>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(TitleRanking::class);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 13;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getFromDate
     *
     * @test
     * @return void
     */
    public function testGetFromDate()
    {
        $fromDate = new \DateTime();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);
        $fromDatePropertyRef->setValue($targetMock, $fromDate);

        $this->assertEquals($fromDate, $targetMock->getFromDate());
    }

    /**
     * test setFromDate
     *
     * @test
     * @return void
     */
    public function testSetFromDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);

        $targetMock->setFromDate(null);
        $this->assertEquals(null, $fromDatePropertyRef->getValue($targetMock));

        $dtObject = new \DateTime();
        $targetMock->setFromDate($dtObject);
        $this->assertEquals($dtObject, $fromDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setFromDate($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
            $fromDatePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $fromDatePropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setFromDate (invalid argument)
     *
     * @test
     * @return void
     */
    public function testSetFromDateInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setFromDate(123);
    }

    /**
     * test getToDate
     *
     * @test
     * @return void
     */
    public function testGetToDate()
    {
        $toDate = new \DateTime();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);
        $toDatePropertyRef->setValue($targetMock, $toDate);

        $this->assertEquals($toDate, $targetMock->getToDate());
    }

    /**
     * test setToDate
     *
     * @test
     * @return void
     */
    public function testSetToDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);

        $targetMock->setToDate(null);
        $this->assertEquals(null, $toDatePropertyRef->getValue($targetMock));

        $dtObject = new \DateTime();
        $targetMock->setToDate($dtObject);
        $this->assertEquals($dtObject, $toDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setToDate($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
            $toDatePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $toDatePropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setToDate (invalid argument)
     *
     * @test
     * @return void
     */
    public function testSetToDateInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setToDate(123);
    }

    /**
     * getRankTitle base test
     *
     * @param string $method
     * @param string $property
     * @return void
     */
    protected function baseTestGetRankTitle(string $method, string $property)
    {
        $title = new Title();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $propertyRef = $targetRef->getProperty($property);
        $propertyRef->setAccessible(true);
        $propertyRef->setValue($targetMock, $title);

        $this->assertEquals($title, $targetMock->$method());
    }

    /**
     * setRankTitle base test
     *
     * @param string $method
     * @param string $property
     * @return void
     */
    protected function baseTestSetRankTitle(string $method, string $property)
    {
        $title = new Title();
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->$method($title);

        $targetRef = $this->createTargetReflection();
        $propertyRef = $targetRef->getProperty($property);
        $propertyRef->setAccessible(true);

        $this->assertEquals($title, $propertyRef->getValue($targetMock));
    }

    /**
     * test getRank1Title
     *
     * @test
     * @return void
     */
    public function testGetRank1Title()
    {
        $this->baseTestGetRankTitle('getRank1Title', 'rank1Title');
    }

    /**
     * test setRank1Title
     *
     * @test
     * @return void
     */
    public function testSetRank1Title()
    {
        $this->baseTestSetRankTitle('setRank1Title', 'rank1Title');
    }

    /**
     * test getRank2Title
     *
     * @test
     * @return void
     */
    public function testGetRank2Title()
    {
        $this->baseTestGetRankTitle('getRank2Title', 'rank2Title');
    }

    /**
     * test setRank2Title
     *
     * @test
     * @return void
     */
    public function testSetRank2Title()
    {
        $this->baseTestSetRankTitle('setRank2Title', 'rank2Title');
    }

    /**
     * test getRank3Title
     *
     * @test
     * @return void
     */
    public function testGetRank3Title()
    {
        $this->baseTestGetRankTitle('getRank3Title', 'rank3Title');
    }

    /**
     * test setRank3Title
     *
     * @test
     * @return void
     */
    public function testSetRank3Title()
    {
        $this->baseTestSetRankTitle('setRank3Title', 'rank3Title');
    }

    /**
     * test getRank4Title
     *
     * @test
     * @return void
     */
    public function testGetRank4Title()
    {
        $this->baseTestGetRankTitle('getRank4Title', 'rank4Title');
    }

    /**
     * test setRank4Title
     *
     * @test
     * @return void
     */
    public function testSetRank4Title()
    {
        $this->baseTestSetRankTitle('setRank4Title', 'rank4Title');
    }

    /**
     * test getRank5Title
     *
     * @test
     * @return void
     */
    public function testGetRank5Title()
    {
        $this->baseTestGetRankTitle('getRank5Title', 'rank5Title');
    }

    /**
     * test setRank5Title
     *
     * @test
     * @return void
     */
    public function testSetRank5Title()
    {
        $this->baseTestSetRankTitle('setRank5Title', 'rank5Title');
    }
}
