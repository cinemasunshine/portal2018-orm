<?php

declare(strict_types=1);

namespace Tests\Entities;

use Cinemasunshine\ORM\Entities\TheaterMeta;
use Cinemasunshine\ORM\Entities\Theater;
use Cinemasunshine\ORM\Entities\TheaterOpeningHour;
use PHPUnit\Framework\TestCase;

/**
 * TheaterMeta test
 */
final class TheaterMetaTest extends TestCase
{
    /**
     * Create target mock
     *
     * @return TheaterMeta&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetMock()
    {
        return $this->createMock(TheaterMeta::class);
    }

    /**
     * Create target partial mock
     *
     * @param string[] $methods
     * @return TheaterMeta&\PHPUnit\Framework\MockObject\MockObject
     */
    public function createTargetPartialMock(array $methods)
    {
        return $this->createPartialMock(TheaterMeta::class, $methods);
    }

    /**
     * Create target reflection
     *
     * @return \ReflectionClass<TheaterMeta>
     */
    public function createTargetReflection()
    {
        return new \ReflectionClass(TheaterMeta::class);
    }

    /**
     * test construct
     *
     * @test
     *
     * @return void
     */
    public function testConstruct()
    {
        $targetMock = $this->createTargetMock();
        $targetRef  = $this->createTargetReflection();

        /** @var \ReflectionMethod $constructorRef */
        $constructorRef = $targetRef->getConstructor();
        $constructorRef->invoke($targetMock);

        $openingHoursPropertyRef = $targetRef->getProperty('openingHours');
        $openingHoursPropertyRef->setAccessible(true);

        $this->assertEquals([], $openingHoursPropertyRef->getValue($targetMock));
    }

    /**
     * test getId
     *
     * @test
     *
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
     * test getTheater
     *
     * @test
     *
     * @return void
     */
    public function testGetTheater()
    {
        $theater = new Theater(11);

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
     *
     * @return void
     */
    public function testSetTheater()
    {
        $theater = new Theater(11);

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTheater($theater);

        $targetRef = $this->createTargetReflection();

        $theaterPropertyRef = $targetRef->getProperty('theater');
        $theaterPropertyRef->setAccessible(true);

        $this->assertEquals($theater, $theaterPropertyRef->getValue($targetMock));
    }

    /**
     * test getOpeningHours
     *
     * @test
     *
     * @return void
     */
    public function testGetOpeningHours()
    {
        $openingHours = [
            [
                'type' => TheaterOpeningHour::TYPE_DATE,
                'from_date' => '2020/01/01',
                'to_date' => null,
                'time' => '10:00:00',
            ],
            [
                'type' => TheaterOpeningHour::TYPE_TERM,
                'from_date' => '2020/01/02',
                'to_date' => '2020/01/03',
                'time' => '12:30:00',
            ],
        ];

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $openingHoursPropertyRef = $targetRef->getProperty('openingHours');
        $openingHoursPropertyRef->setAccessible(true);
        $openingHoursPropertyRef->setValue($targetMock, $openingHours);

        $result = $targetMock->getOpeningHours();
        $this->assertIsArray($result);

        foreach ($result as $data) {
            $this->assertInstanceOf(TheaterOpeningHour::class, $data);
        }
    }

    /**
     * test setOpeningHours
     *
     * @test
     *
     * @return void
     */
    public function testSetOpeningHours()
    {
        $data = [
            [
                'type' => TheaterOpeningHour::TYPE_DATE,
                'from_date' => '2020/01/01',
                'to_date' => null,
                'time' => '10:00:00',
            ],
            [
                'type' => TheaterOpeningHour::TYPE_TERM,
                'from_date' => '2020/01/02',
                'to_date' => '2020/01/03',
                'time' => '12:30:00',
            ],
        ];

        $openingHours = [];

        foreach ($data as $row) {
            $openingHours[] = TheaterOpeningHour::create($row);
        }

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setOpeningHours($openingHours);

        $targetRef = $this->createTargetReflection();

        $openingHoursPropertyRef = $targetRef->getProperty('openingHours');
        $openingHoursPropertyRef->setAccessible(true);

        $this->assertEquals($data, $openingHoursPropertyRef->getValue($targetMock));
    }

    /**
     * test getTwitter
     *
     * @test
     *
     * @return void
     */
    public function testGetTwitter()
    {
        $twitter = 'TwitterJP';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $twitterPropertyRef = $targetRef->getProperty('twitter');
        $twitterPropertyRef->setAccessible(true);
        $twitterPropertyRef->setValue($targetMock, $twitter);

        $this->assertEquals($twitter, $targetMock->getTwitter());
    }

    /**
     * test setTwitter
     *
     * @test
     *
     * @return void
     */
    public function testSetTwitter()
    {
        $twitter = 'TwitterJP';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setTwitter($twitter);

        $targetRef = $this->createTargetReflection();

        $twitterPropertyRef = $targetRef->getProperty('twitter');
        $twitterPropertyRef->setAccessible(true);

        $this->assertEquals($twitter, $twitterPropertyRef->getValue($targetMock));
    }

    /**
     * test getFacebook
     *
     * @test
     *
     * @return void
     */
    public function testGetFacebook()
    {
        $facebook = 'facebook';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $facebookPropertyRef = $targetRef->getProperty('facebook');
        $facebookPropertyRef->setAccessible(true);
        $facebookPropertyRef->setValue($targetMock, $facebook);

        $this->assertEquals($facebook, $targetMock->getFacebook());
    }

    /**
     * test setFacebook
     *
     * @test
     *
     * @return void
     */
    public function testSetFacebook()
    {
        $facebook = 'facebook';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setFacebook($facebook);

        $targetRef = $this->createTargetReflection();

        $facebookPropertyRef = $targetRef->getProperty('facebook');
        $facebookPropertyRef->setAccessible(true);

        $this->assertEquals($facebook, $facebookPropertyRef->getValue($targetMock));
    }

    /**
     * test getOyakoCinemaUrl
     *
     * @test
     *
     * @return void
     */
    public function testGetOyakoCinemaUrl()
    {
        $oyakoCinemaUrl = 'https://example.com/';

        $targetMock = $this->createTargetPartialMock([]);
        $targetRef  = $this->createTargetReflection();

        $oyakoCinemaUrlPropertyRef = $targetRef->getProperty('oyakoCinemaUrl');
        $oyakoCinemaUrlPropertyRef->setAccessible(true);
        $oyakoCinemaUrlPropertyRef->setValue($targetMock, $oyakoCinemaUrl);

        $this->assertEquals($oyakoCinemaUrl, $targetMock->getOyakoCinemaUrl());
    }

    /**
     * test setOyakoCinemaUrl
     *
     * @test
     *
     * @return void
     */
    public function testSetOyakoCinemaUrl()
    {
        $oyakoCinemaUrl = 'https://example.com/';

        $targetMock = $this->createTargetPartialMock([]);
        $targetMock->setOyakoCinemaUrl($oyakoCinemaUrl);

        $targetRef = $this->createTargetReflection();

        $oyakoCinemaUrlPropertyRef = $targetRef->getProperty('oyakoCinemaUrl');
        $oyakoCinemaUrlPropertyRef->setAccessible(true);

        $this->assertEquals($oyakoCinemaUrl, $oyakoCinemaUrlPropertyRef->getValue($targetMock));
    }
}
