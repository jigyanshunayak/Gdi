
<?php
    include 'header.php';
?>

<style>
/* ================= GDI CAREER PAGE ================= */
.gdi-career {
    --gdi-primary: #0756b5;
    --gdi-dark: #102747;
    --gdi-accent: #18b6a4;
    --gdi-light: #f3f7fc;
    background: #ffffff;
    color: #526176;
    overflow: hidden;
}

.gdi-career * {
    box-sizing: border-box;
}

.gdi-career .career-hero {
    position: relative;
    padding: 75px 0 85px;
    background:
        radial-gradient(circle at 85% 20%, rgba(24,182,164,.20), transparent 28%),
        linear-gradient(125deg, #071d3b 0%, #0756b5 65%, #1384d5 100%);
    color: #ffffff;
    overflow: hidden;
}

.gdi-career .career-hero::before,
.gdi-career .career-hero::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(255,255,255,.13);
    border-radius: 50%;
    pointer-events: none;
}

.gdi-career .career-hero::before {
    width: 420px;
    height: 420px;
    right: -130px;
    top: -200px;
}

.gdi-career .career-hero::after {
    width: 300px;
    height: 300px;
    right: -55px;
    top: -140px;
}

.gdi-career .hero-content {
    position: relative;
    z-index: 1;
}

.gdi-career .hero-label {
    display: inline-block;
    padding: 9px 16px;
    margin-bottom: 20px;
    border: 1px solid rgba(255,255,255,.3);
    border-radius: 50px;
    background: rgba(255,255,255,.09);
    color: #d8fff7;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.gdi-career .career-hero h1 {
    margin: 0 0 20px;
    color: #ffffff;
    font-size: clamp(36px, 5vw, 57px);
    font-weight: 800;
    line-height: 1.14;
    letter-spacing: -1.5px;
}

.gdi-career .career-hero h1 span {
    color: #64f0d7;
}

.gdi-career .career-hero p {
    max-width: 650px;
    margin-bottom: 27px;
    color: #e0eafa;
    font-size: 17px;
    line-height: 1.9;
}

.gdi-career .hero-points {
    display: flex;
    flex-wrap: wrap;
    gap: 12px 22px;
    margin-top: 25px;
}

.gdi-career .hero-points span {
    color: #ffffff;
    font-size: 13px;
    font-weight: 600;
}

.gdi-career .hero-points i {
    margin-right: 7px;
    color: #64f0d7;
}

.gdi-career .career-main {
    padding: 75px 0 85px;
    background: linear-gradient(180deg, #f5f8fd 0%, #ffffff 100%);
}

.gdi-career .section-tag {
    display: inline-block;
    margin-bottom: 12px;
    color: var(--gdi-primary);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.gdi-career .section-title {
    margin-bottom: 20px;
    color: var(--gdi-dark);
    font-size: clamp(27px, 3vw, 37px);
    font-weight: 800;
    line-height: 1.25;
}

.gdi-career .section-title span {
    color: var(--gdi-primary);
}

.gdi-career .intro-text {
    color: #627187;
    font-size: 15px;
    line-height: 1.95;
}

.gdi-career .info-card {
    padding: 26px;
    margin-top: 28px;
    border: 1px solid #e7edf6;
    border-radius: 17px;
    background: #ffffff;
    box-shadow: 0 10px 35px rgba(16,39,71,.05);
}

.gdi-career .info-card h3 {
    margin: 0 0 12px;
    color: var(--gdi-dark);
    font-size: 19px;
    font-weight: 800;
}

.gdi-career .info-card p {
    margin: 0;
    font-size: 14px;
    line-height: 1.85;
}

.gdi-career .benefit-list {
    padding: 0;
    margin: 22px 0;
    list-style: none;
}

.gdi-career .benefit-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 11px 0;
    color: #33445b;
    font-size: 14px;
    line-height: 1.7;
}

.gdi-career .benefit-list i {
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 27px;
    width: 27px;
    height: 27px;
    margin-top: 1px;
    border-radius: 50%;
    background: #e1f8f3;
    color: #078c7a;
    font-size: 12px;
}

.gdi-career .email-card {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 22px;
    margin-top: 27px;
    border: 1px solid #dce9fa;
    border-radius: 15px;
    background: #edf5ff;
}

.gdi-career .email-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 46px;
    width: 46px;
    height: 46px;
    border-radius: 13px;
    background: var(--gdi-primary);
    color: #ffffff;
    font-size: 19px;
}

.gdi-career .email-card h4 {
    margin: 0 0 6px;
    color: var(--gdi-dark);
    font-size: 15px;
    font-weight: 800;
}

