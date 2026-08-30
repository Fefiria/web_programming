<?php

error_log('=== STEP 1: VERCEL START ===');

try {
    error_log('=== STEP 2: loading autoload ===');

    require __DIR__ . '/../vendor/autoload.php';

    error_log('=== STEP 3: autoload OK ===');

    $app = require __DIR__ . '/../bootstrap/app.php';

    error_log('=== STEP 4: bootstrap OK ===');

    $request = Illuminate\Http\Request::capture();

    error_log('=== STEP 5: request captured ===');

    $response = $app->handle($request);

    error_log('=== STEP 6: response handled ===');

    $response->send();

    error_log('=== STEP 7: response sent ===');

    $app->terminate($request, $response);

    error_log('=== STEP 8: terminated ===');
} catch (\Throwable $e) {

    error_log('=== ORIGINAL ERROR ===');
    error_log('TYPE: ' . get_class($e));
    error_log('MESSAGE: ' . $e->getMessage());
    error_log('FILE: ' . $e->getFile());
    error_log('LINE: ' . $e->getLine());
    error_log('TRACE: ' . $e->getTraceAsString());

    http_response_code(500);

    echo '<pre>';
    echo htmlspecialchars(
        get_class($e) . "\n\n" .
            $e->getMessage() . "\n\n" .
            $e->getFile() . ':' . $e->getLine() . "\n\n" .
            $e->getTraceAsString()
    );
    echo '</pre>';
}
