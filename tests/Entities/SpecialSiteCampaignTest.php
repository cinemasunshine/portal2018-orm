<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\Campaign;
use Cinemasunshine\ORM\Entities\SpecialSite;
use Cinemasunshine\ORM\Entities\SpecialSiteCampaign;
use PHPUnit\Framework\TestCase;

/**
 * SpecialSiteCampaign test
 */
final class SpecialSiteCampaignTest extends TestCase
{
    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return SpecialSiteCampaign&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(SpecialSiteCampaign::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<SpecialSiteCampaign>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(SpecialSiteCampaign::class);
    }

    /**
     * test getId
     *
     * @test
     * @return void
     */
    public function testGetId()
    {
        $id = 22;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $idPropertyRef = $targetRef->getProperty('id');
        $idPropertyRef->setAccessible(true);
        $idPropertyRef->setValue($targetMock, $id);

        $this->assertEquals($id, $targetMock->getId());
    }

    /**
     * test getCampaign
     *
     * @test
     * @return void
     */
    public function testGetCampaign()
    {
        $campaign = new Campaign();
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $campaignPropertyRef = $targetRef->getProperty('campaign');
        $campaignPropertyRef->setAccessible(true);
        $campaignPropertyRef->setValue($targetMock, $campaign);

        $this->assertEquals($campaign, $targetMock->getCampaign());
    }

    /**
     * test setCampaign
     *
     * @test
     * @return void
     */
    public function testSetCampaign()
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
     * test getSpecialSite
     *
     * @test
     * @return void
     */
    public function testGetSpecialSite()
    {
        $specialSite = new SpecialSite(3);
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);
        $specialSitePropertyRef->setValue($targetMock, $specialSite);

        $this->assertEquals($specialSite, $targetMock->getSpecialSite());
    }

    /**
     * test setSpecialSite
     *
     * @test
     * @return void
     */
    public function testSetSpecialSite()
    {
        $specialSite = new SpecialSite(3);
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setSpecialSite($specialSite);

        $targetRef = $this->createTargetReflection();
        $specialSitePropertyRef = $targetRef->getProperty('specialSite');
        $specialSitePropertyRef->setAccessible(true);

        $this->assertEquals($specialSite, $specialSitePropertyRef->getValue($targetMock));
    }

    /**
     * test getDisplayOrder
     *
     * @test
     * @return void
     */
    public function testGetDisplayOrder()
    {
        $displayOrder = 3;
        $targetMock = $this->createTargetPartialMock([]);
        $targetRef = $this->createTargetReflection();
        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);
        $displayOrderPropertyRef->setValue($targetMock, $displayOrder);

        $this->assertEquals($displayOrder, $targetMock->getDisplayOrder());
    }

    /**
     * test setDisplayOrder
     *
     * @test
     * @return void
     */
    public function testSetDisplayOrder()
    {
        $displayOrder = 3;
        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setDisplayOrder($displayOrder);

        $targetRef = $this->createTargetReflection();
        $displayOrderPropertyRef = $targetRef->getProperty('displayOrder');
        $displayOrderPropertyRef->setAccessible(true);

        $this->assertEquals($displayOrder, $displayOrderPropertyRef->getValue($targetMock));
    }
}
