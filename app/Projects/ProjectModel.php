<?php

namespace App\Projects;

use App\Models\Model;
use App\Models\SoftDeletable;
use App\Models\Timestampable;
use App\Models\UuidModel;
use Doctrine\Common\Collections\Collection;

/**
 * Interface ProjectModel
 *
 * @package App\Projects
 */
interface ProjectModel extends Model, SoftDeletable, Timestampable, UuidModel
{
    const PROPERTY_LABEL              = 'label';
    const PROPERTY_DESCRIPTION        = 'description';
    const PROPERTY_ROLES              = 'roles';
    const PROPERTY_META_DATA_ELEMENTS = 'metaDataElements';
    const PROPERTY_META_DATA          = 'metaData';

    /**
     * @param string $label
     *
     * @return $this
     */
    public function setLabel(string $label): self;

    /**
     * @return string
     */
    public function getLabel(): string;

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(string $description): self;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param RoleModel[] $roles
     *
     * @return $this
     */
    public function setRoles(array $roles): self;

    /**
     * @param RoleModel $role
     *
     * @return $this
     */
    public function addRole(RoleModel $role): self;

    /**
     * @return RoleModel[]|Collection
     */
    public function getRoles(): Collection;

    /**
     * @param MetaDataElementModel[] $metaDataElements
     *
     * @return $this
     */
    public function setMetaDataElements(array $metaDataElements): self;

    /**
     * @param MetaDataElementModel $metaDataElement
     *
     * @return $this
     */
    public function addMetaDataElement(MetaDataElementModel $metaDataElement): self;

    /**
     * @return MetaDataElementModel[]|Collection
     */
    public function getMetaDataElements(): Collection;

    /**
     * @param MetaDataModel[] $metaData
     *
     * @return $this
     */
    public function setMetaData(array $metaData): self;

    /**
     * @param MetaDataModel $metaData
     *
     * @return $this
     */
    public function addMetaData(MetaDataModel $metaData): self;

    /**
     * @return MetaDataModel[]|Collection
     */
    public function getMetaData(): Collection;

    /**
     * @return array
     */
    public function toArray(): array;
}
