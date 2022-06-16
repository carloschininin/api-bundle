<?php

declare(strict_types=1);

/*
 * This file is part of the PIDIA
 * (c) Carlos Chininin <cio@pidia.pe>
 */

namespace CarlosChininin\ApiBundle\Response;

use CarlosChininin\AppUtil\Dto\AbstractDto;

class ResponseDto extends AbstractDto
{
    protected function __construct(
        private readonly bool $status,
        private readonly iterable $data,
        private readonly ?string $message = null,
    ) {
    }

    public static function create(bool $status, iterable $data = [], ?string $message = null): self
    {
        return new self($status, $data, $message);
    }

    public function status(): bool
    {
        return $this->status;
    }

    public function data(): iterable
    {
        return $this->data;
    }

    public function message(): ?string
    {
        return $this->message;
    }
}
