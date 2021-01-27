<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\SpecialSite;
use Cinemasunshine\ORM\Entities\SpecialSiteTrailer;
use Cinemasunshine\ORM\Entities\Trailer;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * SpecialSiteTrailer test
 */
final class SpecialSiteTrailerTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return SpecialSiteTrailer&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(SpecialSiteTrailer::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return SpecialSiteTrailer&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SpecialSiteTrailer::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return ReflectionClass<SpecialSiteTrailer>
     */
    public function createTargetReflection()
    {
        return new ReflectionClass(SpecialSiteTrailer::class);
    }

    /**
     * test getId
     *
     * @test
     *
     * @return void
     */
    public function testGetId()
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
     * test getTrailer
     *
     * @test
     *
     * @return void
     */
    public function testGetTrailer()
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
     * test setTrailer
     *
     * @test
     *
     * @return void
     */
    public function testSetTrailer()
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
     * test getSpecialSite
     *
     * @test
     *
     * @return void
     */
    public function testGetSpecialSite()
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
     * test setSpecialSite
     *
     * @test
     *
     * @return void
     */
    public function testSetSpecialSite()
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
