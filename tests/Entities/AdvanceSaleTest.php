<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\AdvanceSale;
use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\Title;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

final class AdvanceSaleTest extends TestCase
{
    /**
     * @return AdvanceSale&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(AdvanceSale::class);
    }

    /**
     * @param string[] $methods
     * @return AdvanceSale&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(AdvanceSale::class, $methods);
    }

    /**
     * @return ReflectionClass<AdvanceSale>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(AdvanceSale::class);
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

        $advanceTicketsPropertyRef = $targetRef->getProperty('advanceTickets');
        $advanceTicketsPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $advanceTicketsPropertyRef->getValue($targetMock)
        );
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 17;

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
    public function testGetTheater(): void
    {
        $theater = new Theater(6);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);
        $theaterPropertyRef->setValue($targetMock, $theater);

        $this->assertEquals($theater, $targetMock->getTheater());
    }

    /**
     * @test
     */
    public function testSetTheater(): void
    {
        $theater = new Theater(6);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheater($theater);

        $targetRef = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);

        $this->assertEquals($theater, $theaterPropertyRef->getValue($targetMock));
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
    public function testGetPublishingExpectedDate(): void
    {
        $publishingExpectedDate = new DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publishingExpectedDatePropertyRef = $targetRef->getProperty('publishingExpectedDate');
        $publishingExpectedDatePropertyRef->setAccessible(true);
        $publishingExpectedDatePropertyRef->setValue($targetMock, $publishingExpectedDate);

        $this->assertEquals($publishingExpectedDate, $targetMock->getPublishingExpectedDate());
    }

    /**
     * @test
     */
    public function testSetPublishingExpectedDate(): void
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publishingExpectedDatePropertyRef = $targetRef->getProperty('publishingExpectedDate');
        $publishingExpectedDatePropertyRef->setAccessible(true);

        $targetMock->setPublishingExpectedDate(null);
        $this->assertEquals(null, $publishingExpectedDatePropertyRef->getValue($targetMock));

        $dtObject = new DateTime();
        $targetMock->setPublishingExpectedDate($dtObject);
        $this->assertEquals($dtObject, $publishingExpectedDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setPublishingExpectedDate($dtString);
        $this->assertInstanceOf(
            DateTime::class,
            $publishingExpectedDatePropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $publishingExpectedDatePropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setPublishingExpectedDate (invalid argument)
     *
     * @test
     */
    public function testSetPublishingExpectedDateInvalidArgument(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublishingExpectedDate(123);
    }

    /**
     * @test
     */
    public function testGetPublishingExpectedDateText(): void
    {
        $publishingExpectedDateText = 'date_text';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publishingExpectedDateTextPropertyRef = $targetRef->getProperty('publishingExpectedDateText');
        $publishingExpectedDateTextPropertyRef->setAccessible(true);
        $publishingExpectedDateTextPropertyRef->setValue($targetMock, $publishingExpectedDateText);

        $this->assertEquals($publishingExpectedDateText, $targetMock->getPublishingExpectedDateText());
    }

    /**
     * @test
     */
    public function testSetPublishingExpectedDateText(): void
    {
        $publishingExpectedDateText = 'date_text';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setPublishingExpectedDateText($publishingExpectedDateText);

        $targetRef = $this->createTargetReflection();

        $publishingExpectedDateTextPropertyRef = $targetRef->getProperty('publishingExpectedDateText');
        $publishingExpectedDateTextPropertyRef->setAccessible(true);

        $this->assertEquals($publishingExpectedDateText, $publishingExpectedDateTextPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetAdvanceTickets(): void
    {
        $advanceTickets = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $advanceTicketsPropertyRef = $targetRef->getProperty('advanceTickets');
        $advanceTicketsPropertyRef->setAccessible(true);
        $advanceTicketsPropertyRef->setValue($targetMock, $advanceTickets);

        $this->assertEquals($advanceTickets, $targetMock->getAdvanceTickets());
    }
}
