<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\File;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class FileTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return File&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(File::class, $methods);
    }

    /**
     * @return ReflectionClass<File>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(File::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 12;

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
    public function testGetName(): void
    {
        $name = 'file_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);
        $namePropertyRef->setValue($targetMock, $name);

        $this->assertEquals($name, $targetMock->getName());
    }

    /**
     * @test
     */
    public function testSetName(): void
    {
        $name = 'file_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setName($name);

        $targetRef = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $this->assertEquals($name, $namePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetOriginalName(): void
    {
        $originalName = 'file_original_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $originalNamePropertyRef = $targetRef->getProperty('originalName');
        $originalNamePropertyRef->setAccessible(true);
        $originalNamePropertyRef->setValue($targetMock, $originalName);

        $this->assertEquals($originalName, $targetMock->getOriginalName());
    }

    /**
     * @test
     */
    public function testSetOriginalName(): void
    {
        $originalName = 'file_original_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setOriginalName($originalName);

        $targetRef = $this->createTargetReflection();

        $originalNamePropertyRef = $targetRef->getProperty('originalName');
        $originalNamePropertyRef->setAccessible(true);

        $this->assertEquals($originalName, $originalNamePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetMimeType(): void
    {
        $mimeType = 'text/plain';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $mimeTypePropertyRef = $targetRef->getProperty('mimeType');
        $mimeTypePropertyRef->setAccessible(true);
        $mimeTypePropertyRef->setValue($targetMock, $mimeType);

        $this->assertEquals($mimeType, $targetMock->getMimeType());
    }

    /**
     * @test
     */
    public function testSetMimeType(): void
    {
        $mimeType = 'text/plain';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setMimeType($mimeType);

        $targetRef = $this->createTargetReflection();

        $mimeTypePropertyRef = $targetRef->getProperty('mimeType');
        $mimeTypePropertyRef->setAccessible(true);

        $this->assertEquals($mimeType, $mimeTypePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetSize(): void
    {
        $size = 1234;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $sizePropertyRef = $targetRef->getProperty('size');
        $sizePropertyRef->setAccessible(true);
        $sizePropertyRef->setValue($targetMock, $size);

        $this->assertEquals($size, $targetMock->getSize());
    }

    /**
     * @test
     */
    public function testSetSize(): void
    {
        $size = 1234;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSize($size);

        $targetRef = $this->createTargetReflection();

        $sizePropertyRef = $targetRef->getProperty('size');
        $sizePropertyRef->setAccessible(true);

        $this->assertEquals($size, $sizePropertyRef->getValue($targetMock));
    }
}
