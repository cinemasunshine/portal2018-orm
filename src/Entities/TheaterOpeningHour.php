<?php

/**
 * TheaterOpeningHour.php
 *
 * @author Atsushi Okui <okui@motionpicture.jp>
 */

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

/**
 * TheaterOpeningHour entity
 *
 * 現時点ではDoctrineのEntityとはしない。
 * DBへはjsonデータへ変換して文字列カラムへセットする。
 */
class TheaterOpeningHour
{
    public const TYPE_DATE = 1;
    public const TYPE_TERM = 2;

    /**
     * @var int
     */
    protected $type;

    /**
     * @var \DateTime
     */
    protected $fromDate;

    /**
     * @var \DateTime|null
     */
    protected $toDate;

    /**
     * @var \DateTime
     */
    protected $time;

    /**
     * Create this entity
     *
     * @param array{type:int,from_date:string,to_date:string|null,time:string} $data
     * @return self
     */
    public static function create(array $data): self
    {
        $entity = new self();
        $entity->setType((int) $data['type']);
        $entity->setFromDate($data['from_date']);
        $entity->setToDate($data['to_date']);
        $entity->setTime($data['time']);

        return $entity;
    }

    /**
     * constructor
     */
    protected function __construct()
    {
    }

    /**
     * Return type
     *
     * @return integer
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return void
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }

    /**
     * Return fromDate
     *
     * @return \DateTime
     */
    public function getFromDate(): \DateTime
    {
        return $this->fromDate;
    }

    /**
     * Set fromDate
     *
     * @param \DateTime|string $fromDate
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setFromDate($fromDate)
    {
        if ($fromDate instanceof \DateTime) {
            $this->fromDate = $fromDate;
        } elseif (is_string($fromDate)) {
            $this->fromDate = new \DateTime($fromDate);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return toDate
     *
     * @return \DateTime|null
     */
    public function getToDate(): ?\DateTime
    {
        return $this->toDate;
    }

    /**
     * Set toDate
     *
     * @param \DateTime|string|null $toDate
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setToDate($toDate)
    {
        if (is_null($toDate) || $toDate instanceof \DateTime) {
            $this->toDate = $toDate;
        } elseif (is_string($toDate)) {
            $this->toDate = new \DateTime($toDate);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Return time
     *
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * Set time
     *
     * @param \DateTime|string $time
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setTime($time)
    {
        if ($time instanceof \DateTime) {
            $this->time = $time;
        } elseif (is_string($time)) {
            $this->time = new \DateTime($time);
        } else {
            throw new \InvalidArgumentException('Invalid type.');
        }
    }

    /**
     * Entity to array
     *
     * @return array{type:int,from_date:string,to_date:string|null,time:string}
     */
    public function toArray(): array
    {
        $data = [];

        $data['type']      = $this->getType();
        $data['from_date'] = $this->getFromDate()->format('Y/m/d');
        $data['to_date']   = is_null($this->getToDate())
            ? null
            : $this->getToDate()->format('Y/m/d');
        $data['time']      = $this->getTime()->format('H:i:s');

        return $data;
    }
}
