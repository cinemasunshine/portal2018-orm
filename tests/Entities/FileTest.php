<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\File;
use PHPUnit\Framework\TestCase;

/**
 * File test
 */
final class FileTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return File&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(File::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<File>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(File::class);
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
        $targetRef  = $this->createTargetReflection();

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
        $name = 'file_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

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
        $name = 'file_name';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setName($name);

        $targetRef = $this->createTargetReflection();

        $namePropertyRef = $targetRef->getProperty('name');
        $namePropertyRef->setAccessible(true);

        $this->assertEquals($name, $namePropertyRef->getValue($targetMock));
    }

    /**
     * test getOriginalName
     *
     * @test
     * @return void
     */
    public function testGetOriginalName()
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
     * test setOriginalName
     *
     * @test
     * @return void
     */
    public function testSetOriginalName()
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
     * test getMimeType
     *
     * @test
     * @return void
     */
    public function testGetMimeType()
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
     * test setMimeType
     *
     * @test
     * @return void
     */
    public function testSetMimeType()
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
     * test getSize
     *
     * @test
     * @return void
     */
    public function testGetSize()
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
     * test setSize
     *
     * @test
     * @return void
     */
    public function testSetSize()
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
