<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\Schedule;
use Cinemasunshine\ORM\Entity\ShowingTheater;
use Cinemasunshine\ORM\Entity\Theater;
use PHPUnit\Framework\TestCase;

/**
 * ShowingTheater test
 */
final class ShowingTheaterTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return ShowingTheater&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(ShowingTheater::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return ShowingTheater&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(ShowingTheater::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<ShowingTheater>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(ShowingTheater::class);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 15;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getSchedule
     *
     * @test
     * @return void
     */
    public function testGetSchedule()
    {
        $schedule = new Schedule();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $schedulePropertyRef = $targetRef->getProperty('schedule');
        $schedulePropertyRef->setAccessible(true);
        $schedulePropertyRef->setValue($targetMock, $schedule);

        $this->assertEquals($schedule, $targetMock->getSchedule());
    }

    /**
     * test setSchedule
     *
     * @test
     * @return void
     */
    public function testSetSchedule()
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
     * test getTheater
     *
     * @test
     * @return void
     */
    public function testGetTheater()
    {
        $theater = new Theater(2);
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);
        $theaterPropertyRef->setValue($targetMock, $theater);

        $this->assertEquals($theater, $targetMock->getTheater());
    }

    /**
     * test setTheater
     *
     * @test
     * @return void
     */
    public function testSetTheater()
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
