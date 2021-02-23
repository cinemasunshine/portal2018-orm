<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\TheaterOpeningHour;
use DateTime;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class TheaterOpeningHourTest extends TestCase
{
    /**
     * @return TheaterOpeningHour&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(TheaterOpeningHour::class);
    }

    /**
     * @param string[] $methods
     * @return TheaterOpeningHour&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterOpeningHour::class, $methods);
    }

    /**
     * @return ReflectionClass<TheaterOpeningHour>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(TheaterOpeningHour::class);
    }

    /**
     * @test
     */
    public function testCreate(): void
    {
        $type     = 2;
        $fromDate = '2020/01/01';
        $toDate   = '2020/01/02';
        $time     = '10:00:00';
        $data     = [
            'type' => $type,
            'from_date' => $fromDate,
            'to_date' => $toDate,
            'time' => $time,
        ];

        $result = TheaterOpeningHour::create($data);
        $this->assertInstanceOf(TheaterOpeningHour::class, $result);

        $targetRef = $this->createTargetReflection();

        $typePropertyRef = $targetRef->getProperty('type');
        $typePropertyRef->setAccessible(true);
        $this->assertEquals($type, $typePropertyRef->getValue($result));

        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);
        $this->assertEquals(
            $fromDate,
            $fromDatePropertyRef->getValue($result)->format('Y/m/d')
        );

        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);
        $this->assertEquals(
            $toDate,
            $toDatePropertyRef->getValue($result)->format('Y/m/d')
        );

        $timePropertyRef = $targetRef->getProperty('time');
        $timePropertyRef->setAccessible(true);
        $this->assertEquals(
            $time,
            $timePropertyRef->getValue($result)->format('H:i:s')
        );
    }

    /**
     * @test
     */
    public function testGetType(): void
    {
        $type = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $typePropertyRef = $targetRef->getProperty('type');
        $typePropertyRef->setAccessible(true);
        $typePropertyRef->setValue($targetMock, $type);

        $this->assertEquals($type, $targetMock->getType());
    }

    /**
     * @test
     */
    public function testSetType(): void
    {
        $type = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setType($type);

        $targetRef = $this->createTargetReflection();

        $typePropertyRef = $targetRef->getProperty('type');
        $typePropertyRef->setAccessible(true);

        $this->assertEquals($type, $typePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetFromDate(): void
    {
        $fromDate = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);
        $fromDatePropertyRef->setValue($targetMock, $fromDate);

        $this->assertEquals($fromDate, $targetMock->getFromDate());
    }

    /**
     * @test
     */
    public function testSetFromDate(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setFromDate($dtObject);
        $this->assertEquals($dtObject, $fromDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setFromDate($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $fromDatePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $fromDatePropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setFromDate (invalid argument)
     *
     * @test
     */
    public function testSetFromDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setFromDate(null);
    }

    /**
     * @test
     */
    public function testGetToDate(): void
    {
        $toDate = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);
        $toDatePropertyRef->setValue($targetMock, $toDate);

        $this->assertEquals($toDate, $targetMock->getToDate());
    }

    /**
     * @test
     */
    public function testSetToDate(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);

        $targetMock->setToDate(null);
        $this->assertEquals(null, $toDatePropertyRef->getValue($targetMock));

        $dtObject = new DateTime();
        $targetMock->setToDate($dtObject);
        $this->assertEquals($dtObject, $toDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setToDate($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $toDatePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $toDatePropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setToDate (invalid argument)
     *
     * @test
     */
    public function testSetToDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setToDate(123);
    }

    /**
     * @test
     */
    public function testGetTime(): void
    {
        $time = new DateTime('10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $timePropertyRef = $targetRef->getProperty('time');
        $timePropertyRef->setAccessible(true);
        $timePropertyRef->setValue($targetMock, $time);

        $this->assertEquals($time, $targetMock->getTime());
    }

    /**
     * @test
     */
    public function testSetTime(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $timePropertyRef = $targetRef->getProperty('time');
        $timePropertyRef->setAccessible(true);

        $timeObject = new DateTime();
        $targetMock->setTime($timeObject);
        $this->assertEquals($timeObject, $timePropertyRef->getValue($targetMock));

        $timeString = '10:00:00';
        $targetMock->setTime($timeString);
        $this->assertInstanceOf(
            DateTime::class,
            $timePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $timeString,
            $timePropertyRef->getValue($targetMock)->format('H:i:s')
        );
    }

    /**
     * test setTime (invalid argument)
     *
     * @test
     */
    public function testSetTimeInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setTime(123);
    }

    /**
     * @test
     */
    public function testToArray(): void
    {
        $type     = 2;
        $fromDate = new DateTime('2020/01/01');
        $toDate   = new DateTime('2020/01/02');
        $time     = new DateTime('10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $typePropertyRef = $targetRef->getProperty('type');
        $typePropertyRef->setAccessible(true);
        $typePropertyRef->setValue($targetMock, $type);

        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);
        $fromDatePropertyRef->setValue($targetMock, $fromDate);

        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);
        $toDatePropertyRef->setValue($targetMock, $toDate);

        $timePropertyRef = $targetRef->getProperty('time');
        $timePropertyRef->setAccessible(true);
        $timePropertyRef->setValue($targetMock, $time);

        $result = $targetMock->toArray();
        $this->assertIsArray($result);
        $this->assertEquals($type, $result['type']);
        $this->assertEquals($fromDate->format('Y/m/d'), $result['from_date']);
        $this->assertEquals($toDate->format('Y/m/d'), $result['to_date']);
        $this->assertEquals($time->format('H:i:s'), $result['time']);

        $toDatePropertyRef->setValue($targetMock, null);
        $result2 = $targetMock->toArray();
        $this->assertNull($result2['to_date']);
    }
}
