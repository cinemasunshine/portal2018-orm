<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Campaign;
use Cinemasunshine\ORM\Entities\Page;
use Cinemasunshine\ORM\Entities\PageCampaign;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class PageCampaignTest extends TestCase
{
    /**
     * @param string[] $methods
     * @return PageCampaign&MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(PageCampaign::class, $methods);
    }

    /**
     * @return ReflectionClass<PageCampaign>
     */
    public function createTargetReflection(): ReflectionClass
    {
        return new ReflectionClass(PageCampaign::class);
    }

    /**
     * @test
     */
    public function testGetId(): void
    {
        $id = 22;

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
    public function testGetCampaign(): void
    {
        $campaign = new Campaign();

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $campaignPropertyRef = $targetRef->getProperty('campaign');
        $campaignPropertyRef->setAccessible(true);
        $campaignPropertyRef->setValue($targetMock, $campaign);

        $this->assertEquals($campaign, $targetMock->getCampaign());
    }

    /**
     * @test
     */
    public function testSetCampaign(): void
    {
        $campaign = new Campaign();

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setCampaign($campaign);

        $targetRef = $this->createTargetReflection();

        $campaignPropertyRef = $targetRef->getProperty('campaign');
        $campaignPropertyRef->setAccessible(true);

        $this->assertEquals($campaign, $campaignPropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetPage(): void
    {
        $page = new Page(5);

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $pagePropertyRef = $targetRef->getProperty('page');
        $pagePropertyRef->setAccessible(true);
        $pagePropertyRef->setValue($targetMock, $page);

        $this->assertEquals($page, $targetMock->getPage());
    }

    /**
     * @test
     */
    public function testSetPage(): void
    {
        $page = new Page(5);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setPage($page);

        $targetRef = $this->createTargetReflection();

        $pagePropertyRef = $targetRef->getProperty('page');
        $pagePropertyRef->setAccessible(true);

        $this->assertEquals($page, $pagePropertyRef->getValue($targetMock));
    }

    /**
     * @test
     */
    public function testGetDisplayOrder(): void
    {
        $displayOrder = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);
        $displayOrderPropertyRef->setValue($targetMock, $displayOrder);

        $this->assertEquals($displayOrder, $targetMock->getDisplayOrder());
    }

    /**
     * @test
     */
    public function testSetDisplayOrder(): void
    {
        $displayOrder = 2;

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();

        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
