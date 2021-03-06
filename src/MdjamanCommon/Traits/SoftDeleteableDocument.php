<?php

namespace MdjamanCommon\Traits;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * SoftDeletable Trait, usable with PHP >= 5.4
 *
 * @author Wesley van Opdorp <wesley.van.opdorp@freshheads.com>
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
trait SoftDeleteableDocument
{
    /**
     * @var \DateTime
     * @ODM\Field(name="deleted_at", type="date")
     */
    protected $deleted_at;

    /**
     * Sets deletedAt.
     *
     * @param \Datetime|null $deletedAt
     *
     * @return $this
     */
    public function setDeletedAt(\DateTime $deletedAt = null)
    {
        $this->deleted_at = $deletedAt;
        return $this;
    }

    /**
     * Returns deletedAt.
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * Is deleted?
     *
     * @return bool
     */
    public function isDeleted()
    {
        return null !== $this->deleted_at;
    }
}
