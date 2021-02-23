<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\SpecialSite;
use Cinemasunshine\ORM\Entities\SpecialSiteTrailer;
use Cinemasunshine\ORM\Entities\Trailer;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class SpecialSiteTrailerTest extends TestCase
{
    /**
     * @return SpecialSiteTrailer&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(SpecialSiteTrailer::class);
    }

    /**
     * @param string[] $methods
     * @return SpecialSiteTrailer&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SpecialSiteTrailer::class, $methods);
    }

    /**
     * @return ReflectionClass<SpecialSiteTrailer>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(SpecialSiteTrailer::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 14;

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
    public function testGetTrailer(): void
    {
        $trailer = new Trailer();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $trailerPropertyRef = $targetRef->getProperty('trailer');
        $trailerPropertyRef->setAccessible(true);
        $trailerPropertyRef->setValue($targetMock, $trailer);

        $this->assertEquals($trailer, $targetMock->getTrailer());
    }

    /**
     * @test
     */
    public function testSetTrailer(): void
    {
        $trailer = new Trailer();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTrailer($trailer);

        $targetRef = $this->createTargetReflection();

        $trailerPropertyRef = $targetRef->getProperty('trailer');
        $trailerPropertyRef->setAccessible(true);

        $this->assertEquals($trailer, $trailerPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetSpecialSite(): void
    {
        $specialSite = new SpecialSite(3);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);
        $specialSitePropertyRef->setValue($targetMock, $specialSite);

        $this->assertEquals($specialSite, $targetMock->getSpecialSite());
    }

    /**
     * @test
     */
    public function testSetSpecialSite(): void
    {
        $specialSite = new SpecialSite(3);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSpecialSite($specialSite);

        $targetRef = $this->createTargetReflection();

        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);

        $this->assertEquals($specialSite, $specialSitePropertyRef->getValue($targetMock));
    }
}
