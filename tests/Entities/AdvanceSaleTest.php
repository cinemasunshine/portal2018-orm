<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\AdvanceSale;
use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\Title;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * AdvanceSale test
 */
final class AdvanceSaleTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return AdvanceSale&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(AdvanceSale::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return AdvanceSale&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(AdvanceSale::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<AdvanceSale>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(AdvanceSale::class);
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

        $advanceTicketsPropertyRef = $targetRef->getProperty('advanceTickets');
        $advanceTicketsPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $advanceTicketsPropertyRef->getValue($targetMock)
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
        $id = 17;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getTheater
     *
     * @test
     * @return void
     */
    public function testGetTheater()
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
     * test setTheater
     *
     * @test
     * @return void
     */
    public function testSetTheater()
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
     * test getPublishingExpectedDate
     *
     * @test
     * @return void
     */
    public function testGetPublishingExpectedDate()
    {
        $publishingExpectedDate = new \DateTime();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publishingExpectedDatePropertyRef = $targetRef->getProperty('publishingExpectedDate');
        $publishingExpectedDatePropertyRef->setAccessible(true);
        $publishingExpectedDatePropertyRef->setValue($targetMock, $publishingExpectedDate);

        $this->assertEquals($publishingExpectedDate, $targetMock->getPublishingExpectedDate());
    }

    /**
     * test setPublishingExpectedDate
     *
     * @test
     * @return void
     */
    public function testSetPublishingExpectedDate()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $publishingExpectedDatePropertyRef = $targetRef->getProperty('publishingExpectedDate');
        $publishingExpectedDatePropertyRef->setAccessible(true);

        $targetMock->setPublishingExpectedDate(null);
        $this->assertEquals(null, $publishingExpectedDatePropertyRef->getValue($targetMock));

        $dtObject = new \DateTime();
        $targetMock->setPublishingExpectedDate($dtObject);
        $this->assertEquals($dtObject, $publishingExpectedDatePropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setPublishingExpectedDate($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
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
     * @return void
     */
    public function testSetPublishingExpectedDateInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setPublishingExpectedDate(123);
    }

    /**
     * test getPublishingExpectedDateText
     *
     * @test
     * @return void
     */
    public function testGetPublishingExpectedDateText()
    {
        $publishingExpectedDateText            = 'date_text';
        $targetMock                            = $this->createTargetPartialMock([]);
        $targetRef                             = $this->createTargetReflection();
        $publishingExpectedDateTextPropertyRef = $targetRef->getProperty('publishingExpectedDateText');
        $publishingExpectedDateTextPropertyRef->setAccessible(true);
        $publishingExpectedDateTextPropertyRef->setValue($targetMock, $publishingExpectedDateText);

        $this->assertEquals($publishingExpectedDateText, $targetMock->getPublishingExpectedDateText());
    }

    /**
     * test setPublishingExpectedDateText
     *
     * @test
     * @return void
     */
    public function testSetPublishingExpectedDateText()
    {
        $publishingExpectedDateText = 'date_text';
        $targetMock                 = $this->createTargetPartialMock([]);
        $targetMock->setPublishingExpectedDateText($publishingExpectedDateText);

        $targetRef                             = $this->createTargetReflection();
        $publishingExpectedDateTextPropertyRef = $targetRef->getProperty('publishingExpectedDateText');
        $publishingExpectedDateTextPropertyRef->setAccessible(true);

        $this->assertEquals($publishingExpectedDateText, $publishingExpectedDateTextPropertyRef->getValue($targetMock));
    }

    /**
     * test getAdvanceTickets
     *
     * @test
     * @return void
     */
    public function testGetAdvanceTickets()
    {
        $advanceTickets            = new ArrayCollection();
        $targetMock                = $this->createTargetPartialMock([]);
        $targetRef                 = $this->createTargetReflection();
        $advanceTicketsPropertyRef = $targetRef->getProperty('advanceTickets');
        $advanceTicketsPropertyRef->setAccessible(true);
        $advanceTicketsPropertyRef->setValue($targetMock, $advanceTickets);

        $this->assertEquals($advanceTickets, $targetMock->getAdvanceTickets());
    }
}
