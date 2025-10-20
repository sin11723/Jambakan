<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Desa Jambakan')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            :root {
                --primary-green: #10b981;
                --primary-dark: #059669;
                --primary-light: #d1fae5;
                --secondary-cream: #faf8f3;
                --text-dark: #1f2937;
                --text-muted: #6b7280;
                --border-light: #e5e7eb;
                --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
                --shadow-md: 0 8px 16px rgba(16, 185, 129, 0.15);
                --shadow-lg: 0 12px 24px rgba(16, 185, 129, 0.2);
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html, body {
                font-family: 'Figtree', sans-serif;
                color: var(--text-dark);
                background: #ffffff;
                line-height: 1.6;
            }

            a {
                color: var(--primary-green);
                text-decoration: none;
                transition: color 0.3s ease;
            }

            a:hover {
                color: var(--primary-dark);
            }

            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
            }

            /* ===== BUTTONS ===== */
            .btn {
                padding: 12px 24px;
                font-weight: 600;
                border-radius: 8px;
                border: none;
                cursor: pointer;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                text-decoration: none;
                display: inline-flex;
                align-items: center;
                gap: 8px;
                font-size: 0.95rem;
            }

            .btn-primary {
                background: var(--primary-green);
                color: white;
                box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
            }

            .btn-primary:hover {
                background: var(--primary-dark);
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
            }

            .btn-secondary {
                background: #e5e7eb;
                color: var(--text-dark);
            }

            .btn-secondary:hover {
                background: #d1d5db;
            }

            .btn-sm {
                padding: 8px 16px;
                font-size: 0.85rem;
            }

            /* ===== FORMS ===== */
            .form-group {
                margin-bottom: 1.5rem;
            }

            .form-label {
                display: block;
                margin-bottom: 0.5rem;
                font-weight: 600;
                color: var(--text-dark);
            }

            .form-control {
                width: 100%;
                padding: 12px 16px;
                border: 1px solid var(--border-light);
                border-radius: 8px;
                font-family: inherit;
                font-size: 0.95rem;
                transition: all 0.3s ease;
            }

            .form-control:focus {
                outline: none;
                border-color: var(--primary-green);
                box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
            }

            .form-control.is-invalid {
                border-color: #ef4444;
            }

            .invalid-feedback {
                color: #ef4444;
                font-size: 0.85rem;
                margin-top: 0.25rem;
                display: block;
            }

            textarea.form-control {
                resize: vertical;
                min-height: 120px;
            }

            /* ===== CARDS ===== */
            .card {
                background: white;
                border: 1px solid var(--border-light);
                border-radius: 12px;
                overflow: hidden;
                box-shadow: var(--shadow-sm);
                transition: all 0.3s ease;
            }

            .card:hover {
                box-shadow: var(--shadow-md);
            }

            .card-header {
                background: var(--secondary-cream);
                padding: 20px;
                border-bottom: 1px solid var(--border-light);
            }

            .card-body {
                padding: 20px;
            }

            /* ===== ALERTS ===== */
            .alert {
                padding: 16px 20px;
                border-radius: 8px;
                margin-bottom: 1.5rem;
                display: flex;
                align-items: flex-start;
                gap: 12px;
            }

            .alert-success {
                background: #d1fae5;
                color: #065f46;
                border: 1px solid #a7f3d0;
            }

            .alert-error {
                background: #fee2e2;
                color: #7f1d1d;
                border: 1px solid #fecaca;
            }

            /* ===== RESPONSIVE ===== */
            @media (max-width: 768px) {
                .container {
                    padding: 0 16px;
                }

                .btn {
                    padding: 10px 20px;
                    font-size: 0.9rem;
                }
            }
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </body>
</html>
