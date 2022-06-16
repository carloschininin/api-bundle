<?php

declare(strict_types=1);

namespace CarlosChininin\ApiBundle\Dto;

use CarlosChininin\AppUtil\Dto\AbstractDto as AbstractDtoBase;

abstract class AbstractDto extends AbstractDtoBase
{
    private ?string $uid = null;
    private ?string $userCreated = null;
    private ?string $userUpdated = null;
    private ?bool $isActive = null;
    private ?string $createdAt = null;
    private ?string $updatedAt = null;

    public function uid(): ?string
    {
        return $this->uid;
    }

    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    public function userCreated(): ?string
    {
        return $this->userCreated;
    }

    public function setUserCreated(?string $userCreated): void
    {
        $this->userCreated = $userCreated;
    }

    public function userUpdated(): ?string
    {
        return $this->userUpdated;
    }

    public function setUserUpdated(?string $userUpdated): void
    {
        $this->userUpdated = $userUpdated;
    }

    public function isActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function createdAt(): ?string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function updatedAt(): ?string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function toArray(): array
    {
        return [
            'uid' => $this->uid(),
            'userCreated' => $this->userCreated(),
            'userUpdated' => $this->userUpdated(),
            'isActive' => $this->isActive(),
            'createdAt' => $this->createdAt(),
            'updatedAt' => $this->updatedAt(),
        ];
    }
}
