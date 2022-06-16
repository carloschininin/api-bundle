<?php

declare(strict_types=1);

namespace CarlosChininin\ApiBundle\Entity;

use CarlosChininin\ApiBundle\Dto\AbstractDto;
use DateTimeInterface;
use Symfony\Component\Uid\Ulid;

abstract class AbstractEntity implements EntityInterface
{
    abstract public function uid(): ?Ulid;

    abstract public function userCreated(): ?Ulid;

    abstract public function userUpdated(): ?Ulid;

    abstract public function isActive(): bool;

    abstract public function createdAt(): ?DateTimeInterface;

    abstract public function updatedAt(): ?DateTimeInterface;

    public function dataDto(AbstractDto $dto): void
    {
        $dto->uid = $this->uid()?->toBase32();
        $dto->userCreated = $this->userCreated()?->toBase32();
        $dto->userUpdated = $this->userUpdated()?->toBase32();
        $dto->isActive = $this->isActive();
        $dto->createdAt = $this->createdAt()?->format('Y-m-d H:i:s');
        $dto->updatedAt = $this->updatedAt()?->format('Y-m-d H:i:s');
    }
}
