<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\OyakoCinemaSchedule;
use Cinemasunshine\ORM\Entity\OyakoCinemaTitle;
use PHPUnit\Framework\TestCase;

/**
 * OyakoCinemaSchedule test
 */
final class OyakoCinemaScheduleTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return OyakoCinemaSchedule&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(OyakoCinemaSchedule::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<OyakoCinemaSchedule>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(OyakoCinemaSchedule::class);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 20;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getOyakoCinemaTitle
     *
     * @test
     * @return void
     */
    public function testGetOyakoCinemaTitle()
    {
        $oyakoCinemaTitle = new OyakoCinemaTitle();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $oyakoCinemaTitlePropertyRef = $targetRef->getProperty('oyakoCinemaTitle');
        $oyakoCinemaTitlePropertyRef->setAccessible(true);
        $oyakoCinemaTitlePropertyRef->setValue($targetMock, $oyakoCinemaTitle);

        $this->assertEquals($oyakoCinemaTitle, $targetMock->getOyakoCinemaTitle());
    }

    /**
     * test setOyakoCinemaTitle
     *
     * @test
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
     * @return void
     */
    public function testGetDate()
    {
        $date = new \DateTime();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $datePropertyRef = $targetRef->getProperty('date');
        $datePropertyRef->setAccessible(true);
        $datePropertyRef->setValue($targetMock, $date);

        $this->assertEquals($date, $targetMock->getDate());
    }

    /**
     * test setDate
     *
     * @test
     * @return void
     */
    public function testSetDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $datePropertyRef = $targetRef->getProperty('date');
        $datePropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setDate($dtObject);
        $this->assertEquals($dtObject, $datePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setDate($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetDateInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setDate(null);
    }
}