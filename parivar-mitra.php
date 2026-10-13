
<?php
    include 'header.php';
?>

<style>
    /* Parivar Mitra Page Design */
    .parivar-page {
        --pm-primary: #126b50;
        --pm-secondary: #e5a63b;
        --pm-text: #344054;
        font-family: inherit;
    }

    .parivar-hero {
        position: relative;
        overflow: hidden;
        padding: 75px 0 65px;
        background: linear-gradient(125deg, #073e32, #14785b);
        color: #fff;
    }

    .parivar-hero::before,
    .parivar-hero::after {
        content: "";
        position: absolute;
        border: 1px solid rgba(255,255,255,.12);
        border-radius: 50%;
        pointer-events: none;
    }

    .parivar-hero::before {
        width: 320px;
        height: 320px;
        top: -170px;
        right: 8%;
    }

    .parivar-hero::after {
        width: 220px;
        height: 220px;
        bottom: -150px;
        right: 24%;
    }

    .parivar-hero .container {
        position: relative;
        z-index: 1;
    }

    .parivar-hero .breadcrumb {
        justify-content: center;
        margin: 14px 0 0;
        padding: 0;
    }

    .parivar-hero .breadcrumb a {
        color: #e5f5ed;
        text-decoration: none;
    }

    .parivar-hero .breadcrumb li,
    .parivar-hero .breadcrumb li.active {
        color: #fff;
    }

    .parivar-hero h1 {
        color: #fff;
        font-size: clamp(34px, 5vw, 52px);
        font-weight: 800;
        letter-spacing: -.8px;
        margin: 0;
    }

    .parivar-hero .hero-subtitle {
        max-width: 620px;
        margin: 14px auto 0;
        color: #e0f1e9;
        font-size: 17px;
        line-height: 1.8;
    }

    .parivar-content {
        padding: 85px 0;
        background: #f5f8f6;
    }

    .parivar-content .content-row {
        align-items: center;
    }

    .parivar-label {
        display: inline-block;
        margin-bottom: 18px;
        padding: 8px 15px;
        border-radius: 30px;
        background: #e2f2e9;
        color: var(--pm-primary);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1.4px;
        text-transform: uppercase;
    }

    .parivar-content h2 {
        margin-bottom: 18px;
        color: #163b30;
        font-size: clamp(28px, 3vw, 39px);
        font-weight: 800;
        line-height: 1.3;
    }

    .parivar-content h2 span {
        color: var(--pm-primary);
    }

    .parivar-divider {
        width: 65px;
        height: 4px;
        margin: 0 0 25px;
        border-radius: 10px;
        background: var(--pm-secondary);
    }

    .parivar-content p {
        color: var(--pm-text);
        font-size: 16px;
        line-height: 1.95;
        margin-bottom: 22px;
    }

    .parivar-feature-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        margin: 26px 0;
        padding: 0;
        list-style: none;
    }

    .parivar-feature-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 17px 15px;
        background: #fff;
        border: 1px solid #e7eee9;
        border-radius: 12px;
        color: #263f35;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.7;
        box-shadow: 0 5px 20px rgba(21, 67, 47, .035);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .parivar-feature-list li:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(21, 67, 47, .09);
    }

    .parivar-check {
        display: inline-flex;
        flex: 0 0 25px;
        align-items: center;
        justify-content: center;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #e0f2e8;
        color: var(--pm-primary);
        font-size: 14px;
        font-weight: 800;
    }

    .parivar-image-wrap {
        position: relative;
        margin: 0 0 0 20px;
        padding: 0 0 22px 22px;
    }

    .parivar-image-wrap::before {
        content: "";
        position: absolute;
        top: 22px;
        right: 22px;
        bottom: 0;
        left: 0;
        border-radius: 22px;
        background: #dcece2;
    }

    .parivar-image-wrap img {
        position: relative;
        z-index: 1;
        display: block;
        width: 100%;
        height: auto;
        max-height: 530px;
        object-fit: cover;
        border: 7px solid #fff;
        border-radius: 22px;
        box-shadow: 0 20px 55px rgba(22, 61, 45, .14);
    }

    .parivar-image-caption {
        position: relative;
        z-index: 2;
        width: 88%;
        margin: -28px auto 0;
        padding: 17px 20px;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 10px 35px rgba(22, 61, 45, .12);
        color: #214b39;
        text-align: center;
        font-size: 14px;
        font-weight: 700;
    }

    .parivar-note {
        margin-top: 26px;
        padding: 20px 22px;
        border-left: 4px solid var(--pm-secondary);
        border-radius: 0 12px 12px 0;
        background: #fff;
    }

    .parivar-note p {
        margin: 0;
        font-size: 15px;
    }

    @media (max-width: 991px) {
        .parivar-content {
            padding: 60px 0;
        }

        .parivar-image-wrap {
            margin: 45px 0 0;
        }
    }

    @media (max-width: 575px) {
        .parivar-hero {
            padding: 55px 0 45px;
        }

        .parivar-feature-list {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .parivar-image-wrap {
            padding-left: 12px;
        }

        .parivar-content h2 {
            font-size: 29px;
        }
    }
</style>

<div role="main" class="main parivar-page">

    <!-- Page Header -->
    <section class="parivar-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Parivar Mitra</h1>

                    <p class="hero-subtitle">
                        Empowering communities through family health,
                        counselling, and grassroots entrepreneurship.
                    </p>

                    <ul class="breadcrumb breadcrumb-light d-flex">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Parivar Mitra</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="parivar-content">
        <div class="container">
            <div class="row content-row">

                <!-- Text Content -->
                <div class="col-lg-7 col-md-7">
                    <span class="parivar-label">
                        Community Development Initiative
                    </span>

                    <h2>
                        The Family Friend
                        <span>(Parivar Mitra)</span> Initiative
                    </h2>

                    <div class="parivar-divider"></div>

                    <p class="text-justify">
                        ParivarMitra&copy; as Depot Holders in Villages
                        and Urban Slums: GDI is in the process of creating
                        a network of entrepreneurs as depot holders and
                        counsellors in RNMCH+A. Literate women from their
                        respective community are recruited and trained.
                    </p>

                    <ul class="parivar-feature-list">
                        <li>
                            <span class="parivar-check">&#10003;</span>
                            <span>In line with the ASHA modules of MOHFW</span>
                        </li>

                        <li>
                            <span class="parivar-check">&#10003;</span>
                            <span>Counselling techniques</span>
                        </li>

                        <li>
                            <span class="parivar-check">&#10003;</span>
                            <span>Surveillance and data management methodologies</span>
                        </li>

                        <li>
                            <span class="parivar-check">&#10003;</span>
                            <span>Basic book keeping</span>
                        </li>
                    </ul>

                    <div class="parivar-note">
                        <p class="text-justify">
                            As they engage with GDI, they are provided with
                            a revolving fund to stock and sell OTC RH
                            products supplemented by FMCG also to enhance
                            profits.
                        </p>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-5 col-md-5">
                    <div class="parivar-image-wrap">
                        <img
                            src="img/parivar.jpg"
                            class="img-fluid"
                            alt="Parivar Mitra Community Initiative"
                            loading="lazy"
                        />

                        <div class="parivar-image-caption">
                            Global Development Initiative
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<?php
    include 'footer.php';
?>
