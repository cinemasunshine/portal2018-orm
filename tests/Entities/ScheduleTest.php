<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Schedule;
use Cinemasunshine\ORM\Entities\Title;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Schedule test
 */
final class ScheduleTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return Schedule&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Schedule::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return Schedule&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Schedule::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<Schedule>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(Schedule::class);
    }

    /**
     * test construct
     *
     * @test
     * @return void
     */
    public function testConstruct()
    {
        $targetMock = $this->createTargetMock();
        $targetRef  = $this->createTargetReflection();

        /** @var \ReflectionMethod $constructorRef */
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
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
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
     * test getTitle
     *
     * @test
     * @return void
     */
    public function testGetTitle()
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
     * test setTitle
     *
     * @test
     * @return void
     */
    public function testSetTitle()
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
     * test getStartDate
     *
     * @test
     * @return void
     */
    public function testGetStartDate()
    {
        $startDate = new \DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $startDatePropertyRef = $targetRef->getProperty('startDate');
        $startDatePropertyRef->setAccessible(true);
        $startDatePropertyRef->setValue($targetMock, $startDate);

        $this->assertEquals($startDate, $targetMock->getStartDate());
    }

    /**
     * test setStartDate
     *
     * @test
     * @return void
     */
    public function testSetStartDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $startDatePropertyRef = $targetRef->getProperty('startDate');
        $startDatePropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setStartDate($dtObject);
        $this->assertEquals($dtObject, $startDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setStartDate($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetStartDateInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setStartDate(null);
    }

    /**
     * test getEndDate
     *
     * @test
     * @return void
     */
    public function testGetEndDate()
    {
        $endDate = new \DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $endDatePropertyRef = $targetRef->getProperty('endDate');
        $endDatePropertyRef->setAccessible(true);
        $endDatePropertyRef->setValue($targetMock, $endDate);

        $this->assertEquals($endDate, $targetMock->getEndDate());
    }

    /**
     * test setEndDate
     *
     * @test
     * @return void
     */
    public function testSetEndDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $endDatePropertyRef = $targetRef->getProperty('endDate');
        $endDatePropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setEndDate($dtObject);
        $this->assertEquals($dtObject, $endDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setEndDate($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetEndDateInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setEndDate(null);
    }

    /**
     * test getPublicStartDt
     *
     * @test
     * @return void
     */
    public function testGetPublicStartDt()
    {
        $publicStartDt = new \DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publicStartDtPropertyRef = $targetRef->getProperty('publicStartDt');
        $publicStartDtPropertyRef->setAccessible(true);
        $publicStartDtPropertyRef->setValue($targetMock, $publicStartDt);

        $this->assertEquals($publicStartDt, $targetMock->getPublicStartDt());
    }

    /**
     * test setPublicStartDt
     *
     * @test
     * @return void
     */
    public function testSetPublicStartDt()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publicStartDtPropertyRef = $targetRef->getProperty('publicStartDt');
        $publicStartDtPropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setPublicStartDt($dtObject);
        $this->assertEquals($dtObject, $publicStartDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setPublicStartDt($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetPublicStartDtInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublicStartDt(null);
    }

    /**
     * test getPublicEndDt
     *
     * @test
     * @return void
     */
    public function testGetPublicEndDt()
    {
        $publicEndDt = new \DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publicEndDtPropertyRef = $targetRef->getProperty('publicEndDt');
        $publicEndDtPropertyRef->setAccessible(true);
        $publicEndDtPropertyRef->setValue($targetMock, $publicEndDt);

        $this->assertEquals($publicEndDt, $targetMock->getPublicEndDt());
    }

    /**
     * test setPublicEndDt
     *
     * @test
     * @return void
     */
    public function testSetPublicEndDt()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publicEndDtPropertyRef = $targetRef->getProperty('publicEndDt');
        $publicEndDtPropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setPublicEndDt($dtObject);
        $this->assertEquals($dtObject, $publicEndDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setPublicEndDt($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetPublicEndDtInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublicEndDt(null);
    }

    /**
     * test getRemark
     *
     * @test
     * @return void
     */
    public function testGetRemark()
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
     * test setRemark
     *
     * @test
     * @return void
     */
    public function testSetRemark()
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
     * test getShowingFormats
     *
     * @test
     * @return void
     */
    public function testGetShowingFormats()
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
     * test setShowingFormats
     *
     * @test
     * @return void
     */
    public function testSetShowingFormats()
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
     * test getShowingTheaters
     *
     * @test
     * @return void
     */
    public function testGetShowingTheaters()
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
     * test setShowingTheaters
     *
     * @test
     * @return void
     */
    public function testSetShowingTheaters()
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
