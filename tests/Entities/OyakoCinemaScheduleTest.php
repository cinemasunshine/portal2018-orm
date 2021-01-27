<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\OyakoCinemaSchedule;
use Cinemasunshine\ORM\Entities\OyakoCinemaTitle;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

/**
 * OyakoCinemaSchedule test
 */
final class OyakoCinemaScheduleTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return OyakoCinemaSchedule&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(OyakoCinemaSchedule::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return OyakoCinemaSchedule&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(OyakoCinemaSchedule::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return ReflectionClass<OyakoCinemaSchedule>
     */
    public function createTargetReflection()
    {
        return new ReflectionClass(OyakoCinemaSchedule::class);
    }

    /**
     * test construct
     *
     * @test
     *
     * @return void
     */
    public function testConstruct()
    {
        $targetMock = $this->createTargetMock();
        $targetRef  = $this->createTargetReflection();

        /** @var ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock);

        $oyakoCinemaTheatersPropertyRef = $targetRef->getProperty('oyakoCinemaTheaters');
        $oyakoCinemaTheatersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $oyakoCinemaTheatersPropertyRef->getValue($targetMock)
        );
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
        $id = 20;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getOyakoCinemaTitle
     *
     * @test
     *
     * @return void
     */
    public function testGetOyakoCinemaTitle()
    {
        $oyakoCinemaTitle = new OyakoCinemaTitle();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $oyakoCinemaTitlePropertyRef = $targetRef->getProperty('oyakoCinemaTitle');
        $oyakoCinemaTitlePropertyRef->setAccessible(true);
        $oyakoCinemaTitlePropertyRef->setValue($targetMock, $oyakoCinemaTitle);

        $this->assertEquals($oyakoCinemaTitle, $targetMock->getOyakoCinemaTitle());
    }

    /**
     * test setOyakoCinemaTitle
     *
     * @test
     *
     * @return void
     */
    public function testSetOyakoCinemaTitle()
    {
        $oyakoCinemaTitle = new OyakoCinemaTitle();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setOyakoCinemaTitle($oyakoCinemaTitle);

        $targetRef = $this->createTargetReflection();

        $oyakoCinemaTitlePropertyRef = $targetRef->getProperty('oyakoCinemaTitle');
        $oyakoCinemaTitlePropertyRef->setAccessible(true);

        $this->assertEquals($oyakoCinemaTitle, $oyakoCinemaTitlePropertyRef->getValue($targetMock));
    }

    /**
     * test getDate
     *
     * @test
     *
     * @return void
     */
    public function testGetDate()
    {
        $date = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $datePropertyRef = $targetRef->getProperty('date');
        $datePropertyRef->setAccessible(true);
        $datePropertyRef->setValue($targetMock, $date);

        $this->assertEquals($date, $targetMock->getDate());
    }

    /**
     * test setDate
     *
     * @test
     *
     * @return void
     */
    public function testSetDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $datePropertyRef = $targetRef->getProperty('date');
        $datePropertyRef->setAccessible(true);

        $dtObject = new DateTime();
        $targetMock->setDate($dtObject);
        $this->assertEquals($dtObject, $datePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setDate($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $datePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $datePropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setDate (invalid argument)
     *
     * @test
     *
     * @return void
     */
    public function testSetDateInvalidArgument()
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setDate(null);
    }

    /**
     * test getOyakoCinemaTheaters
     *
     * @test
     *
     * @return void
     */
    public function testGetOyakoCinemaTheaters()
    {
        $oyakoCinemaTheaters = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $oyakoCinemaTheatersPropertyRef = $targetRef->getProperty('oyakoCinemaTheaters');
        $oyakoCinemaTheatersPropertyRef->setAccessible(true);
        $oyakoCinemaTheatersPropertyRef->setValue($targetMock, $oyakoCinemaTheaters);

        $this->assertEquals($oyakoCinemaTheaters, $targetMock->getOyakoCinemaTheaters());
    }
}
