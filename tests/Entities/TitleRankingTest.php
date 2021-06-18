<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\TitleRanking;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @coversDefaultClass \Cinemasunshine\ORM\Entities\TitleRanking
 */
final class TitleRankingTest extends TestCase
{
    /** @var TitleRanking */
    protected $titleRanking;

    /**
     * @return ReflectionClass<TitleRanking>
     */
    protected function createTitleRankingReflection(): ReflectionClass
    {
        return new ReflectionClass(TitleRanking::class);
    }

    /**
     * @before
     */
    public function setUp(): void
    {
        $this->titleRanking = new TitleRanking();
    }

    /**
     * @covers ::__construct
     * @test
     * @testdox __constructはプロパティranksをArrayCollectionで初期化する
     */
    public function testConstruct(): void
    {
        $titleRankingRef = $this->createTitleRankingReflection();

        $ranksPropertyRef = $titleRankingRef->getProperty('ranks');
        $ranksPropertyRef->setAccessible(true);

        $this->assertInstanceOf(
            ArrayCollection::class,
            $ranksPropertyRef->getValue($this->titleRanking)
        );
    }

    /**
     * @covers ::getId
     * @test
     * @testdox getIdはプロパティidの値を返す
     */
    public function testGetId(): void
    {
        $id = 13;

        $titleRankingRef = $this->createTitleRankingReflection();

        $idPropertyRef = $titleRankingRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($this->titleRanking, $id);

        $this->assertEquals($id, $this->titleRanking->getId());
    }

    /**
     * @covers ::getFromDate
     * @test
     * @testdox getFromDateはプロパティfromDateの値を返す
     */
    public function testGetFromDate(): void
    {
        $fromDate = new DateTime();

        $titleRankingRef = $this->createTitleRankingReflection();

        $fromDatePropertyRef = $titleRankingRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);
        $fromDatePropertyRef->setValue($this->titleRanking, $fromDate);

        $this->assertEquals($fromDate, $this->titleRanking->getFromDate());
    }

    /**
     * @return array<string,array{mixed,?string}>
     */
    public function setFromDateDataProvider(): array
    {
        $date = '2021-06-01';

        return [
            'set null' => [null, null],
            'set string' => [$date, $date],
            'set DateTime' => [new DateTime($date), $date],
        ];
    }

    /**
     * @covers ::setFromDate
     * @dataProvider setFromDateDataProvider
     * @test
     * @testdox setFromDateはプロパティfromDateにDateTimeオブジェクトかnullをセットする
     *
     * @param mixed $arg
     */
    public function testSetFromDateCaseValidArgument($arg, ?string $date): void
    {
        $titleRankingRef = $this->createTitleRankingReflection();

        $fromDatePropertyRef = $titleRankingRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);

        $this->titleRanking->setFromDate($arg);

        $fromDatePropertyValue = $fromDatePropertyRef->getValue($this->titleRanking);

        if (is_null($arg)) {
            $this->assertNull($fromDatePropertyValue);
        } else {
            $this->assertInstanceOf(DateTime::class, $fromDatePropertyValue);
            $this->assertEquals($date, $fromDatePropertyValue->format('Y-m-d'));
        }
    }

    /**
     * @covers ::setFromDate
     * @test
     * @testdox setFromDateは引数が無効な場合、例外をthrowする
     */
    public function testSetFromDateCaseInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        /** @phpstan-ignore-next-line */
        $this->titleRanking->setFromDate(123);
    }

    /**
     * @covers ::getToDate
     * @test
     * @testdox getToDateはプロパティtoDateの値を返す
     */
    public function testGetToDate(): void
    {
        $toDate = new DateTime();

        $titleRankingRef = $this->createTitleRankingReflection();

        $toDatePropertyRef = $titleRankingRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);
        $toDatePropertyRef->setValue($this->titleRanking, $toDate);

        $this->assertEquals($toDate, $this->titleRanking->getToDate());
    }

    /**
     * @return array<string,array{mixed,?string}>
     */
    public function setToDateDataProvider(): array
    {
        $date = '2021-06-01';

        return [
            'set null' => [null, null],
            'set string' => [$date, $date],
            'set DateTime' => [new DateTime($date), $date],
        ];
    }

    /**
     * @covers ::setToDate
     * @dataProvider setToDateDataProvider
     * @test
     * @testdox setToDateはプロパティtoDateにDateTimeオブジェクトかnullをセットする
     *
     * @param mixed $arg
     */
    public function testSetToDate($arg, ?string $date): void
    {
        $titleRankingRef = $this->createTitleRankingReflection();

        $toDatePropertyRef = $titleRankingRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);

        $this->titleRanking->setToDate($arg);

        $toDatePropertyValue = $toDatePropertyRef->getValue($this->titleRanking);

        if (is_null($arg)) {
            $this->assertNull($toDatePropertyValue);
        } else {
            $this->assertInstanceOf(DateTime::class, $toDatePropertyValue);
            $this->assertEquals($date, $toDatePropertyValue->format('Y-m-d'));
        }
    }

    /**
     * @covers ::setToDate
     * @test
     * @testdox setToDateは引数が無効な場合、例外をthrowする
     */
    public function testSetToDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        /** @phpstan-ignore-next-line */
        $this->titleRanking->setToDate(123);
    }

    /**
     * @covers ::getRanks
     * @test
     * @testdox getRanksはプロパティranksの値を返す
     */
    public function testGetRanks(): void
    {
        $ranks = new ArrayCollection();

        $titleRankingRef = $this->createTitleRankingReflection();

        $ranksPropertyRef = $titleRankingRef->getProperty('ranks');
        $ranksPropertyRef->setAccessible(true);
        $ranksPropertyRef->setValue($this->titleRanking, $ranks);

        $this->assertEquals($ranks, $this->titleRanking->getRanks());
    }
}
