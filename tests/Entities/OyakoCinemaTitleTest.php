<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\OyakoCinemaTitle;
use Cinemasunshine\ORM\Entities\Title;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

final class OyakoCinemaTitleTest extends TestCase
{
    /**
     * @return OyakoCinemaTitle&MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(OyakoCinemaTitle::class);
    }

    /**
     * @param string[] $methods
     * @return OyakoCinemaTitle&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(OyakoCinemaTitle::class, $methods);
    }

    /**
     * @return ReflectionClass<OyakoCinemaTitle>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(OyakoCinemaTitle::class);
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

        $oyakoCinemaSchedulesPropertyRef = $targetRef->getProperty('oyakoCinemaSchedules');
        $oyakoCinemaSchedulesPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $oyakoCinemaSchedulesPropertyRef->getValue($targetMock)
        );
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 19;

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
    public function testGetTitleUrl(): void
    {
        $titleUrl = 'https://example.com/';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $titleUrlPropertyRef = $targetRef->getProperty('titleUrl');
        $titleUrlPropertyRef->setAccessible(true);
        $titleUrlPropertyRef->setValue($targetMock, $titleUrl);

        $this->assertEquals($titleUrl, $targetMock->getTitleUrl());
    }

    /**
     * @test
     */
    public function testsetTitleUrl(): void
    {
        $titleUrl = 'https://example.com/';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTitleUrl($titleUrl);

        $targetRef = $this->createTargetReflection();

        $titleUrlPropertyRef = $targetRef->getProperty('titleUrl');
        $titleUrlPropertyRef->setAccessible(true);

        $this->assertEquals($titleUrl, $titleUrlPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetOyakoCinemaSchedules(): void
    {
        $oyakoCinemaSchedules = new ArrayCollection();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $oyakoCinemaSchedulesPropertyRef = $targetRef->getProperty('oyakoCinemaSchedules');
        $oyakoCinemaSchedulesPropertyRef->setAccessible(true);
        $oyakoCinemaSchedulesPropertyRef->setValue($targetMock, $oyakoCinemaSchedules);

        $this->assertEquals($oyakoCinemaSchedules, $targetMock->getOyakoCinemaSchedules());
    }
}
