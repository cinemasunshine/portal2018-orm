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

final class OyakoCinemaScheduleTest extends TestCase
{
    /**
     * @return OyakoCinemaSchedule&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(OyakoCinemaSchedule::class);
    }

    /**
     * @param string[] $methods
     * @return OyakoCinemaSchedule&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(OyakoCinemaSchedule::class, $methods);
    }

    /**
     * @return ReflectionClass<OyakoCinemaSchedule>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(OyakoCinemaSchedule::class);
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

        $oyakoCinemaTheatersPropertyRef = $targetRef->getProperty('oyakoCinemaTheaters');
        $oyakoCinemaTheatersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $oyakoCinemaTheatersPropertyRef->getValue($targetMock)
        );
    }

    /**
     * @test
     */
    public function testGetId(): void
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
     * @test
     */
    public function testGetOyakoCinemaTitle(): void
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
     * @test
     */
    public function testSetOyakoCinemaTitle(): void
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
     * @test
     */
    public function testGetDate(): void
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
     * @test
     */
    public function testSetDate(): void
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
     */
    public function testSetDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setDate(null);
    }

    /**
     * @test
     */
    public function testGetOyakoCinemaTheaters(): void
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