.gdi-career .email-card a {
    color: var(--gdi-primary);
    font-size: 14px;
    font-weight: 700;
    overflow-wrap: anywhere;
}

.gdi-career .form-card {
    padding: 35px;
    border: 1px solid #e8edf5;
    border-radius: 22px;
    background: #ffffff;
    box-shadow: 0 18px 55px rgba(19,49,88,.10);
}

.gdi-career .form-heading {
    padding-bottom: 23px;
    margin-bottom: 25px;
    border-bottom: 1px solid #edf1f7;
}

.gdi-career .form-heading h2 {
    margin: 0 0 9px;
    color: var(--gdi-dark);
    font-size: 29px;
    font-weight: 800;
}

.gdi-career .form-heading p {
    margin: 0;
    color: #748197;
    font-size: 14px;
    line-height: 1.7;
}

.gdi-career .form-group {
    margin-bottom: 20px;
}

.gdi-career .form-group label {
    display: block;
    margin-bottom: 9px;
    color: #253750;
    font-size: 13px;
    font-weight: 700;
}

.gdi-career .form-group label .required-star {
    color: #e14b58;
}

.gdi-career .form-control {
    width: 100%;
    min-height: 49px;
    padding: 12px 15px;
    border: 1px solid #dce4ef;
    border-radius: 10px;
    background: #f9fbfe;
    color: #26364b;
    font-size: 14px;
    box-shadow: none;
    transition: border-color .2s, box-shadow .2s, background .2s;
}

.gdi-career .form-control:focus {
    border-color: #3988e8;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(7,86,181,.09);
    outline: none;
}

.gdi-career textarea.form-control {
    min-height: 135px;
    resize: vertical;
}

.gdi-career .submit-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 11px;
    width: 100%;
    min-height: 53px;
    padding: 14px 22px;
    border: 0;
    border-radius: 10px;
    background: linear-gradient(100deg, #0756b5, #087ed1);
    color: #ffffff;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: .3px;
    cursor: pointer;
    transition: transform .2s, box-shadow .2s;
}

.gdi-career .submit-btn:hover {
    transform: translateY(-2px);
    color: #ffffff;
    box-shadow: 0 9px 22px rgba(7,86,181,.23);
}

.gdi-career .form-note {
    margin: 15px 0 0;
    color: #8390a3;
    font-size: 12px;
    text-align: center;
}

.gdi-career .alert {
    border-radius: 10px;
    font-size: 14px;
}

.gdi-career .career-bottom {
    padding: 29px 20px;
    background: #0b2342;
    color: #dce8f8;
    text-align: center;
}

.gdi-career .career-bottom p {
    margin: 0;
    font-size: 13px;
    line-height: 1.8;
}

@media (max-width: 991px) {
    .gdi-career .career-hero {
        padding: 55px 0 60px;
    }

    .gdi-career .career-main {
        padding: 50px 0 60px;
    }

    .gdi-career .career-info-column {
        margin-bottom: 35px;
    }
}

@media (max-width: 575px) {
    .gdi-career .form-card {
        padding: 23px 18px;
        border-radius: 16px;
    }

    .gdi-career .info-card {
        padding: 21px;
    }

    .gdi-career .career-hero h1 {
        letter-spacing: -.6px;
    }
}
</style>

