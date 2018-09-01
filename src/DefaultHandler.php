<?php

namespace Bitty\Middleware;

use Bitty\Http\Response;
use Bitty\Middleware\RequestHandlerInterface;
use Psr\Http\Message\ServerRequestInterface;

class DefaultHandler implements RequestHandlerInterface
{
    /**
     * {@inheritDoc}
     */
    public function handle(ServerRequestInterface $request)
    {
        return new Response('Not Found', 404);
    }
}