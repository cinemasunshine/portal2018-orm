<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Title;
use Cinemasunshine\ORM\Entities\TitleRanking;
use DateTime;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class TitleRankingTest extends TestCase
{
    /**
     * @return TitleRanking&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(TitleRanking::class);
    }

    /**
     * @param string[] $methods
     * @return TitleRanking&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TitleRanking::class, $methods);
    }

    /**
     * @return ReflectionClass<TitleRanking>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(TitleRanking::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 13;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * @test
     */
    public function testGetFromDate(): void
    {
        $fromDate = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);
        $fromDatePropertyRef->setValue($targetMock, $fromDate);

        $this->assertEquals($fromDate, $targetMock->getFromDate());
    }

    /**
     * @test
     */
    public function testSetFromDate(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);

        $targetMock->setFromDate(null);
        $this->assertEquals(null, $fromDatePropertyRef->getValue($targetMock));

        $dtObject = new DateTime();
        $targetMock->setFromDate($dtObject);
        $this->assertEquals($dtObject, $fromDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setFromDate($dtString);
        $this->assertInstanceOf(
            DateTime::class,
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
     */
    public function testSetFromDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setFromDate(123);
    }

    /**
     * @test
     */
    public function testGetToDate(): void
    {
        $toDate = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);
        $toDatePropertyRef->setValue($targetMock, $toDate);

        $this->assertEquals($toDate, $targetMock->getToDate());
    }

    /**
     * @test
     */
    public function testSetToDate(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);

        $targetMock->setToDate(null);
        $this->assertEquals(null, $toDatePropertyRef->getValue($targetMock));

        $dtObject = new DateTime();
        $targetMock->setToDate($dtObject);
        $this->assertEquals($dtObject, $toDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setToDate($dtString);
        $this->assertInstanceOf(
            DateTime::class,
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
     */
    public function testSetToDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setToDate(123);
    }

    protected function baseTestGetRankTitle(string $method, string $property): void
    {
        $title = new Title();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $propertyRef = $targetRef->getProperty($property);
        $propertyRef->setAccessible(true);
        $propertyRef->setValue($targetMock, $title);

        $this->assertEquals($title, $targetMock->$method());
    }

    protected function baseTestSetRankTitle(string $method, string $property): void
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
     * @test
     */
    public function testGetRank1Title(): void
    {
        $this->baseTestGetRankTitle('getRank1Title', 'rank1Title');
    }

    /**
     * @test
     */
    public function testSetRank1Title(): void
    {
        $this->baseTestSetRankTitle('setRank1Title', 'rank1Title');
    }

    /**
     * @test
     */
    public function testGetRank2Title(): void
    {
        $this->baseTestGetRankTitle('getRank2Title', 'rank2Title');
    }

    /**
     * @test
     */
    public function testSetRank2Title(): void
    {
        $this->baseTestSetRankTitle('setRank2Title', 'rank2Title');
    }

    /**
     * @test
     */
    public function testGetRank3Title(): void
    {
        $this->baseTestGetRankTitle('getRank3Title', 'rank3Title');
    }

    /**
     * @test
     */
    public function testSetRank3Title(): void
    {
        $this->baseTestSetRankTitle('setRank3Title', 'rank3Title');
    }

    /**
     * @test
     */
    public function testGetRank4Title(): void
    {
        $this->baseTestGetRankTitle('getRank4Title', 'rank4Title');
    }

    /**
     * @test
     */
    public function testSetRank4Title(): void
    {
        $this->baseTestSetRankTitle('setRank4Title', 'rank4Title');
    }

    /**
     * @test
     */
    public function testGetRank5Title(): void
    {
        $this->baseTestGetRankTitle('getRank5Title', 'rank5Title');
    }

    /**
     * @test
     */
    public function testSetRank5Title(): void
    {
        $this->baseTestSetRankTitle('setRank5Title', 'rank5Title');
    }
}
