<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities\Traits;

trait SoftDeleteTrait
{
    /**
     * @ORM\Column(type="boolean", name="is_deleted", options={"default":false})
     *
     * @var bool
     */
    protected $isDeleted = false;

    public function getIsDeleted(): bool
    {
        return $this->isDeleted;
    }

    /**
     * alias getIsDeleted()
     */
    public function isDeleted(): bool
    {
        return $this->getIsDeleted();
    }

    public function setIsDeleted(bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }
}
