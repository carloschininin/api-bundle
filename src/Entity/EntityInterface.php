<?php

declare(strict_types=1);

namespace CarlosChininin\ApiBundle\Entity;

use CarlosChininin\AppUtil\Dto\AbstractDto;

interface EntityInterface
{
    public function toDto(): AbstractDto;
}
