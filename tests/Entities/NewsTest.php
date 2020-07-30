<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\File;
use Cinemasunshine\ORM\Entities\News;
use Cinemasunshine\ORM\Entities\Title;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * News test
 */
final class NewsTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return News&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(News::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return News&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(News::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<News>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(News::class);
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
        $targetRef = $this->createTargetReflection();

        /** @var \ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock);

        $pagesPropertyRef = $targetRef->getProperty('pages');
        $pagesPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $pagesPropertyRef->getValue($targetMock)
        );

        $specialSitesPropertyRef = $targetRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $specialSitesPropertyRef->getValue($targetMock)
        );

        $theatersPropertyRef = $targetRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $this->assertInstanceOf(
            ArrayCollection::class,
            $theatersPropertyRef->getValue($targetMock)
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
        $id = 26;
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
     * test getImage
     *
     * @test
     * @return void
     */
    public function testGetImage()
    {
        $image = new File();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $imagePropertyRef = $targetRef->getProperty('image');
        $imagePropertyRef->setAccessible(true);
        $imagePropertyRef->setValue($targetMock, $image);

        $this->assertEquals($image, $targetMock->getImage());
    }

    /**
     * test setImage
     *
     * @test
     * @return void
     */
    public function testSetImage()
    {
        $image = new File();
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setImage($image);

        $targetRef = $this->createTargetReflection();
        $imagePropertyRef = $targetRef->getProperty('image');
        $imagePropertyRef->setAccessible(true);

        $this->assertEquals($image, $imagePropertyRef->getValue($targetMock));
    }

    /**
     * test getCategory
     *
     * @test
     * @return void
     */
    public function testGetCategory()
    {
        $category = 2;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $categoryPropertyRef = $targetRef->getProperty('category');
        $categoryPropertyRef->setAccessible(true);
        $categoryPropertyRef->setValue($targetMock, $category);

        $this->assertEquals($category, $targetMock->getCategory());
    }

    /**
     * test setCategory
     *
     * @test
     * @return void
     */
    public function testSetCategory()
    {
        $category = 2;
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCategory($category);

        $targetRef = $this->createTargetReflection();
        $categoryPropertyRef = $targetRef->getProperty('category');
        $categoryPropertyRef->setAccessible(true);

        $this->assertEquals($category, $categoryPropertyRef->getValue($targetMock));
    }

    /**
     * test getHeadline
     *
     * @test
     * @return void
     */
    public function testGetHeadline()
    {
        $headline = 'news_headline';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $headlinePropertyRef = $targetRef->getProperty('headline');
        $headlinePropertyRef->setAccessible(true);
        $headlinePropertyRef->setValue($targetMock, $headline);

        $this->assertEquals($headline, $targetMock->getHeadline());
    }

    /**
     * test setHeadline
     *
     * @test
     * @return void
     */
    public function testSetHeadline()
    {
        $headline = 'news_headline';
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setHeadline($headline);

        $targetRef = $this->createTargetReflection();
        $headlinePropertyRef = $targetRef->getProperty('headline');
        $headlinePropertyRef->setAccessible(true);

        $this->assertEquals($headline, $headlinePropertyRef->getValue($targetMock));
    }

    /**
     * test getBody
     *
     * @test
     * @return void
     */
    public function testGetBody()
    {
        $body = 'news_body';
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $bodyPropertyRef = $targetRef->getProperty('body');
        $bodyPropertyRef->setAccessible(true);
        $bodyPropertyRef->setValue($targetMock, $body);

        $this->assertEquals($body, $targetMock->getBody());
    }

    /**
     * test setBody
     *
     * @test
     * @return void
     */
    public function testSetBody()
    {
        $body = 'news_body';
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setBody($body);

        $targetRef = $this->createTargetReflection();
        $bodyPropertyRef = $targetRef->getProperty('body');
        $bodyPropertyRef->setAccessible(true);

        $this->assertEquals($body, $bodyPropertyRef->getValue($targetMock));
    }

    /**
     * test getStartDt
     *
     * @test
     * @return void
     */
    public function testGetStartDt()
    {
        $startDt = new \DateTime();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $startDtPropertyRef = $targetRef->getProperty('startDt');
        $startDtPropertyRef->setAccessible(true);
        $startDtPropertyRef->setValue($targetMock, $startDt);

        $this->assertEquals($startDt, $targetMock->getStartDt());
    }

    /**
     * test setStartDt
     *
     * @test
     * @return void
     */
    public function testSetStartDt()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $startDtPropertyRef = $targetRef->getProperty('startDt');
        $startDtPropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setStartDt($dtObject);
        $this->assertEquals($dtObject, $startDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setStartDt($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
            $startDtPropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $startDtPropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setStartDt (invalid argument)
     *
     * @test
     * @return void
     */
    public function testSetStartDtInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setStartDt(null);
    }

    /**
     * test getEndDt
     *
     * @test
     * @return void
     */
    public function testGetEndDt()
    {
        $endDt = new \DateTime();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $endDtPropertyRef = $targetRef->getProperty('endDt');
        $endDtPropertyRef->setAccessible(true);
        $endDtPropertyRef->setValue($targetMock, $endDt);

        $this->assertEquals($endDt, $targetMock->getEndDt());
    }

    /**
     * test setEndDt
     *
     * @test
     * @return void
     */
    public function testSetEndDt()
    {
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $endDtPropertyRef = $targetRef->getProperty('endDt');
        $endDtPropertyRef->setAccessible(true);

        $dtObject = new \DateTime();
        $targetMock->setEndDt($dtObject);
        $this->assertEquals($dtObject, $endDtPropertyRef->getValue($targetMock));

        $dtString = '2020-01-01';
        $targetMock->setEndDt($dtString);
        $this->assertInstanceOf(
            \DateTime::class,
            $endDtPropertyRef->getValue($targetMock)
        );
        $this->assertEquals(
            $dtString,
            $endDtPropertyRef->getValue($targetMock)->format('Y-m-d')
        );
    }

    /**
     * test setEndDt (invalid argument)
     *
     * @test
     * @return void
     */
    public function testSetEndDtInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);

        $targetMock = $this->createTargetPartialMock([]);

        /** @phpstan-ignore-next-line */
        $targetMock->setEndDt(null);
    }

    /**
     * test getPages
     *
     * @test
     * @return void
     */
    public function testGetPages()
    {
        $pages = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $pagesPropertyRef = $targetRef->getProperty('pages');
        $pagesPropertyRef->setAccessible(true);
        $pagesPropertyRef->setValue($targetMock, $pages);

        $this->assertEquals($pages, $targetMock->getPages());
    }

    /**
     * test getSpecialSites
     *
     * @test
     * @return void
     */
    public function testGetSpecialSites()
    {
        $specialSites = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $specialSitesPropertyRef = $targetRef->getProperty('specialSites');
        $specialSitesPropertyRef->setAccessible(true);
        $specialSitesPropertyRef->setValue($targetMock, $specialSites);

        $this->assertEquals($specialSites, $targetMock->getSpecialSites());
    }

    /**
     * test getTheaters
     *
     * @test
     * @return void
     */
    public function testGetTheaters()
    {
        $theaters = new ArrayCollection();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $theatersPropertyRef = $targetRef->getProperty('theaters');
        $theatersPropertyRef->setAccessible(true);
        $theatersPropertyRef->setValue($targetMock, $theaters);

        $this->assertEquals($theaters, $targetMock->getTheaters());
    }
}