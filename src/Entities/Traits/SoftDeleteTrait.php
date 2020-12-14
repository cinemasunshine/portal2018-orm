<?php

declare(strict_types=1);

namespace Cinemasunshine\ORM\Entities\Traits;

/**
 * SoftDelete trait
 */
trait SoftDeleteTrait
{
    /**
     * @ORM\Column(type="boolean", name="is_deleted", options={"default":false})
     *
     * @var bool
     */
    protected $isDeleted = false;

    /**
     * Return isDeleted
     *
     * @return boolean
     */
    public function getIsDeleted(): bool
    {
        return $this->isDeleted;
    }

    /**
     * is deleted
     *
     * alias getIsDeleted()
     *
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->getIsDeleted();
    }

    /**
     * Set isDeleted
     *
     * @param boolean $isDeleted
     * @return void
     */
    public function setIsDeleted(bool $isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }
}
