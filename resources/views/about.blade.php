@extends('layouts.app')

@section('title', 'About Me | Portfolio')

@section('content')
<style>
    .about-wrapper {
        padding: clamp(32px, 5vw, 64px);
    }

    .about-hero {
        padding: clamp(28px, 4vw, 56px);
        border: 1px solid rgba(0, 0, 0, 0.06);
        border-radius: 32px;
        background: linear-gradient(135deg, #ffffff, #f7f7f7);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.06);
        margin-bottom: 24px;
        position: relative;
        overflow: hidden;
    }

    .about-hero::after {
        content: "";
        position: absolute;
        top: -80px;
        right: -80px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0,0,0,0.08), transparent 65%);
    }

    .about-kicker {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 16px;
        border-radius: 999px;
        background: #ffffff;
        border: 1px solid rgba(0,0,0,0.08);
        font-size: 0.78rem;
        font-weight: 800;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        color: #6b6b6b;
        margin-bottom: 18px;
    }

    .about-kicker::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #111111;
    }

    .about-hero h1 {
        font-size: clamp(2.4rem, 5vw, 4.8rem);
        line-height: 1;
        letter-spacing: -0.04em;
        margin-bottom: 18px;
    }

    .about-hero h1 span {
        display: block;
        color: #7a7a7a;
        font-weight: 500;
        margin-top: 8px;
    }

    .about-hero p {
        max-width: 860px;
        line-height: 1.9;
        color: #333333;
        font-size: 1.03rem;
    }

    .about-grid {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 24px;
        margin-top: 24px;
    }

    .panel {
        border: 1px solid rgba(0,0,0,0.06);
        border-radius: 28px;
        background: linear-gradient(180deg, #ffffff, #fafafa);
        box-shadow: 0 18px 40px rgba(0,0,0,0.05);
        padding: 28px;
    }

    .panel-title {
        font-size: 1.25rem;
        font-weight: 800;
        margin-bottom: 18px;
    }

    .timeline {
        display: grid;
        gap: 18px;
    }

    .timeline-item {
        position: relative;
        padding: 0 0 0 22px;
        border-left: 2px solid rgba(0,0,0,0.12);
    }

    .timeline-item::before {
        content: "";
        position: absolute;
        left: -7px;
        top: 5px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #111111;
    }

    .timeline-item h3 {
        font-size: 1rem;
        margin-bottom: 6px;
    }

    .timeline-meta {
        font-size: 0.88rem;
        color: #777777;
        margin-bottom: 8px;
    }

    .timeline-item p {
        color: #3f3f3f;
        line-height: 1.75;
        font-size: 0.96rem;
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
        margin-top: 10px;
    }

    .skill-chip {
        padding: 14px 16px;
        border-radius: 18px;
        border: 1px solid rgba(0,0,0,0.08);
        background: #ffffff;
        font-weight: 700;
        color: #222222;
        transition: 0.3s ease;
    }

    .skill-chip:hover {
        transform: translateY(-4px);
        background: #111111;
        color: #ffffff;
        box-shadow: 0 14px 26px rgba(0,0,0,0.14);
    }

    .mini-stack {
        display: grid;
        gap: 16px;
        margin-top: 14px;
    }

    .info-card {
        padding: 20px;
        border-radius: 22px;
        border: 1px solid rgba(0,0,0,0.06);
        background: #ffffff;
        transition: 0.3s ease;
    }

    .info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 32px rgba(0,0,0,0.08);
    }

    .info-card h3 {
        font-size: 1rem;
        margin-bottom: 8px;
    }

    .info-card p,
    .info-card li {
        color: #444444;
        line-height: 1.75;
        font-size: 0.95rem;
    }

    .info-card ul {
        padding-left: 18px;
        margin: 0;
    }

    .cta-strip {
        margin-top: 24px;
        padding: 22px 26px;
        border-radius: 24px;
        background: #111111;
        color: #ffffff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .cta-strip h3 {
        font-size: 1.1rem;
        margin-bottom: 6px;
    }

    .cta-strip p {
        color: rgba(255,255,255,0.78);
        margin: 0;
    }

    .cta-buttons {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .cta-buttons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 48px;
        padding: 0 22px;
        border-radius: 999px;
        font-weight: 800;
        border: 1px solid #ffffff;
        transition: 0.3s ease;
    }

    .cta-buttons a:first-child {
        background: #ffffff;
        color: #111111;
    }

    .cta-buttons a:last-child {
        background: transparent;
        color: #ffffff;
    }

    .cta-buttons a:hover {
        transform: translateY(-3px);
    }

    @media (max-width: 980px) {
        .about-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 640px) {
        .skills-grid {
            grid-template-columns: 1fr;
        }

        .about-wrapper {
            padding: 18px;
        }

        .panel,
        .about-hero {
            padding: 22px;
            border-radius: 24px;
        }
    }
