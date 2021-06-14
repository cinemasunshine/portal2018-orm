<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Title;
use Cinemasunshine\ORM\Entities\TitleRanking;
use Cinemasunshine\ORM\Entities\TitleRankingRank;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * @coversDefaultClass \Cinemasunshine\ORM\Entities\TitleRankingRank
 */
final class TitleRankingRankTest extends TestCase
{
    /** @var TitleRankingRank */
    protected $titleRankingRank;

    /**
     * @return ReflectionClass<TitleRankingRank>
     */
    protected function createTitleRankingRankReflection(): ReflectionClass
    {
        return new ReflectionClass(TitleRankingRank::class);
    }

    /**
     * @before
     */
    public function setUp(): void
    {
        $this->titleRankingRank = new TitleRankingRank();
    }

    /**
     * @covers ::getId
     * @test
     * @testdox getIdはプロパティidの値を返す
     */
    public function testGetId(): void
    {
        $id = 2;

        $titleRankingRankRef = $this->createTitleRankingRankReflection();

        $idPropertyRef = $titleRankingRankRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($this->titleRankingRank, $id);

        $this->assertEquals($id, $this->titleRankingRank->getId());
    }

    /**
     * @covers ::getRanking
     * @test
     * @testdox getRankingはプロパティrankingの値を返す
     */
    public function testGetRanking(): void
    {
        $ranking = new TitleRanking();

        $titleRankingRankRef = $this->createTitleRankingRankReflection();

        $rankingPropertyRef = $titleRankingRankRef->getProperty('ranking');
        $rankingPropertyRef->setAccessible(true);
        $rankingPropertyRef->setValue($this->titleRankingRank, $ranking);

        $this->assertEquals($ranking, $this->titleRankingRank->getRanking());
    }

    /**
     * @covers ::setRanking
     * @test
     * @testdox setRankingは引数の値をプロパティrankingにセットする
     */
    public function testSetRanking(): void
    {
        $ranking = new TitleRanking();
        $this->titleRankingRank->setRanking($ranking);

        $titleRankingRankRef = $this->createTitleRankingRankReflection();

        $rankingPropertyRef = $titleRankingRankRef->getProperty('ranking');
        $rankingPropertyRef->setAccessible(true);

        $this->assertEquals(
            $ranking,
            $rankingPropertyRef->getValue($this->titleRankingRank)
        );
    }

    /**
     * @covers ::getTitle
     * @test
     * @testdox getTitleはプロパティtitleの値を返す
     */
    public function testGetTitle(): void
    {
        $title = new Title();

        $titleRankingRankRef = $this->createTitleRankingRankReflection();

        $titlePropertyRef = $titleRankingRankRef->getProperty('title');
        $titlePropertyRef->setAccessible(true);
        $titlePropertyRef->setValue($this->titleRankingRank, $title);

        $this->assertEquals($title, $this->titleRankingRank->getTitle());
    }

    /**
     * @return array<string,array{mixed}>
     */
    public function setTitleDataProvider(): array
    {
        return [
            'set null' => [null],
            'set Title' => [new Title()],
        ];
    }

    /**
     * @covers ::setTitle
     * @dataProvider setTitleDataProvider
     * @test
     * @testdox setTitleは引数の値をプロパティtitleにセットする
     *
     * @param mixed $arg
     */
    public function testSetTitle($arg): void
    {
        $this->titleRankingRank->setTitle($arg);

        $titleRankingRankRef = $this->createTitleRankingRankReflection();

        $titlePropertyRef = $titleRankingRankRef->getProperty('title');
        $titlePropertyRef->setAccessible(true);

        $this->assertEquals(
            $arg,
            $titlePropertyRef->getValue($this->titleRankingRank)
        );
    }

    /**
     * @covers ::getRank
     * @test
     * @testdox getRankはプロパティrankの値を返す
     */
    public function testGetRank(): void
    {
        $rank = 2;

        $titleRankingRankRef = $this->createTitleRankingRankReflection();

        $rankPropertyRef = $titleRankingRankRef->getProperty('rank');
        $rankPropertyRef->setAccessible(true);
        $rankPropertyRef->setValue($this->titleRankingRank, $rank);

        $this->assertEquals($rank, $this->titleRankingRank->getRank());
    }

    /**
     * @covers ::setRank
     * @test
     * @testdox setRankは引数の値をプロパティrankにセットする
     */
    public function testSetRank(): void
    {
        $rank = 2;
        $this->titleRankingRank->setRank($rank);

        $titleRankingRankRef = $this->createTitleRankingRankReflection();

        $rankPropertyRef = $titleRankingRankRef->getProperty('rank');
        $rankPropertyRef->setAccessible(true);

        $this->assertEquals(
            $rank,
            $rankPropertyRef->getValue($this->titleRankingRank)
        );
    }

    /**
     * @covers ::getDetailUrl
     * @test
     * @testdox getDetailUrlはプロパティdetailUrlの値を返す
     */
    public function testGetDetailUrl(): void
    {
        $detailUrl = 'https://example.com/';

        $titleRankingRankRef = $this->createTitleRankingRankReflection();

        $detailUrlPropertyRef = $titleRankingRankRef->getProperty('detailUrl');
        $detailUrlPropertyRef->setAccessible(true);
        $detailUrlPropertyRef->setValue($this->titleRankingRank, $detailUrl);

        $this->assertEquals($detailUrl, $this->titleRankingRank->getDetailUrl());
    }

    /**
     * @covers ::setDetailUrl
     * @test
     * @testdox setDetailUrlは引数の値をプロパティdetailUrlにセットする
     */
    public function testSetDetailUrl(): void
    {
        $detailUrl = 'https://example.com/';
        $this->titleRankingRank->setDetailUrl($detailUrl);

        $titleRankingRankRef = $this->createTitleRankingRankReflection();

        $detailUrlPropertyRef = $titleRankingRankRef->getProperty('detailUrl');
        $detailUrlPropertyRef->setAccessible(true);

        $this->assertEquals(
            $detailUrl,
            $detailUrlPropertyRef->getValue($this->titleRankingRank)
        );
    }
}
