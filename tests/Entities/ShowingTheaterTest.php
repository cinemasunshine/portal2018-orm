<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Schedule;
use Cinemasunshine\ORM\Entities\ShowingTheater;
use Cinemasunshine\ORM\Entities\Theater;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class ShowingTheaterTest extends TestCase
{
    /**
     * @return ShowingTheater&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(ShowingTheater::class);
    }

    /**
     * @param string[] $methods
     * @return ShowingTheater&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(ShowingTheater::class, $methods);
    }

    /**
     * @return ReflectionClass<ShowingTheater>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(ShowingTheater::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 15;

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
    public function testGetSchedule(): void
    {
        $schedule = new Schedule();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $schedulePropertyRef = $targetRef->getProperty('schedule');
        $schedulePropertyRef->setAccessible(true);
        $schedulePropertyRef->setValue($targetMock, $schedule);

        $this->assertEquals($schedule, $targetMock->getSchedule());
    }

    /**
     * @test
     */
    public function testSetSchedule(): void
    {
        $schedule = new Schedule();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSchedule($schedule);

        $targetRef = $this->createTargetReflection();

        $schedulePropertyRef = $targetRef->getProperty('schedule');
        $schedulePropertyRef->setAccessible(true);

        $this->assertEquals($schedule, $schedulePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetTheater(): void
    {
        $theater = new Theater(2);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);
        $theaterPropertyRef->setValue($targetMock, $theater);

        $this->assertEquals($theater, $targetMock->getTheater());
    }

    /**
     * @test
     */
    public function testSetTheater(): void
    {
        $theater = new Theater(2);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheater($theater);

        $targetRef = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);

        $this->assertEquals($theater, $theaterPropertyRef->getValue($targetMock));
    }
}
