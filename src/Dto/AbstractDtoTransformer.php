<?php

declare(strict_types=1);

namespace CarlosChininin\ApiBundle\Dto;

use CarlosChininin\ApiBundle\Entity\EntityInterface;
use CarlosChininin\AppUtil\Dto\AbstractDto;
use CarlosChininin\AppUtil\Dto\Transformer\AbstractDtoTransformer as BaseDtoTransformer;

abstract class AbstractDtoTransformer extends BaseDtoTransformer
{
    public function transformFromObject(mixed $object): AbstractDto
    {
        if (!$object instanceof EntityInterface) {
            throw new \InvalidArgumentException('Invalid object type');
        }

        return $object->toDto();
    }
}
