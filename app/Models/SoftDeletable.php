<?php

namespace App\Models;

/**
 * Interface SoftDeleteable
 *
 * @package App\Models
 */
interface SoftDeletable
{
    public const PROPERTY_DELETED_AT = 'deletedAt';

    /**
     * @param \DateTime|null $deletedAt
     *
     * @return $this
     */
    public function setDeletedAt(?\DateTime $deletedAt);

    /**
     * @return \DateTime|null
     */
    public function getDeletedAt(): ?\DateTime;

    /**
     * @return $this
     */
    public function restore();

    /**
     * @return bool
     */
    public function isDeleted(): bool;
}
