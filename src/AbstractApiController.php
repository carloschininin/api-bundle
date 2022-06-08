<?php

declare(strict_types=1);

/*
 * This file is part of the PIDIA
 * (c) Carlos Chininin <cio@pidia.pe>
 */

namespace CarlosChininin\ApiBundle;

use CarlosChininin\ApiBundle\Response\ResponseDto;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractApiController
{
    protected function response(array $data, bool $status = true): Response
    {
        return new JsonResponse(array_merge(['status' => $status], $data), Response::HTTP_OK);
    }

    protected function responseDto(ResponseDto $response): Response
    {
        return $this->response($response->data(), $response->status());
    }

    protected function requestToArray(Request $request): array
    {
        if (0 === mb_strpos($request->headers->get('Content-Type'), 'application/json')) {
            $content = json_decode($request->getContent(), true);
            $request->request->replace(\is_array($content) ? $content : []);
        }

        return $request->request->all();
    }
}
