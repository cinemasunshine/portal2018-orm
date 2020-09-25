<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\TheaterOpeningHour;
use PHPUnit\Framework\TestCase;

/**
 * TheaterOpeningHour test
 */
final class TheaterOpeningHourTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return TheaterOpeningHour&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(TheaterOpeningHour::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return TheaterOpeningHour&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterOpeningHour::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<TheaterOpeningHour>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(TheaterOpeningHour::class);
    }

    /**
     * test create
     *
     * @test
     * @return void
     */
    public function testCreate()
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
     * test getType
     *
     * @test
     * @return void
     */
    public function testGetType()
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
     * test setType
     *
     * @test
     * @return void
     */
    public function testSetType()
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
     * test getFromDate
     *
     * @test
     * @return void
     */
    public function testGetFromDate()
    {
        $fromDate = new \DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);
        $fromDatePropertyRef->setValue($targetMock, $fromDate);

        $this->assertEquals($fromDate, $targetMock->getFromDate());
    }

    /**
     * test setFromDate
     *
     * @test
     * @return void
     */
    public function testSetFromDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $fromDatePropertyRef = $targetRef->getProperty('fromDate');
        $fromDatePropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setFromDate($dtObject);
        $this->assertEquals($dtObject, $fromDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setFromDate($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetFromDateInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setFromDate(null);
    }

    /**
     * test getToDate
     *
     * @test
     * @return void
     */
    public function testGetToDate()
    {
        $toDate = new \DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);
        $toDatePropertyRef->setValue($targetMock, $toDate);

        $this->assertEquals($toDate, $targetMock->getToDate());
    }

    /**
     * test setToDate
     *
     * @test
     * @return void
     */
    public function testSetToDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $toDatePropertyRef = $targetRef->getProperty('toDate');
        $toDatePropertyRef->setAccessible(true);

        $targetMock->setToDate(null);
        $this->assertEquals(null, $toDatePropertyRef->getValue($targetMock));

        $dtObject = new \DateTime();
        $targetMock->setToDate($dtObject);
        $this->assertEquals($dtObject, $toDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setToDate($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetToDateInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setToDate(123);
    }

    /**
     * test getTime
     *
     * @test
     * @return void
     */
    public function testGetTime()
    {
        $time = new \DateTime('10:00:00');

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $timePropertyRef = $targetRef->getProperty('time');
        $timePropertyRef->setAccessible(true);
        $timePropertyRef->setValue($targetMock, $time);

        $this->assertEquals($time, $targetMock->getTime());
    }

    /**
     * test setTime
     *
     * @test
     * @return void
     */
    public function testSetTime()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $timePropertyRef = $targetRef->getProperty('time');
        $timePropertyRef->setAccessible(true);

        $timeObject = new \DateTime();
        $targetMock->setTime($timeObject);
        $this->assertEquals($timeObject, $timePropertyRef->getValue($targetMock));

        $timeString = '10:00:00';
        $targetMock->setTime($timeString);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetTimeInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setTime(123);
    }

    /**
     * test toArray
     *
     * @test
     * @return void
     */
    public function testToArray()
    {
        $type     = 2;
        $fromDate = new \DateTime('2020/01/01');
        $toDate   = new \DateTime('2020/01/02');
        $time     = new \DateTime('10:00:00');

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
