
<?php
    include 'header.php';
?>

<style>
    /* Mobile Medical Unit Page */
    .mobile-medical-page {
        --mm-primary: #126b50;
        --mm-dark: #163b30;
        --mm-accent: #e5a63b;
        --mm-text: #344054;
        font-family: inherit;
    }

    .mobile-medical-hero {
        position: relative;
        overflow: hidden;
        padding: 75px 0 65px;
        color: #fff;
        background: linear-gradient(125deg, #073e32, #14785b);
    }

    .mobile-medical-hero::before,
    .mobile-medical-hero::after {
        content: "";
        position: absolute;
        border: 1px solid rgba(255,255,255,.13);
        border-radius: 50%;
        pointer-events: none;
    }

    .mobile-medical-hero::before {
        width: 340px;
        height: 340px;
        top: -180px;
        right: 7%;
    }

    .mobile-medical-hero::after {
        width: 230px;
        height: 230px;
        bottom: -155px;
        right: 25%;
    }

    .mobile-medical-hero .container {
        position: relative;
        z-index: 1;
    }

    .mobile-medical-hero h1 {
        margin: 0;
        color: #fff;
        font-size: clamp(34px, 5vw, 50px);
        font-weight: 800;
        letter-spacing: -.8px;
    }

    .mobile-medical-hero .hero-description {
        max-width: 650px;
        margin: 15px auto 0;
        color: #e0f1e9;
        font-size: 17px;
        line-height: 1.8;
    }

    .mobile-medical-hero .breadcrumb {
        justify-content: center;
        margin: 18px 0 0;
        padding: 0;
    }

    .mobile-medical-hero .breadcrumb a {
        color: #e0f1e9;
        text-decoration: none;
    }

    .mobile-medical-hero .breadcrumb li,
    .mobile-medical-hero .breadcrumb li.active {
        color: #fff;
    }

    .mobile-medical-content {
        padding: 80px 0;
        background: #f5f8f6;
    }

    .mobile-medical-content .content-row {
        align-items: center;
    }

    .mobile-medical-label {
        display: inline-block;
        margin-bottom: 18px;
        padding: 8px 15px;
        border-radius: 30px;
        background: #e2f2e9;
        color: var(--mm-primary);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }

    .mobile-medical-content h2 {
        margin-bottom: 18px;
        color: var(--mm-dark);
        font-size: clamp(28px, 3vw, 39px);
        font-weight: 800;
        line-height: 1.3;
    }

    .mobile-medical-content h2 span {
        color: var(--mm-primary);
    }

    .mobile-medical-divider {
        width: 65px;
        height: 4px;
        margin-bottom: 25px;
        border-radius: 10px;
        background: var(--mm-accent);
    }

    .mobile-medical-content p {
        margin-bottom: 22px;
        color: var(--mm-text);
        font-size: 16px;
        line-height: 1.95;
    }

    .mobile-medical-staff {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
        margin: 25px 0;
        padding: 0;
        list-style: none;
    }

    .mobile-medical-staff li {
        display: flex;
        align-items: center;
        gap: 12px;
        min-height: 68px;
        padding: 15px;
        border: 1px solid #e5eee8;
        border-radius: 12px;
        background: #fff;
        color: #263f35;
        font-size: 15px;
        font-weight: 600;
        box-shadow: 0 5px 20px rgba(21, 67, 47, .04);
        transition: transform .25s ease,
                    box-shadow .25s ease;
    }

    .mobile-medical-staff li:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(21, 67, 47, .10);
    }

    .mobile-medical-staff .staff-number {
        display: inline-flex;
        flex: 0 0 34px;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 10px;
        background: #e2f2e9;
        color: var(--mm-primary);
        font-size: 14px;
        font-weight: 800;
    }

    .mobile-medical-highlight {
        margin: 28px 0;
        padding: 22px 24px;
        border-left: 4px solid var(--mm-accent);
        border-radius: 0 12px 12px 0;
        background: #fff;
        box-shadow: 0 5px 20px rgba(21, 67, 47, .04);
    }

    .mobile-medical-highlight p {
        margin: 0;
        font-size: 15px;
    }

    .mobile-medical-gallery {
        position: relative;
        padding: 0 0 22px 22px;
    }

    .mobile-medical-gallery::before {
        position: absolute;
        content: "";
        top: 20px;
        right: 20px;
        bottom: 0;
        left: 0;
        border-radius: 20px;
        background: #dcece2;
    }

    .mobile-medical-gallery img {
        position: relative;
        z-index: 1;
        display: block;
        width: 100%;
        height: auto;
        object-fit: cover;
        border: 6px solid #fff;
        border-radius: 18px;
        box-shadow: 0 12px 35px rgba(22, 61, 45, .12);
    }

    .mobile-medical-gallery img + img {
        margin-top: 18px;
    }

    .mobile-medical-gallery img:hover {
        transform: translateY(-2px);
        transition: transform .25s ease;
    }

    @media (max-width: 991px) {
        .mobile-medical-content {
            padding: 60px 0;
        }

        .mobile-medical-gallery {
            margin-top: 35px;
        }
    }

    @media (max-width: 575px) {
        .mobile-medical-hero {
            padding: 55px 0 45px;
        }

        .mobile-medical-content h2 {
            font-size: 29px;
        }

        .mobile-medical-staff {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .mobile-medical-gallery {
            padding-left: 12px;
        }

        .mobile-medical-content p {
            font-size: 15px;
        }
    }
</style>

<div role="main" class="main mobile-medical-page">

    <!-- Page Header -->
    <section class="mobile-medical-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <h1>Mobile Media Unit</h1>

                    <p class="hero-description">
                        Bringing essential healthcare services closer
                        to communities through mobile medical units.
                    </p>

                    <ul class="breadcrumb breadcrumb-light d-flex">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Mobile Media Unit</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="mobile-medical-content">
        <div class="container">
            <div class="row content-row">

                <!-- Information Section -->
                <div class="col-lg-7 col-md-7">

                    <span class="mobile-medical-label">
                        Community Healthcare
                    </span>

                    <h2>
                        Mobile <span>Medical Units</span>
                    </h2>

                    <div class="mobile-medical-divider"></div>

                    <p class="text-justify">
                        <strong>Mobile OPDs:</strong>
                        In collaboration with Tata Steel, GDI operates
                        3 mobile medical units for OPD services in their
                        mining areas of Keonjhar and Sundergarh districts
                        of Odisha. Each unit is staffed with –
                    </p>

                    <ul class="mobile-medical-staff">
                        <li>
                            <span class="staff-number">01</span>
                            <span>A MBBS doctor</span>
                        </li>

                        <li>
                            <span class="staff-number">02</span>
                            <span>A nurse</span>
                        </li>

                        <li>
                            <span class="staff-number">03</span>
                            <span>A pharmacist</span>
                        </li>

                        <li>
                            <span class="staff-number">04</span>
                            <span>A driver</span>
                        </li>
                    </ul>

                    <div class="mobile-medical-highlight">
                        <p class="text-justify">
                            The consultation and medicines are given free
                            and in case of emergencies the vehicles are
                            equipped with oxygen backup support to
                            transport the patient to the nearest health
                            facility.
                        </p>
                    </div>

                    <p class="text-justify">
                        Additionally, GDI also provides technical support
                        at mega health camps in CSR initiatives of the
                        TATAs in collaboration with the government. It
                        also acts as the standby medical unit and
                        counselling point on reproductive health for
                        other events too.
                    </p>

                </div>

                <!-- Image Gallery -->
                <div class="col-lg-5 col-md-5">

                    <div class="mobile-medical-gallery">

                        <img
                            src="img/mobile.jpg"
                            class="img-fluid"
                            alt="GDI Mobile Medical Unit"
                            loading="lazy"
                        />

                        <img
                            src="img/gdiimg (34).jpg"
                            class="img-fluid"
                            alt="GDI Healthcare Activities"
                            loading="lazy"
                        />

                    </div>

                </div>

            </div>
        </div>
    </section>

</div>

<?php
    include 'footer.php';
?>
