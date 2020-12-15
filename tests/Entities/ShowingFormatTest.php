<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Schedule;
use Cinemasunshine\ORM\Entities\ShowingFormat;
use PHPUnit\Framework\TestCase;

/**
 * ShowingFormat test
 */
final class ShowingFormatTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return ShowingFormat&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(ShowingFormat::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return ShowingFormat&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(ShowingFormat::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<ShowingFormat>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(ShowingFormat::class);
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
     * test getSchedule
     *
     * @test
     *
     * @return void
     */
    public function testGetSchedule()
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
     * test setSchedule
     *
     * @test
     *
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
     * test getSystem
     *
     * @test
     *
     * @return void
     */
    public function testGetSystem()
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
     * test setSystem
     *
     * @test
     *
     * @return void
     */
    public function testSetSystem()
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
     * test getSound
     *
     * @test
     *
     * @return void
     */
    public function testGetSound()
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
     * test setSound
     *
     * @test
     *
     * @return void
     */
    public function testSetSound()
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
     * test getVoice
     *
     * @test
     *
     * @return void
     */
    public function testGetVoice()
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
     * test setVoice
     *
     * @test
     *
     * @return void
     */
    public function testSetVoice()
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
