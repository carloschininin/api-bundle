<?php

declare(strict_types=1);

namespace CarlosChininin\ApiBundle;

use CarlosChininin\ApiBundle\Exception\AccessDeniedException;
use CarlosChininin\ApiBundle\Response\ResponseDto;
use Symfony\Component\HttpFoundation\Request;

abstract class AbstractAuthApiController extends AbstractApiController
{
    protected function authorization(Request $request, string $tokenValid): ResponseDto
    {
        if (!$request->headers->has('Authorization') || 0 !== mb_strpos($request->headers->get('Authorization'), 'Bearer ')) {
            return ResponseDto::create(false, [], 'No tiene autorización');
        }

        $token = mb_substr($request->headers->get('Authorization'), 7);
        if ($token !== $tokenValid) {
            return ResponseDto::create(false, [], 'Token no válido');
        }

        return ResponseDto::create(true);
    }

    protected function denyAccessUnlessAuthorization(Request $request, string $tokenValid): void
    {
        $authorization = $this->authorization($request, $tokenValid);
        if (!$authorization->status()) {
            throw new AccessDeniedException($authorization->message());
        }
    }
}
