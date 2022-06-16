<?php

declare(strict_types=1);

namespace CarlosChininin\ApiBundle\Dto;

use CarlosChininin\AppUtil\Dto\AbstractDto as AbstractDtoBase;

abstract class AbstractDto extends AbstractDtoBase
{
    public ?string $uid = null;
    public ?string $userCreated = null;
    public ?string $userUpdated = null;
    public ?bool $isActive = null;
    public ?string $createdAt = null;
    public ?string $updatedAt = null;

    public function toArray(): array
    {
        return [
            'uid' => $this->uid,
            'userCreated' => $this->userCreated,
            'userUpdated' => $this->userUpdated,
            'isActive' => $this->isActive,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ];
    }
}
