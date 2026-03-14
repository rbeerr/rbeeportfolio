@extends('layouts.app')

@section('title', 'Contact | Portfolio')

@section('content')

<style>
.contact-page{
    padding:clamp(24px,4vw,56px);
}

.contact-hero{
    padding:clamp(32px,4vw,56px);
    border-radius:32px;
    background:linear-gradient(135deg,#ffffff,#f6f6f6);
    border:1px solid rgba(0,0,0,0.06);
    box-shadow:0 18px 45px rgba(0,0,0,0.06);
    margin-bottom:40px;
}

.contact-kicker{
    display:inline-flex;
    align-items:center;
    gap:10px;
    padding:10px 16px;
    border-radius:999px;
    background:#fff;
    border:1px solid rgba(0,0,0,0.08);
    font-size:.78rem;
    font-weight:800;
    letter-spacing:.16em;
    text-transform:uppercase;
    color:#6f6f6f;
    margin-bottom:18px;
}

.contact-kicker::before{
    content:"";
    width:8px;
    height:8px;
    border-radius:50%;
    background:#111;
}

.contact-hero h1{
    font-size:clamp(2.3rem,5vw,4.5rem);
    line-height:1;
    letter-spacing:-0.04em;
    margin-bottom:16px;
}

.contact-hero span{
    display:block;
    color:#7a7a7a;
    margin-top:8px;
}

.contact-hero p{
    max-width:700px;
    color:#333;
    line-height:1.9;
}

.contact-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:24px;
    margin-top:30px;
}

.contact-card{
    background:#fff;
    border:1px solid rgba(0,0,0,0.06);
    border-radius:24px;
    padding:26px;
    box-shadow:0 16px 36px rgba(0,0,0,0.05);
    transition:.3s ease;
}

.contact-card:hover{
    transform:translateY(-6px);
    box-shadow:0 24px 48px rgba(0,0,0,0.10);
}

.contact-card h3{
    display:flex;
    align-items:center;
    font-size:1.1rem;
    margin-bottom:12px;
    gap:12px;
}

.contact-card i{
    width:38px;
    height:38px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    background:#111;
    color:#fff;
    border-radius:10px;
    font-size:14px;
    flex-shrink:0;
}

.contact-card p{
    color:#555;
    line-height:1.8;
}

.contact-link{
    display:inline-block;
    margin-top:12px;
    font-weight:700;
    color:#111;
    transition:.25s ease;
}

.contact-link:hover{
    transform:translateX(4px);
}

.contact-footer{
    margin-top:40px;
    padding:26px;
    background:#111;
    color:#fff;
    border-radius:24px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:16px;
}

.contact-footer h3{
    margin-bottom:6px;
}

.contact-footer p{
    color:rgba(255,255,255,.7);
    margin:0;
}

.contact-footer a{
    background:#fff;
    color:#111;
    padding:12px 20px;
    border-radius:999px;
    font-weight:700;
    transition:.3s ease;
}

.contact-footer a:hover{
    transform:translateY(-3px);
}

@media(max-width:900px){
    .contact-grid{
        grid-template-columns:1fr;
    }
}
</style>

<section class="contact-page">

    <div class="contact-hero">
        <div class="contact-kicker">Contact</div>

        <h1>
            Let's connect
            <span>I'm open to opportunities, collaborations, and conversations.</span>
        </h1>

        <p>
            If you would like to discuss opportunities, collaborations,
            or simply connect professionally, feel free to reach out
            through any of the channels below.
        </p>
    </div>

    <div class="contact-grid">

        <div class="contact-card">
            <h3>
                <i class="fa-solid fa-envelope"></i>
                Email
            </h3>

            <p>
                arbhiemenor@gmail.com<br>
                menorarbhie@gmail.com
            </p>

            <a class="contact-link" href="mailto:arbhiemenor@gmail.com">
                Send an email →
            </a>
        </div>

        <div class="contact-card">
            <h3>
                <i class="fa-solid fa-phone"></i>
                Phone
            </h3>

            <p>
                +(63) 954 287 8975<br>
                +(63) 992 974 7313
            </p>

            <a class="contact-link" href="tel:+639542878975">
                Call primary number →
            </a>
        </div>

        <div class="contact-card">
            <h3>
                <i class="fa-brands fa-linkedin-in"></i>
                LinkedIn
            </h3>

            <p>
                Connect with me professionally on LinkedIn.
            </p>

            <a class="contact-link"
               href="https://www.linkedin.com/in/arbhie-menor-a69a46286/"
               target="_blank">
                View LinkedIn →
            </a>
        </div>

        <div class="contact-card">
            <h3>
                <i class="fa-brands fa-facebook-f"></i>
                Facebook
            </h3>

            <p>
                You can also reach me through Facebook.
            </p>

            <a class="contact-link"
               href="https://www.facebook.com/arbhmnr/"
               target="_blank">
                Open Facebook →
            </a>
        </div>

    </div>

    <div class="contact-footer">
        <div>
            <h3>Looking for collaboration or opportunities?</h3>
            <p>Feel free to send me a message anytime.</p>
        </div>

        <a href="mailto:arbhiemenor@gmail.com">
            Send Email
        </a>
    </div>

</section>

@endsection