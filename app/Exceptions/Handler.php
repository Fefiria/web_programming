<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, Throwable $exception): Response
    {
        // Log full exception for debugging
        Log::error($exception);

        // If debug is enabled, let the parent render (detailed page)
        if (config('app.debug')) {
            return parent::render($request, $exception);
        }

        // For production and general use, return a friendly HTML error page
        $message = $exception->getMessage() ?: 'Terjadi kesalahan pada server.';

        $html = view('errors.500', ['message' => $message])->render();

        return new Response($html, 500);
    }
}
