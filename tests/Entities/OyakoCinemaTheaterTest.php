<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\OyakoCinemaSchedule;
use Cinemasunshine\ORM\Entities\OyakoCinemaTheater;
use Cinemasunshine\ORM\Entities\Theater;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * OyakoCinemaTheater test
 */
final class OyakoCinemaTheaterTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return OyakoCinemaTheater&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(OyakoCinemaTheater::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return ReflectionClass<OyakoCinemaTheater>
     */
    public function createTargetReflection()
    {
        return new ReflectionClass(OyakoCinemaTheater::class);
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
        $id = 21;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getOyakoCinemaSchedule
     *
     * @test
     *
     * @return void
     */
    public function testGetOyakoCinemaSchedule()
    {
        $oyakoCinemaSchedule = new OyakoCinemaSchedule();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $oyakoCinemaSchedulePropertyRef = $targetRef->getProperty('oyakoCinemaSchedule');
        $oyakoCinemaSchedulePropertyRef->setAccessible(true);
        $oyakoCinemaSchedulePropertyRef->setValue($targetMock, $oyakoCinemaSchedule);

        $this->assertEquals($oyakoCinemaSchedule, $targetMock->getOyakoCinemaSchedule());
    }

    /**
     * test setOyakoCinemaSchedule
     *
     * @test
     *
     * @return void
     */
    public function testSetOyakoCinemaSchedule()
    {
        $oyakoCinemaSchedule = new OyakoCinemaSchedule();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setOyakoCinemaSchedule($oyakoCinemaSchedule);

        $targetRef = $this->createTargetReflection();

        $oyakoCinemaSchedulePropertyRef = $targetRef->getProperty('oyakoCinemaSchedule');
        $oyakoCinemaSchedulePropertyRef->setAccessible(true);

        $this->assertEquals($oyakoCinemaSchedule, $oyakoCinemaSchedulePropertyRef->getValue($targetMock));
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
        $theater = new Theater(6);

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
        $theater = new Theater(6);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheater($theater);

        $targetRef = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);

        $this->assertEquals($theater, $theaterPropertyRef->getValue($targetMock));
    }
}
