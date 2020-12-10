<?php

namespace App\Users;

use App\Models\Model;
use App\Models\SoftDeletable;
use App\Models\Timestampable;
use App\Models\UuidModel;
use App\Projects\MetaDataModel;
use App\Projects\RoleModel;
use Doctrine\Common\Collections\Collection;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Interface UserModel
 *
 * @package App\Users
 */
interface UserModel extends Model, Authenticatable, SoftDeletable, Timestampable, UuidModel
{
    const PROPERTY_EMAIL          = 'email';
    const PROPERTY_PASSWORD       = 'password';
    const PROPERTY_REFRESH_TOKENS = 'refreshTokens';
    const PROPERTY_ROLES          = 'roles';
    const PROPERTY_META_DATA      = 'metaData';

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email): self;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword(string $password): self;

    /**
     * @return string
     */
    public function getPassword(): string;

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
