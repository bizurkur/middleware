<?php

namespace Bitty\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class MiddlewareHandler implements RequestHandlerInterface
{
    /**
     * @var MiddlewareInterface
     */
    protected $middleware = null;

    /**
     * @var RequestHandlerInterface
     */
    protected $handler = null;

    /**
     * @param MiddlewareInterface $middleware
     * @param RequestHandlerInterface $handler
     */
    public function __construct(
        MiddlewareInterface $middleware,
        RequestHandlerInterface $handler
    ) {
        $this->middleware = $middleware;
        $this->handler    = $handler;
    }

    /**
     * {@inheritDoc}
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->middleware->process($request, $this->handler);
    }
}
