@extends('layouts.app')

@section('title', 'Home | Portfolio')

@section('content')
<style>
    .home-page {
        padding: clamp(24px, 4vw, 56px);
    }

    .home-hero {
        position: relative;
        display: grid;
        grid-template-columns: minmax(0, 1.15fr) minmax(320px, 0.85fr);
        gap: 28px;
        align-items: center;
        padding: clamp(28px, 4vw, 52px);
        border-radius: 32px;
        background: linear-gradient(135deg, #ffffff, #f6f6f6);
        border: 1px solid rgba(0,0,0,0.06);
        box-shadow: 0 18px 45px rgba(0,0,0,0.06);
        overflow: hidden;
    }

    .home-hero::after {
        content: "";
        position: absolute;
        right: -90px;
        top: -90px;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0,0,0,0.07), transparent 65%);
        pointer-events: none;
    }

    .home-kicker {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 16px;
        border-radius: 999px;
        background: #fff;
        border: 1px solid rgba(0,0,0,0.08);
        font-size: 0.78rem;
        font-weight: 800;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        color: #6f6f6f;
        margin-bottom: 18px;
    }

    .home-kicker::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #111;
    }

    .home-copy h1 {
        font-size: clamp(2.5rem, 5vw, 5rem);
        line-height: 0.98;
        letter-spacing: -0.05em;
        margin-bottom: 16px;
    }

    .home-copy h1 span {
        display: block;
        color: #7a7a7a;
        font-weight: 500;
        margin-top: 8px;
    }

    .home-copy p {
        max-width: 720px;
        color: #333;
        line-height: 1.9;
        font-size: 1.02rem;
        margin-bottom: 24px;
    }

    .home-highlight-row {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 28px;
    }

    .home-highlight {
        padding: 12px 16px;
        border-radius: 999px;
        background: #fff;
        border: 1px solid rgba(0,0,0,0.08);
        font-size: 0.9rem;
        font-weight: 700;
        transition: 0.3s ease;
    }

    .home-highlight:hover {
        transform: translateY(-3px);
        background: #111;
        color: #fff;
        box-shadow: 0 14px 28px rgba(0,0,0,0.12);
    }

    .home-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 24px;
    }

    .home-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 50px;
        padding: 0 22px;
        border-radius: 999px;
        font-weight: 800;
        transition: 0.3s ease;
        border: 1px solid #111;
    }

    .home-btn-primary {
        background: #111;
        color: #fff;
        box-shadow: 0 14px 30px rgba(0,0,0,0.16);
    }

    .home-btn-primary:hover {
        transform: translateY(-3px);
        background: #222;
    }

    .home-btn-secondary {
        background: #fff;
        color: #111;
    }

    .home-btn-secondary:hover {
        transform: translateY(-3px);
        background: #111;
        color: #fff;
        box-shadow: 0 14px 28px rgba(0,0,0,0.12);
    }

    .home-note {
        color: #777;
        font-size: 0.92rem;
    }

    .home-visual {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .home-photo-card {
        width: min(100%, 420px);
        padding: 16px;
        border-radius: 30px;
        background: linear-gradient(180deg, #ffffff, #f2f2f2);
        border: 1px solid rgba(0,0,0,0.08);
        box-shadow: 0 18px 45px rgba(0,0,0,0.08);
        transition: 0.35s ease;
    }

    .home-photo-card:hover {
        transform: translateY(-8px) rotate(-1deg);
        box-shadow: 0 28px 55px rgba(0,0,0,0.13);
    }

    .home-photo-card img {
        width: 100%;
        display: block;
        aspect-ratio: 4 / 5;
        object-fit: cover;
        border-radius: 22px;
        filter: grayscale(100%);
    }

    .home-floating {
        position: absolute;
        right: -8px;
        bottom: 24px;
        background: rgba(255,255,255,0.94);
        border: 1px solid rgba(0,0,0,0.08);
        border-radius: 20px;
        padding: 16px 18px;
        box-shadow: 0 16px 30px rgba(0,0,0,0.12);
        backdrop-filter: blur(8px);
    }

    .home-floating strong {
        display: block;
        margin-bottom: 4px;
        font-size: 1rem;
    }

    .home-floating span {
        color: #777;
        font-size: 0.88rem;
    }

    .home-mini-label {
        position: absolute;
        left: -10px;
        top: 18px;
        background: #111;
        color: #fff;
        border-radius: 999px;
        padding: 10px 14px;
        font-size: 0.74rem;
        font-weight: 800;
        letter-spacing: 0.12em;
    }

    .home-section {
        margin-top: 28px;
    }

    .home-preview-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 22px;
    }

    .home-preview-card {
        background: linear-gradient(180deg, #ffffff, #fafafa);
        border: 1px solid rgba(0,0,0,0.06);
        border-radius: 26px;
        padding: 24px;
        box-shadow: 0 16px 36px rgba(0,0,0,0.05);
        transition: 0.3s ease;
    }

    .home-preview-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 24px 48px rgba(0,0,0,0.1);
    }

    .home-preview-tag {
        display: inline-block;
        padding: 8px 12px;
        border-radius: 999px;
        background: #111;
        color: #fff;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 14px;
    }

    .home-preview-card h3 {
        font-size: 1.1rem;
        margin-bottom: 10px;
    }

    .home-preview-card p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 16px;
    }

    .home-preview-card a {
        font-weight: 800;
        color: #111;
    }

    .home-preview-card a:hover {
        text-decoration: underline;
    }

    @media (max-width: 1000px) {
        .home-hero {
            grid-template-columns: 1fr;
        }

        .home-copy {
            order: 2;
            text-align: center;
        }

        .home-copy p {
            margin-left: auto;
            margin-right: auto;
        }

        .home-highlight-row,
        .home-actions {
            justify-content: center;
        }

        .home-visual {
            order: 1;
        }

        .home-floating {
            right: 10px;
        }

        .home-mini-label {
            left: 10px;
        }

        .home-preview-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 640px) {
        .home-page {
            padding: 18px;
        }

        .home-hero,
        .home-preview-card {
            border-radius: 22px;
        }

        .home-actions {
            flex-direction: column;
        }

        .home-btn {
            width: 100%;
        }

        .home-floating {
            position: static;
            margin-top: 14px;
        }

        .home-mini-label {
            position: static;
            display: inline-block;
            margin-bottom: 12px;
        }
    }