<div role="main" class="main gdi-career">

    <!-- CAREER HERO -->
    <section class="career-hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-label">
                    <i class="fas fa-globe-asia mr-2"></i>
                    Global Development Initiative
                </span>

                <h1>
                    Build Your Career.<br>
                    <span>Make a Difference.</span>
                </h1>

                <p>
                    Join GDI and become part of a team committed to
                    improving lives, creating opportunities, and building
                    a healthier and more inclusive future for communities.
                </p>

                <div class="hero-points">
                    <span><i class="fas fa-check-circle"></i> Purpose-Driven Work</span>
                    <span><i class="fas fa-check-circle"></i> Professional Growth</span>
                    <span><i class="fas fa-check-circle"></i> Community Impact</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CAREER CONTENT -->
    <section class="career-main">
        <div class="container">
            <div class="row align-items-start">

                <!-- LEFT: ABOUT GDI -->
                <div class="col-lg-6 career-info-column">

                    <span class="section-tag">Your Future Starts Here</span>

                    <h2 class="section-title">
                        Join Our Team at <span>GDI</span>
                    </h2>

                    <p class="intro-text">
                        Global Development Initiative (GDI) welcomes
                        vibrant, entrepreneurial, and health-minded
                        individuals to join our growing teams. We provide
                        a professional, results-oriented, and friendly
                        environment where people can contribute to
                        improving lives around the world.
                    </p>

                    <p class="intro-text">
                        We look for people who are passionate about working
                        with Bottom of Pyramid (BoP) populations. Candidates
                        should be dynamic, self-motivated, success-driven,
                        capable of solving problems, and committed to
                        delivering quality work.
                    </p>

                    <div class="info-card">
                        <h3>
                            <i class="fas fa-bullseye mr-2"
                               style="color:#0756b5;"></i>
                            Who We Are Looking For
                        </h3>

                        <p>
                            We value people who combine professional skills
                            with compassion, responsibility, and a genuine
                            commitment to community development.
                        </p>

                        <ul class="benefit-list">
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Passion for social and community development.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Strong problem-solving and communication skills.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Honesty, integrity, and a strong work ethic.</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Commitment to quality and achieving results.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="email-card">
                        <div class="email-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>

                        <div>
                            <h4>Prefer to Email Your Resume?</h4>
                            <p class="intro-text mb-1">
                                Send your updated resume to:
                            </p>
                            <a href="mailto:bhubaneswar@gdi.co.in">
                                bhubaneswar@gdi.co.in
                            </a>
                        </div>
                    </div>

                </div>

                <!-- RIGHT: CAREER APPLICATION FORM -->
                <div class="col-lg-6">
                    <div class="form-card">

                        <div class="form-heading">
                            <span class="section-tag">Career Application</span>
                            <h2>Apply to GDI</h2>
                            <p>
                                Tell us a little about yourself and the
                                position you are interested in.
                            </p>
                        </div>

                        <form id="contactForm"
                              class="contact-form"
                              action="php/contact-form.php"
                              method="POST">

                            <div class="contact-form-success alert alert-success d-none mt-4"
                                 id="contactSuccess">
                                <strong>Success!</strong>
                                Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4"
                                 id="contactError">
                                <strong>Error!</strong>
                                There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"
                                      id="mailErrorMessage"></span>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="firstName">
                                        First Name
                                        <span class="required-star">*</span>
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           name="name"
                                           id="firstName"
                                           placeholder="Enter first name"
                                           maxlength="100"
                                           data-msg-required="Please enter First name."
                                           autocomplete="given-name"
                                           required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="lastName">
                                        Last Name
                                        <span class="required-star">*</span>
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           name="last_name"
                                           id="lastName"
                                           placeholder="Enter last name"
                                           maxlength="100"
                                           data-msg-required="Please enter Last name."
                                           autocomplete="family-name"
                                           required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="mobile">
                                        Mobile Number
                                        <span class="required-star">*</span>
                                    </label>
                                    <input type="tel"
                                           class="form-control"
                                           name="mobile"
                                           id="mobile"
                                           placeholder="Enter mobile number"
                                           maxlength="15"
                                           autocomplete="tel"
                                           data-msg-required="Please enter your Mobile Number."
                                           required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">
                                        Email Address
                                        <span class="required-star">*</span>
                                    </label>
                                    <input type="email"
                                           class="form-control"
                                           name="email"
                                           id="email"
                                           placeholder="you@example.com"
                                           maxlength="100"
                                           autocomplete="email"
                                           data-msg-required="Please enter your email address."
                                           data-msg-email="Please enter a valid email address."
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject">
                                    Position Applying For
                                    <span class="required-star">*</span>
                                </label>
                                <input type="text"
                                       class="form-control"
                                       name="subject"
                                       id="subject"
                                       placeholder="Enter the position you want to apply for"
                                       maxlength="100"
                                       data-msg-required="Please enter the position."
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="message">
                                    Message
                                    <span class="required-star">*</span>
                                </label>
                                <textarea class="form-control"
                                          name="message"
                                          id="message"
                                          rows="5"
                                          maxlength="5000"
                                          placeholder="Introduce yourself and share your experience..."
                                          data-msg-required="Please enter your message."
                                          required></textarea>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit"
                                        class="submit-btn"
                                        data-loading-text="Sending...">
                                    Submit Application
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>

                            <p class="form-note">
                                <i class="fas fa-lock mr-1"></i>
                                Please ensure your contact details are correct.
                            </p>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- BOTTOM BANNER -->
    <section class="career-bottom">
        <div class="container">
            <p>
                <strong>Global Development Initiative (GDI)</strong><br>
                Together, we can create opportunities and make a positive
                difference in people's lives.
            </p>
        </div>
    </section>

</div>

<?php
    include 'footer.php';
?>
