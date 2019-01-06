<?php

namespace Bitty\Middleware;

use Bitty\Middleware\RequestHandlerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * An HTTP middleware component participates in processing an HTTP message,
 * either by acting on the request or the response. This interface defines the
 * methods required to use the middleware.
 *
 * NOTE: This is a placeholder until PSR-15 is approved.
 */
interface MiddlewareInterface
{
    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     *
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface;
}
