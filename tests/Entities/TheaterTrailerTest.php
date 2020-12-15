<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\TheaterTrailer;
use Cinemasunshine\ORM\Entities\Trailer;
use PHPUnit\Framework\TestCase;

/**
 * TheaterTrailer test
 */
final class TheaterTrailerTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return TheaterTrailer&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(TheaterTrailer::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return TheaterTrailer&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterTrailer::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<TheaterTrailer>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(TheaterTrailer::class);
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
     * test getTheater
     *
     * @test
     *
     * @return void
     */
    public function testGetTheater()
    {
        $theater = new Theater(5);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);
        $theaterPropertyRef->setValue($targetMock, $theater);

        $this->assertEquals($theater, $targetMock->getTheater());
    }

    /**
     * test setTheater
     *
     * @test
     *
     * @return void
     */
    public function testSetTheater()
    {
        $theater = new Theater(5);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheater($theater);

        $targetRef = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);

        $this->assertEquals($theater, $theaterPropertyRef->getValue($targetMock));
    }
}
