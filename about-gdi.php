
<?php
    include 'header.php';
?>

<style>
    /* About GDI Page */
    .about-gdi-page {
        --gdi-primary: #126b50;
        --gdi-dark: #073e32;
        --gdi-gold: #e5a63b;
        --gdi-text: #344054;
    }

    /* Hero Banner */
    .about-gdi-hero {
        position: relative;
        overflow: hidden;
        padding: 75px 0 65px;
        background: linear-gradient(125deg, #073e32, #14785b);
        color: #fff;
    }

    .about-gdi-hero::before,
    .about-gdi-hero::after {
        position: absolute;
        content: "";
        border: 1px solid rgba(255,255,255,.14);
        border-radius: 50%;
        pointer-events: none;
    }

    .about-gdi-hero::before {
        width: 330px;
        height: 330px;
        top: -180px;
        right: 8%;
    }

    .about-gdi-hero::after {
        width: 230px;
        height: 230px;
        bottom: -160px;
        right: 24%;
    }

    .about-gdi-hero .container {
        position: relative;
        z-index: 1;
    }

    .about-gdi-hero h1 {
        margin: 0;
        color: #fff;
        font-size: clamp(35px, 5vw, 52px);
        font-weight: 800;
        letter-spacing: -.8px;
    }

    .about-gdi-hero .breadcrumb {
        display: flex;
        justify-content: center;
        margin: 18px 0 0;
        padding: 0;
    }

    .about-gdi-hero .breadcrumb a {
        color: #e0f1e9;
        text-decoration: none;
    }

    .about-gdi-hero .breadcrumb li,
    .about-gdi-hero .breadcrumb li.active {
        color: #fff;
    }

    /* About Content */
    .about-gdi-content {
        padding: 85px 0;
        background: #f5f8f6;
    }

    .about-gdi-label {
        display: inline-block;
        margin-bottom: 16px;
        padding: 8px 16px;
        border-radius: 30px;
        background: #e2f2e9;
        color: var(--gdi-primary);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1.5px;
    }

    .about-gdi-content h2 {
        margin-bottom: 18px;
        color: var(--gdi-dark);
        font-size: clamp(30px, 4vw, 42px);
        font-weight: 800;
        line-height: 1.3;
    }

    .about-gdi-content h2 span {
        color: var(--gdi-primary);
    }

    .about-gdi-divider {
        width: 70px;
        height: 4px;
        margin: 0 auto 30px;
        border-radius: 5px;
        background: var(--gdi-gold);
    }

    .about-gdi-description {
        max-width: 900px;
        margin: 0 auto;
        padding: 35px;
        border: 1px solid #e6eee8;
        border-radius: 18px;
        background: #fff;
        box-shadow: 0 12px 40px rgba(15,65,43,.06);
    }

    .about-gdi-description p {
        margin: 0;
        color: var(--gdi-text);
        font-size: 17px;
        line-height: 2;
        text-align: justify;
    }

    .about-gdi-description strong {
        color: var(--gdi-primary);
    }

    .about-gdi-bottom-line {
        width: 55px;
        height: 3px;
        margin-top: 25px;
        border-radius: 5px;
        background: var(--gdi-gold);
    }

    @media (max-width: 767px) {
        .about-gdi-hero {
            padding: 55px 0 45px;
        }

        .about-gdi-content {
            padding: 55px 0;
        }

        .about-gdi-description {
            padding: 23px;
        }

        .about-gdi-description p {
            font-size: 15px;
            line-height: 1.9;
        }
    }
</style>

<div role="main" class="main about-gdi-page">

    <!-- Page Header -->
    <section class="about-gdi-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <h1>About GDI</h1>

                    <ul class="breadcrumb breadcrumb-light">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">About GDI</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- About GDI Content -->
    <section class="about-gdi-content">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 text-center">

                    <span class="about-gdi-label">
                        WHO WE ARE
                    </span>

                    <h2>
                        ABOUT <span>GDI</span>
                    </h2>

                    <div class="about-gdi-divider"></div>

                    <div class="about-gdi-description">

                        <p>
                            <strong>GLOBAL DEVELOPMENT INITITIATIVE (GDI)</strong>
                            is an Indian Non-Profit company, registered
                            under section 8 of company ACT 2013, Govt Of
                            India. The company is headquartered at
                            Bhubaneswar, Odisha with state offices at
                            Indore (Madhya Pradesh) and Kolkata
                            (West Bengal).
                        </p>

                        <div class="about-gdi-bottom-line"></div>

                    </div>

                </div>
            </div>

        </div>
    </section>

</div>

<?php
    include 'footer.php';
?>
