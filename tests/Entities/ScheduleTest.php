<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Schedule;
use Cinemasunshine\ORM\Entities\Title;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

final class ScheduleTest extends TestCase
{
    /**
     * @return Schedule&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Schedule::class);
    }

    /**
     * @param string[] $methods
     * @return Schedule&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Schedule::class, $methods);
    }

    /**
     * @return ReflectionClass<Schedule>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(Schedule::class);
    }

    /**
     * @test
     */
    public function testConstruct(): void
    {
        $targetMock = $this->createTargetMock();
        $targetRef  = $this->createTargetReflection();

        /** @var ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock);

        $showingFormatsPropertyRef = $targetRef->getProperty('showingFormats');
        $showingFormatsPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $showingFormatsPropertyRef->getValue($targetMock)
        );

        $showingTheatersPropertyRef = $targetRef->getProperty('showingTheaters');
        $showingTheatersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $showingTheatersPropertyRef->getValue($targetMock)
        );
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 8;

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
    public function testGetTitle(): void
    {
        $title = new Title();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $titlePropertyRef = $targetRef->getProperty('title');
        $titlePropertyRef->setAccessible(true);
        $titlePropertyRef->setValue($targetMock, $title);

        $this->assertEquals($title, $targetMock->getTitle());
    }

    /**
     * @test
     */
    public function testSetTitle(): void
    {
        $title = new Title();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTitle($title);

        $targetRef = $this->createTargetReflection();

        $titlePropertyRef = $targetRef->getProperty('title');
        $titlePropertyRef->setAccessible(true);

        $this->assertEquals($title, $titlePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetStartDate(): void
    {
        $startDate = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $startDatePropertyRef = $targetRef->getProperty('startDate');
        $startDatePropertyRef->setAccessible(true);
        $startDatePropertyRef->setValue($targetMock, $startDate);

        $this->assertEquals($startDate, $targetMock->getStartDate());
    }

    /**
     * @test
     */
    public function testSetStartDate(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $startDatePropertyRef = $targetRef->getProperty('startDate');
        $startDatePropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setStartDate($dtObject);
        $this->assertEquals($dtObject, $startDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setStartDate($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $startDatePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $startDatePropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setStartDate (invalid argument)
     *
     * @test
     */
    public function testSetStartDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setStartDate(null);
    }

    /**
     * @test
     */
    public function testGetEndDate(): void
    {
        $endDate = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $endDatePropertyRef = $targetRef->getProperty('endDate');
        $endDatePropertyRef->setAccessible(true);
        $endDatePropertyRef->setValue($targetMock, $endDate);

        $this->assertEquals($endDate, $targetMock->getEndDate());
    }

    /**
     * @test
     */
    public function testSetEndDate(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $endDatePropertyRef = $targetRef->getProperty('endDate');
        $endDatePropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setEndDate($dtObject);
        $this->assertEquals($dtObject, $endDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setEndDate($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $endDatePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $endDatePropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setEndDate (invalid argument)
     *
     * @test
     */
    public function testSetEndDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setEndDate(null);
    }

    /**
     * @test
     */
    public function testGetPublicStartDt(): void
    {
        $publicStartDt = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publicStartDtPropertyRef = $targetRef->getProperty('publicStartDt');
        $publicStartDtPropertyRef->setAccessible(true);
        $publicStartDtPropertyRef->setValue($targetMock, $publicStartDt);

        $this->assertEquals($publicStartDt, $targetMock->getPublicStartDt());
    }

    /**
     * @test
     */
    public function testSetPublicStartDt(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publicStartDtPropertyRef = $targetRef->getProperty('publicStartDt');
        $publicStartDtPropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setPublicStartDt($dtObject);
        $this->assertEquals($dtObject, $publicStartDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setPublicStartDt($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $publicStartDtPropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $publicStartDtPropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setPublicStartDt (invalid argument)
     *
     * @test
     */
    public function testSetPublicStartDtInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublicStartDt(null);
    }

    /**
     * @test
     */
    public function testGetPublicEndDt(): void
    {
        $publicEndDt = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publicEndDtPropertyRef = $targetRef->getProperty('publicEndDt');
        $publicEndDtPropertyRef->setAccessible(true);
        $publicEndDtPropertyRef->setValue($targetMock, $publicEndDt);

        $this->assertEquals($publicEndDt, $targetMock->getPublicEndDt());
    }

    /**
     * @test
     */
    public function testSetPublicEndDt(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publicEndDtPropertyRef = $targetRef->getProperty('publicEndDt');
        $publicEndDtPropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setPublicEndDt($dtObject);
        $this->assertEquals($dtObject, $publicEndDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setPublicEndDt($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $publicEndDtPropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $publicEndDtPropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setPublicEndDt (invalid argument)
     *
     * @test
     */
    public function testSetPublicEndDtInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublicEndDt(null);
    }

    /**
     * @test
     */
    public function testGetRemark(): void
    {
        $remark = 'schedule_remark';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $remarkPropertyRef = $targetRef->getProperty('remark');
        $remarkPropertyRef->setAccessible(true);
        $remarkPropertyRef->setValue($targetMock, $remark);

        $this->assertEquals($remark, $targetMock->getRemark());
    }

    /**
     * @test
     */
    public function testSetRemark(): void
    {
        $remark = 'schedule_remark';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setRemark($remark);

        $targetRef = $this->createTargetReflection();

        $remarkPropertyRef = $targetRef->getProperty('remark');
        $remarkPropertyRef->setAccessible(true);

        $this->assertEquals($remark, $remarkPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetShowingFormats(): void
    {
        $showingFormats = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $showingFormatsPropertyRef = $targetRef->getProperty('showingFormats');
        $showingFormatsPropertyRef->setAccessible(true);
        $showingFormatsPropertyRef->setValue($targetMock, $showingFormats);

        $this->assertEquals($showingFormats, $targetMock->getShowingFormats());
    }

    /**
     * @test
     */
    public function testSetShowingFormats(): void
    {
        $showingFormats = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setShowingFormats($showingFormats);

        $targetRef = $this->createTargetReflection();

        $showingFormatsPropertyRef = $targetRef->getProperty('showingFormats');
        $showingFormatsPropertyRef->setAccessible(true);

        $this->assertEquals($showingFormats, $showingFormatsPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetShowingTheaters(): void
    {
        $showingTheaters = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $showingTheatersPropertyRef = $targetRef->getProperty('showingTheaters');
        $showingTheatersPropertyRef->setAccessible(true);
        $showingTheatersPropertyRef->setValue($targetMock, $showingTheaters);

        $this->assertEquals($showingTheaters, $targetMock->getShowingTheaters());
    }

    /**
     * @test
     */
    public function testSetShowingTheaters(): void
    {
        $showingTheaters = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setShowingTheaters($showingTheaters);

        $targetRef = $this->createTargetReflection();

        $showingTheatersPropertyRef = $targetRef->getProperty('showingTheaters');
        $showingTheatersPropertyRef->setAccessible(true);

        $this->assertEquals($showingTheaters, $showingTheatersPropertyRef->getValue($targetMock));
    }
}
