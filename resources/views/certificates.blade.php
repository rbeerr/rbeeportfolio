@extends('layouts.app')

@section('title', 'Certificates | Portfolio')

@section('content')
<style>
    .cert-page {
        padding: clamp(24px, 4vw, 56px);
    }

    .cert-hero {
        padding: clamp(28px, 4vw, 54px);
        border-radius: 32px;
        background: linear-gradient(135deg, #ffffff, #f6f6f6);
        border: 1px solid rgba(0,0,0,0.06);
        box-shadow: 0 18px 45px rgba(0,0,0,0.06);
        position: relative;
        overflow: hidden;
        margin-bottom: 28px;
    }

    .cert-hero::after {
        content: "";
        position: absolute;
        right: -80px;
        top: -80px;
        width: 240px;
        height: 240px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0,0,0,0.07), transparent 65%);
    }

    .cert-kicker {
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

    .cert-kicker::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #111;
    }

    .cert-hero h1 {
        font-size: clamp(2.3rem, 5vw, 4.7rem);
        line-height: 1;
        letter-spacing: -0.04em;
        margin-bottom: 16px;
    }

    .cert-hero h1 span {
        display: block;
        color: #7a7a7a;
        font-weight: 500;
        margin-top: 8px;
    }

    .cert-hero p {
        max-width: 820px;
        color: #333;
        line-height: 1.9;
        font-size: 1.02rem;
    }

    .cert-section {
        margin-top: 28px;
    }

    .cert-section-title {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        margin-bottom: 18px;
        flex-wrap: wrap;
    }

    .cert-section-title h2 {
        font-size: 1.35rem;
        font-weight: 800;
    }

    .cert-section-title span {
        font-size: 0.92rem;
        color: #7a7a7a;
    }

    .cert-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px;
    }

    .cert-card {
        background: linear-gradient(180deg, #ffffff, #fafafa);
        border: 1px solid rgba(0,0,0,0.06);
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 16px 36px rgba(0,0,0,0.05);
        transition: 0.35s ease;
    }

    .cert-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 24px 48px rgba(0,0,0,0.10);
    }

    .cert-image-wrap {
        display: block;
        background: #f3f3f3;
        padding: 16px;
        position: relative;
        cursor: pointer;
        overflow: hidden;
    }

    .cert-image-wrap::after {
        content: "Open";
        position: absolute;
        right: 26px;
        bottom: 26px;
        background: rgba(17,17,17,0.92);
        color: #fff;
        padding: 9px 14px;
        border-radius: 999px;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        opacity: 0;
        transform: translateY(8px);
        transition: 0.3s ease;
    }

    .cert-card:hover .cert-image-wrap::after {
        opacity: 1;
        transform: translateY(0);
    }

    .cert-image-wrap img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 18px;
        border: 1px solid rgba(0,0,0,0.05);
        transition: 0.35s ease;
    }

    .cert-card:hover .cert-image-wrap img {
        transform: scale(1.02);
    }

    .cert-body {
        padding: 22px;
    }

    .cert-tag {
        display: inline-block;
        padding: 8px 12px;
        border-radius: 999px;
        background: #111;
        color: #fff;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin-bottom: 14px;
    }

    .cert-body h3 {
        font-size: 1.08rem;
        line-height: 1.45;
        margin-bottom: 8px;
    }

    .cert-meta {
        font-size: 0.92rem;
        color: #777;
        margin-bottom: 12px;
    }

    .cert-body p {
        color: #444;
        line-height: 1.75;
        font-size: 0.95rem;
    }

    .cert-highlight {
        margin-top: 30px;
        padding: 22px 24px;
        border-radius: 24px;
        background: #111;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        flex-wrap: wrap;
    }

    .cert-highlight h3 {
        font-size: 1.08rem;
        margin-bottom: 4px;
    }

    .cert-highlight p {
        color: rgba(255,255,255,0.75);
        margin: 0;
    }

    .cert-highlight a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 48px;
        padding: 0 22px;
        border-radius: 999px;
        background: #fff;
        color: #111;
        font-weight: 800;
        transition: 0.3s ease;
    }

    .cert-highlight a:hover {
        transform: translateY(-3px);
    }

    @media (max-width: 900px) {
        .cert-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 640px) {
        .cert-page {
            padding: 18px;
        }

        .cert-hero,
        .cert-card {
            border-radius: 22px;
        }

        .cert-body {
            padding: 18px;
        }

        .cert-image-wrap::after {
            opacity: 1;
            transform: translateY(0);
            right: 20px;
            bottom: 20px;
        }
    }
</style>

