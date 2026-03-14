<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Arbhie Menor portfolio showcasing IT support experience, certifications, technical skills, and professional background.">
    <meta property="og:title" content="Arbhie Menor | Portfolio">
    <meta property="og:description" content="IT Support Professional portfolio with certifications, experience, and contact information.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://rbeeportfolio.onrender.com/">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>@yield('title', 'Portfolio')</title>
    <style>
        :root {
            --black: #0b0b0b;
            --charcoal: #161616;
            --soft-black: #222222;
            --white: #ffffff;
            --off-white: #f5f5f5;
            --light-gray: #d9d9d9;
            --mid-gray: #7a7a7a;
            --shadow: 0 20px 60px rgba(0, 0, 0, 0.10);
            --shadow-hover: 0 24px 70px rgba(0, 0, 0, 0.16);
            --radius-xl: 32px;
            --radius-lg: 22px;
            --transition: 0.35s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Inter, Arial, Helvetica, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(0,0,0,0.04), transparent 28%),
                radial-gradient(circle at bottom right, rgba(0,0,0,0.05), transparent 24%),
                var(--white);
            color: var(--black);
            min-height: 100vh;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .page-shell {
            width: min(1280px, calc(100% - 32px));
            margin: 16px auto;
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(0, 0, 0, 0.06);
            border-radius: 36px;
            box-shadow: var(--shadow);
            backdrop-filter: blur(10px);
            overflow: hidden;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 22px clamp(20px, 4vw, 56px);
            background: rgba(255,255,255,0.88);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1rem;
            font-weight: 800;
            letter-spacing: 0.22em;
            text-transform: uppercase;
        }

        .logo-badge {
            width: 42px;
            height: 42px;
            border-radius: 14px;
            display: grid;
            place-items: center;
            background: var(--black);
            color: var(--white);
            font-weight: 800;
            box-shadow: 0 12px 24px rgba(0,0,0,0.16);
            transition: transform var(--transition);
        }

        .logo:hover .logo-badge {
            transform: translateY(-2px) rotate(-4deg);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .nav-links a {
            position: relative;
            padding: 12px 16px;
            border-radius: 999px;
            font-size: 0.92rem;
            font-weight: 700;
            letter-spacing: 0.03em;
            transition: var(--transition);
        }

        .nav-links a:hover,
        .nav-links a.active {
            background: var(--black);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.14);
        }

        .hero {
            position: relative;
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(320px, 0.9fr);
            gap: clamp(28px, 4vw, 60px);
            align-items: center;
            padding: clamp(36px, 6vw, 88px) clamp(20px, 4vw, 56px) clamp(42px, 6vw, 88px);
        }

        .hero::before {
            content: "";
            position: absolute;
            right: -120px;
            top: 50px;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0,0,0,0.08), transparent 65%);
            pointer-events: none;
        }

        .hero-copy {
            position: relative;
            z-index: 1;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 16px;
            border: 1px solid rgba(0,0,0,0.08);
            border-radius: 999px;
            background: rgba(255,255,255,0.75);
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            font-size: 0.82rem;
            letter-spacing: 0.18em;
            font-weight: 800;
            color: var(--mid-gray);
            margin-bottom: 22px;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--black);
        }

        .hero h1 {
            font-size: clamp(2.7rem, 5vw, 5.1rem);
            line-height: 0.98;
            font-weight: 900;
            letter-spacing: -0.05em;
            margin-bottom: 22px;
        }

        .hero h1 span {
            display: block;
            color: var(--mid-gray);
            font-weight: 500;
            margin-top: 10px;
            letter-spacing: -0.03em;
        }

        .hero p {
            max-width: 650px;
            font-size: clamp(1rem, 1.4vw, 1.08rem);
            line-height: 1.9;
            color: #333333;
            margin-bottom: 30px;
        }

        .hero-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-bottom: 34px;
        }

        .stat-card {
            min-width: 150px;
            padding: 16px 18px;
            border-radius: 18px;
            background: linear-gradient(180deg, #ffffff, #f8f8f8);
            border: 1px solid rgba(0,0,0,0.06);
            box-shadow: 0 12px 28px rgba(0,0,0,0.05);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-hover);
        }

        .stat-card strong {
            display: block;
            font-size: 1.1rem;
            margin-bottom: 6px;
        }

        .stat-card span {
            font-size: 0.88rem;
            color: var(--mid-gray);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 52px;
            padding: 0 24px;
            border-radius: 999px;
            font-size: 0.95rem;
            font-weight: 800;
            transition: var(--transition);
            border: 1px solid var(--black);
            cursor: pointer;
        }

        .btn-primary {
            background: var(--black);
            color: var(--white);
            box-shadow: 0 14px 32px rgba(0,0,0,0.18);
        }

        .btn-primary:hover {
            transform: translateY(-3px) scale(1.01);
            background: var(--soft-black);
        }

        .btn-secondary {
            background: var(--white);
            color: var(--black);
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            background: var(--black);
            color: var(--white);
            box-shadow: 0 12px 26px rgba(0,0,0,0.14);
        }

        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100%;
        }

        .photo-frame {
            position: relative;
            width: min(100%, 440px);
            padding: 18px;
            border-radius: var(--radius-xl);
            background: linear-gradient(145deg, #ffffff, #efefef);
            border: 1px solid rgba(0,0,0,0.08);
            box-shadow: var(--shadow);
            transition: var(--transition);
            isolation: isolate;
        }

        .photo-frame::before,
        .photo-frame::after {
            content: "";
            position: absolute;
            inset: auto;
            border-radius: 28px;
            z-index: -1;
        }

        .photo-frame::before {
            width: 85%;
            height: 85%;
            right: -16px;
            bottom: -18px;
            background: rgba(0,0,0,0.06);
        }

        .photo-frame::after {
            width: 65%;
            height: 65%;
            left: -12px;
            top: -12px;
            border: 1px dashed rgba(0,0,0,0.18);
        }

        .photo-frame:hover {
            transform: translateY(-8px) rotate(-1deg);
            box-shadow: var(--shadow-hover);
        }

        .photo-frame img {
            width: 100%;
            aspect-ratio: 4 / 5;
            object-fit: cover;
            border-radius: 24px;
            display: block;
            filter: grayscale(100%);
            transition: transform 0.45s ease;
        }

        .photo-frame:hover img {
            transform: scale(1.02);
        }

        .floating-card {
            position: absolute;
            right: -16px;
            bottom: 20px;
            padding: 16px 18px;
            border-radius: 20px;
            background: rgba(255,255,255,0.94);
            border: 1px solid rgba(0,0,0,0.08);
            box-shadow: 0 18px 35px rgba(0,0,0,0.12);
            backdrop-filter: blur(12px);
            transition: var(--transition);
        }

        .floating-card:hover {
            transform: translateY(-4px);
        }

        .floating-card strong {
            display: block;
            font-size: 1rem;
            margin-bottom: 4px;
        }

        .floating-card span {
            font-size: 0.85rem;
            color: var(--mid-gray);
        }

        .mini-label {
            position: absolute;
            top: 24px;
            left: -18px;
            padding: 10px 14px;
            border-radius: 999px;
            background: var(--black);
            color: var(--white);
            font-size: 0.78rem;
            letter-spacing: 0.14em;
            font-weight: 800;
            box-shadow: 0 12px 28px rgba(0,0,0,0.18);
        }

        .scroll-note {
            margin-top: 24px;
            color: var(--mid-gray);
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .scroll-note::before {
            content: "";
            width: 32px;
            height: 1px;
            background: rgba(0,0,0,0.28);
        }

        @media (max-width: 1100px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .hero-copy {
                order: 2;
                text-align: center;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-stats,
            .hero-actions {
                justify-content: center;
            }

            .hero-visual {
                order: 1;
            }

            .floating-card {
                right: 10px;
                bottom: 14px;
            }

            .mini-label {
                left: 10px;
            }

            .scroll-note {
                justify-content: center;
            }
        }

        @media (max-width: 760px) {
            .page-shell {
                width: min(100% - 18px, 100%);
                margin: 10px auto;
                border-radius: 24px;
            }

            .navbar {
                flex-direction: column;
                align-items: stretch;
                gap: 14px;
            }

            .logo {
                justify-content: center;
            }

            .nav-links {
                justify-content: center;
            }

            .nav-links a {
                padding: 10px 14px;
                font-size: 0.86rem;
            }

            .hero {
                padding-top: 26px;
            }

            .hero h1 {
                font-size: clamp(2.2rem, 10vw, 3.3rem);
            }

            .stat-card {
                width: 100%;
            }

            .hero-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .floating-card {
                position: static;
                margin-top: 16px;
            }

            .mini-label {
                position: static;
                display: inline-block;
                margin-bottom: 12px;
            }

            .photo-frame {
                padding: 14px;
            }
        }

        @media (max-width: 480px) {
            .page-shell {
                border-radius: 20px;
            }

            .navbar {
                padding-left: 16px;
                padding-right: 16px;
            }

            .hero {
                padding-left: 16px;
                padding-right: 16px;
                padding-bottom: 28px;
            }

            .eyebrow {
                letter-spacing: 0.11em;
                font-size: 0.74rem;
            }
        }
    </style>
</head>
<body>
    <div class="page-shell">
        <nav class="navbar">
            <a href="{{ route('home') }}" class="logo">
                <span class="logo-badge">A</span>
                <span>Arbhie</span>
            </a>

            <div class="nav-links">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
                <a href="{{ route('certificates') }}" class="{{ request()->routeIs('certificates') ? 'active' : '' }}">CERTIFICATES</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">ABOUT ME</a>
                <a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'active' : '' }}">CONTACTS</a>
            </div>
        </nav>

        @yield('content')
    </div>
</body>
</html>