</style>

<section class="about-wrapper">
    <div class="about-hero">
        <div class="about-kicker">About Me</div>
        <h1>
            Building reliable support systems
            <span>through technical service, training, and practical problem-solving.</span>
        </h1>
        <p>
            I am Arbhie C. Menor, an IT support professional focused on technical assistance, user training,
            digital platform support, and service delivery. My work centers on helping people use systems more
            effectively, resolving issues clearly and efficiently, and improving the user experience through
            organized, responsive, and user-friendly support.
        </p>
    </div>

    <div class="about-grid">
        <div class="panel">
            <div class="panel-title">Experience Journey</div>

            <div class="timeline">
                <div class="timeline-item">
                    <h3>Learning Integration Specialist</h3>
                    <div class="timeline-meta">DIWA Learning Systems Inc. (Genyo e-Learning) • April 2025 – Present</div>
                    <p>
                        Deliver remote and onsite technical support, conduct training and onboarding sessions,
                        troubleshoot platform and account concerns, and coordinate with teams to resolve
                        escalations while maintaining reports and documentation.
                    </p>
                </div>

                <div class="timeline-item">
                    <h3>Customer Service Agent</h3>
                    <div class="timeline-meta">Alorica (Amazon Retail Account) • August 2024 – March 2025</div>
                    <p>
                        Supported customers through voice and digital channels, resolved order and service issues,
                        and maintained accurate documentation while meeting performance and response targets.
                    </p>
                </div>

                <div class="timeline-item">
                    <h3>IT Support Intern</h3>
                    <div class="timeline-meta">Mariano Marcos Memorial Hospital &amp; Medical Center • September 2023 – December 2023</div>
                    <p>
                        Assisted with hardware, software, and networking concerns, responded to service requests,
                        maintained support logs, and developed a basic medical records queuing system using
                        PHP (Laravel) and MySQL.
                    </p>
                </div>

                <div class="timeline-item">
                    <h3>Administrative Assistant</h3>
                    <div class="timeline-meta">Ilocos Norte Electric Cooperative (INEC) • February 2020</div>
                    <p>
                        Supported administrative operations, attendance tracking, office coordination,
                        and records management processes.
                    </p>
                </div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-title">Core Skills</div>

            <div class="skills-grid">
                <div class="skill-chip">Technical Support</div>
                <div class="skill-chip">User Training</div>
                <div class="skill-chip">Remote Assistance</div>
                <div class="skill-chip">Onsite Support</div>
                <div class="skill-chip">Troubleshooting</div>
                <div class="skill-chip">Documentation</div>
                <div class="skill-chip">CRM &amp; Ticketing</div>
                <div class="skill-chip">Cross-team Coordination</div>
                <div class="skill-chip">PHP / Laravel</div>
                <div class="skill-chip">MySQL</div>
                <div class="skill-chip">HTML / CSS</div>
                <div class="skill-chip">Git, Canva, Figma</div>
            </div>

            <div class="mini-stack">
                <div class="info-card">
                    <h3>Education</h3>
                    <p>
                        Bachelor of Science in Information Technology<br>
                        Mariano Marcos State University • 2020 – 2024
                    </p>
                </div>

                <div class="info-card">
                    <h3>Highlights</h3>
                    <ul>
                        <li>Dean’s Lister (2020 – 2024)</li>
                        <li>Scholastic Award (With Distinction)</li>
                        <li>Student Council – Year Level Representative (2022 – 2024)</li>
                    </ul>
                </div>

                <div class="info-card">
                    <h3>Achievements</h3>
                    <ul>
                        <li>QOMPETE National Student Startup Challenge (2024) – Top 50 Qualifier</li>
                        <li>Research Colloquium (2024) – 3rd Place</li>
                        <li>IT Society Quiz Bowl (2021) – 2nd Place</li>
                        <li>Leadership Excellence Award</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-strip">
        <div>
            <h3>Want to see my credentials and work background?</h3>
            <p>Explore my certificates and get in touch for opportunities or collaboration.</p>
        </div>

        <div class="cta-buttons">
            <a href="{{ route('certificates') }}">View Certificates</a>
            <a href="{{ route('contacts') }}">Contact Me</a>
        </div>
    </div>
</section>
@endsection