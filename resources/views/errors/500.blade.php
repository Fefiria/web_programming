<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Server Error (500)</title>
    <style>
        body {
            font-family: system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: #f7f7f9;
            color: #333
        }

        .card {
            max-width: 800px;
            padding: 30px;
            border-radius: 8px;
            background: white;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08)
        }

        h1 {
            margin: 0 0 8px;
            font-size: 24px
        }

        p {
            margin: 0 0 12px;
            color: #666
        }

        .details {
            font-family: monospace;
            background: #f1f1f1;
            padding: 12px;
            border-radius: 6px;
            color: #111
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Server Error (500)</h1>
        <p>Maaf, terjadi kesalahan pada server. Silakan coba lagi nanti.</p>

        @if (config('app.debug'))
            <div class="details">{{ $message }}</div>
        @endif

        <p style="margin-top:12px;font-size:13px;color:#999">Jika Anda pemilik aplikasi: periksa
            `storage/logs/laravel.log` atau environment variables.</p>
    </div>
</body>

</html>