<section class="cert-page">
    <div class="cert-hero">
        <div class="cert-kicker">Certificates</div>
        <h1>
            Training, webinars, and recognitions
            <span>that reflect continuous learning and professional growth.</span>
        </h1>
        <p>
            This section highlights my participation in technical webinars, cloud and data-related learning sessions,
            cybersecurity topics, customer service development, and workplace recognitions. These certificates reflect
            my commitment to continuous improvement, practical learning, and building a strong professional foundation.
        </p>
    </div>

    <div class="cert-section">
        <div class="cert-section-title">
            <h2>Professional Recognition & Customer Service</h2>
            <span>Workplace achievement and service-related learning</span>
        </div>

        <div class="cert-grid">
            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/alorica-above-and-beyond.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/alorica-above-and-beyond.jpg') }}" alt="Above and Beyond Commendation Award">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Recognition</span>
                    <h3>Above & Beyond – Commendation Award</h3>
                    <div class="cert-meta">Alorica • Week 9 Awardee</div>
                    <p>
                        A workplace recognition highlighting professionalism, politeness, and service excellence based on customer feedback.
                    </p>
                </div>
            </div>

            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/chatgpt-customer-service.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/chatgpt-customer-service.jpg') }}" alt="ChatGPT in Customer Service">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Customer Service</span>
                    <h3>ChatGPT in Customer Service</h3>
                    <div class="cert-meta">Upskill I.T. Workshop • Webinar</div>
                    <p>
                        Training focused on the use of AI tools in customer support workflows and service improvement.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="cert-section">
        <div class="cert-section-title">
            <h2>Cloud, Azure & Microsoft Learning</h2>
            <span>Technical sessions related to Azure, Teams, and serverless technologies</span>
        </div>

        <div class="cert-grid">
            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/bringing-your-apps-to-teams.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/bringing-your-apps-to-teams.jpg') }}" alt="Bringing your apps to Teams">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Microsoft</span>
                    <h3>Bringing Your Apps to Teams</h3>
                    <div class="cert-meta">Styava • April 26, 2023</div>
                    <p>
                        Participation in a technical event focused on integrating applications into Microsoft Teams environments.
                    </p>
                </div>
            </div>

            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/containers-on-azure.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/containers-on-azure.jpg') }}" alt="Containers on Azure">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Azure</span>
                    <h3>Containers on Azure</h3>
                    <div class="cert-meta">Styava.dev • May 9, 2023</div>
                    <p>
                        Learning session covering container-related concepts and deployment topics within Microsoft Azure.
                    </p>
                </div>
            </div>

            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/azure-career-path.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/azure-career-path.jpg') }}" alt="How to start your career path in Microsoft Azure">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Career Growth</span>
                    <h3>How to Start Your Career Path in Microsoft Azure</h3>
                    <div class="cert-meta">Styava.dev • May 13, 2023</div>
                    <p>
                        A career-oriented event focused on opportunities, pathways, and professional development in the Azure ecosystem.
                    </p>
                </div>
            </div>

            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/serverless-sql-azure-synapse.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/serverless-sql-azure-synapse.jpg') }}" alt="Intro to Serverless SQL in Azure Synapse">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Data & Cloud</span>
                    <h3>Intro to Serverless SQL in Azure Synapse</h3>
                    <div class="cert-meta">Styava • April 21, 2023</div>
                    <p>
                        Technical introduction to serverless SQL concepts and analytics capabilities in Azure Synapse.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="cert-section">
        <div class="cert-section-title">
            <h2>Cybersecurity & Technology Webinars</h2>
            <span>Participation in tech talks and awareness sessions</span>
        </div>

        <div class="cert-grid">
            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/cyberthreat-game-changer.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/cyberthreat-game-changer.jpg') }}" alt="Cyberthreat Game Changer">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Cybersecurity</span>
                    <h3>Cyberthreat Game Changer: A New Look at Insider Threats</h3>
                    <div class="cert-meta">University of Caloocan City • Webinar</div>
                    <p>
                        Webinar participation focused on insider threats, cyber awareness, and the importance of stronger digital security practices.
                    </p>
                </div>
            </div>

            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/journey-to-the-cyberspace.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/journey-to-the-cyberspace.jpg') }}" alt="Journey to the cyberspace">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Cybersecurity</span>
                    <h3>Journey to the Cyberspace</h3>
                    <div class="cert-meta">Styava.dev • May 3, 2023</div>
                    <p>
                        Participation in a technology-focused event discussing cybersecurity-related concepts and digital awareness.
                    </p>
                </div>
            </div>

            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/what-if-youve-been-hacked.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/what-if-youve-been-hacked.jpg') }}" alt="What if you've been hacked">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Cybersecurity</span>
                    <h3>What If... You’ve Been Hacked? A Tech Talk About Cybersecurity</h3>
                    <div class="cert-meta">Webinar Participation</div>
                    <p>
                        A cybersecurity awareness session centered on threats, response, and practical digital safety.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="cert-section">
        <div class="cert-section-title">
            <h2>Data & Analytics Learning</h2>
            <span>Foundational data-related training</span>
        </div>

        <div class="cert-grid">
            <div class="cert-card">
                <a class="cert-image-wrap" href="{{ asset('images/certificates/data-science-data-analytics-bootcamp.jpg') }}" target="_blank">
                    <img src="{{ asset('images/certificates/data-science-data-analytics-bootcamp.jpg') }}" alt="Data Science and Data Analytics Bootcamp">
                </a>
                <div class="cert-body">
                    <span class="cert-tag">Data Analytics</span>
                    <h3>Data Science & Data Analytics Bootcamp</h3>
                    <div class="cert-meta">Datamites • February 16, 2023</div>
                    <p>
                        Attendance in a bootcamp introducing data science and analytics concepts as part of technical upskilling.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="cert-highlight">
        <div>
            <h3>Want to know more about my background and experience?</h3>
            <p>Explore my About Me page or reach out through the contact section.</p>
        </div>

        <a href="{{ route('about') }}">About Me</a>
    </div>
</section>
@endsection