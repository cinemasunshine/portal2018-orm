<?php

declare(strict_types=1);

namespace Tests\Entity;

use Cinemasunshine\ORM\Entity\Page;
use PHPUnit\Framework\TestCase;

/**
 * Page test
 */
final class PageTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return Page&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(Page::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return Page&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(Page::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<Page>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(Page::class);
    }

    /**
     * test construct
     *
     * @test
     * @return void
     */
    public function testConstruct()
    {
        $id = 11;
        $targetMock = $this->createTargetMock();
        $targetRef = $this->createTargetReflection();

        /** @var \ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock, $id);

        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $this->assertEquals($id, $idPropertyRef->getValue($targetMock));
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 12;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getName
     *
     * @test
     * @return void
     */
    public function testGetName()
    {
        $name = 'page_name';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($targetMock, $name);

        $this->assertEquals($name, $targetMock->getName());
    }

    /**
     * test setName
     *
     * @test
     * @return void
     */
    public function testSetName()
    {
        $name = 'page_name';
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setName($name);

        $targetRef = $this->createTargetReflection();
        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $this->assertEquals($name, $namePropertyRef->getValue($targetMock));
    }

    /**
     * test getNameJa
     *
     * @test
     * @return void
     */
    public function testGatNameJa()
    {
        $nameJa = 'page_name_ja';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $nameJaPropertyRef = $targetRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);
        $nameJaPropertyRef->setValue($targetMock, $nameJa);

        $this->assertEquals($nameJa, $targetMock->getNameJa());
    }

    /**
     * test setNameJa
     *
     * @test
     * @return void
     */
    public function testSetNameJa()
    {
        $nameJa = 'page_name_ja';
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setNameJa($nameJa);

        $targetRef = $this->createTargetReflection();
        $nameJaPropertyRef = $targetRef->getProperty('nameJa');
        $nameJaPropertyRef->setAccessible(true);

        $this->assertEquals($nameJa, $nameJaPropertyRef->getValue($targetMock));
    }
}
