<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities;

use DateTime;
use InvalidArgumentException;

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

    /** @var int */
    protected $type;

    /** @var DateTime */
    protected $fromDate;

    /** @var DateTime|null */
    protected $toDate;

    /** @var DateTime */
    protected $time;

    /**
     * @param array{type:int,from_date:string,to_date:string|null,time:string} $data
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

    protected function __construct()
    {
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getFromDate(): DateTime
    {
        return $this->fromDate;
    }

    /**
     * @param DateTime|string $fromDate
     *
     * @throws InvalidArgumentException
     */
    public function setFromDate($fromDate): void
    {
        if ($fromDate instanceof DateTime) {
            $this->fromDate = $fromDate;
        } elseif (is_string($fromDate)) {
            $this->fromDate = new DateTime($fromDate);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getToDate(): ?DateTime
    {
        return $this->toDate;
    }

    /**
     * @param DateTime|string|null $toDate
     *
     * @throws InvalidArgumentException
     */
    public function setToDate($toDate): void
    {
        if (is_null($toDate) || $toDate instanceof DateTime) {
            $this->toDate = $toDate;
        } elseif (is_string($toDate)) {
            $this->toDate = new DateTime($toDate);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    public function getTime(): DateTime
    {
        return $this->time;
    }

    /**
     * @param DateTime|string $time
     *
     * @throws InvalidArgumentException
     */
    public function setTime($time): void
    {
        if ($time instanceof DateTime) {
            $this->time = $time;
        } elseif (is_string($time)) {
            $this->time = new DateTime($time);
        } else {
            throw new InvalidArgumentException('Invalid type.');
        }
    }

    /**
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
