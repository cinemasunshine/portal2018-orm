<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\OyakoCinemaTitle;
use Cinemasunshine\ORM\Entity\Title;
use PHPUnit\Framework\TestCase;

/**
 * OyakoCinemaTitle test
 */
final class OyakoCinemaTitleTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return OyakoCinemaTitle&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(OyakoCinemaTitle::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<OyakoCinemaTitle>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(OyakoCinemaTitle::class);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 19;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
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
        $targetRef = $this->createTargetReflection();
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
     * test getTitleUrl
     *
     * @test
     * @return void
     */
    public function testGetTitleUrl()
    {
        $titleUrl = 'https://example.com/';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $titleUrlPropertyRef = $targetRef->getProperty('titleUrl');
        $titleUrlPropertyRef->setAccessible(true);
        $titleUrlPropertyRef->setValue($targetMock, $titleUrl);

        $this->assertEquals($titleUrl, $targetMock->getTitleUrl());
    }

    /**
     * test setTitleUrl
     *
     * @test
     * @return void
     */
    public function testsetTitleUrl()
    {
        $titleUrl = 'https://example.com/';
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTitleUrl($titleUrl);

        $targetRef = $this->createTargetReflection();
        $titleUrlPropertyRef = $targetRef->getProperty('titleUrl');
        $titleUrlPropertyRef->setAccessible(true);

        $this->assertEquals($titleUrl, $titleUrlPropertyRef->getValue($targetMock));
    }
}