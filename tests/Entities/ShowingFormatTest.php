<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Schedule;
use Cinemasunshine\ORM\Entities\ShowingFormat;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class ShowingFormatTest extends TestCase
{
    /**
     * @return ShowingFormat&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(ShowingFormat::class);
    }

    /**
     * @param string[] $methods
     * @return ShowingFormat&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(ShowingFormat::class, $methods);
    }

    /**
     * @return ReflectionClass<ShowingFormat>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(ShowingFormat::class);
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
    public function testGetSystem(): void
    {
        $system = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $systemPropertyRef = $targetRef->getProperty('system');
        $systemPropertyRef->setAccessible(true);
        $systemPropertyRef->setValue($targetMock, $system);

        $this->assertEquals($system, $targetMock->getSystem());
    }

    /**
     * @test
     */
    public function testSetSystem(): void
    {
        $system = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSystem($system);

        $targetRef = $this->createTargetReflection();

        $systemPropertyRef = $targetRef->getProperty('system');
        $systemPropertyRef->setAccessible(true);

        $this->assertEquals($system, $systemPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetSound(): void
    {
        $sound = 3;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $soundPropertyRef = $targetRef->getProperty('sound');
        $soundPropertyRef->setAccessible(true);
        $soundPropertyRef->setValue($targetMock, $sound);

        $this->assertEquals($sound, $targetMock->getSound());
    }

    /**
     * @test
     */
    public function testSetSound(): void
    {
        $sound = 3;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSound($sound);

        $targetRef = $this->createTargetReflection();

        $soundPropertyRef = $targetRef->getProperty('sound');
        $soundPropertyRef->setAccessible(true);

        $this->assertEquals($sound, $soundPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetVoice(): void
    {
        $voice = 4;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $voicePropertyRef = $targetRef->getProperty('voice');
        $voicePropertyRef->setAccessible(true);
        $voicePropertyRef->setValue($targetMock, $voice);

        $this->assertEquals($voice, $targetMock->getVoice());
    }

    /**
     * @test
     */
    public function testSetVoice(): void
    {
        $voice = 4;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setVoice($voice);

        $targetRef = $this->createTargetReflection();

        $voicePropertyRef = $targetRef->getProperty('voice');
        $voicePropertyRef->setAccessible(true);

        $this->assertEquals($voice, $voicePropertyRef->getValue($targetMock));
    }
}