</style>

<section class="home-page">
    <div class="home-hero">
        <div class="home-copy">
            <div class="home-kicker">Professional Portfolio</div>

            <h1>
                IT Support Professional
                <span>Delivering reliable technical support and user-focused solutions.</span>
            </h1>

            <p>
                I specialize in technical assistance, troubleshooting, digital platform support, and user training. My goal is to create smoother digital experiences through practical solutions, organized workflows, and responsive service.
            </p>

            <div class="home-highlight-row">
                <div class="home-highlight">Technical Support</div>
                <div class="home-highlight">User Training</div>
                <div class="home-highlight">Platform Management</div>
            </div>

            <div class="home-actions">
                <a href="{{ route('certificates') }}" class="home-btn home-btn-primary">View Certificates</a>
                <a href="{{ route('about') }}" class="home-btn home-btn-secondary">About Me</a>
                <a href="{{ route('contacts') }}" class="home-btn home-btn-secondary">Contact Me</a>
            </div>

            <div class="home-note">
                Currently focused on technical support, onboarding assistance, and creating better user experiences.
            </div>
        </div>

        <div class="home-visual">
            <div class="home-photo-card">
                <div class="home-mini-label">PORTFOLIO</div>
                <img src="{{ asset('images/profile.png') }}" alt="Arbhie Professional Photo">
                <div class="home-floating">
                    <strong>Currently</strong>
                    <span>Learning Integration Specialist</span>
                </div>
            </div>
        </div>
    </div>

    <div class="home-section">
        <div class="home-preview-grid">
            <div class="home-preview-card">
                <span class="home-preview-tag">About Me</span>
                <h3>Professional background and strengths</h3>
                <p>
                    Learn more about my experience in IT support, training, digital tools, and practical problem-solving.
                </p>
                <a href="{{ route('about') }}">Explore About Me →</a>
            </div>

            <div class="home-preview-card">
                <span class="home-preview-tag">Certificates</span>
                <h3>Continuous learning and achievements</h3>
                <p>
                    Browse my certificates from webinars, cloud learning sessions, cybersecurity events, and professional recognition.
                </p>
                <a href="{{ route('certificates') }}">View Certificates →</a>
            </div>

            <div class="home-preview-card">
                <span class="home-preview-tag">Contact</span>
                <h3>Let’s connect professionally</h3>
                <p>
                    Reach out for opportunities, collaborations, or professional conversations through email, phone, or social links.
                </p>
                <a href="{{ route('contacts') }}">Go to Contact Page →</a>
            </div>
        </div>
    </div>
</section>
@endsection