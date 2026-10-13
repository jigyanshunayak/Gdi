
<?php
    include 'header.php';
?>

<style>
    /* Board of Advisors Page */
    .gdi-advisors-page {
        --advisor-green: #126b50;
        --advisor-dark: #073e32;
        --advisor-gold: #e5a63b;
        --advisor-text: #344054;
    }

    /* Page Header */
    .gdi-advisors-hero {
        position: relative;
        overflow: hidden;
        padding: 70px 0 55px;
        background: linear-gradient(125deg, #073e32, #14785b);
    }

    .gdi-advisors-hero::before,
    .gdi-advisors-hero::after {
        content: "";
        position: absolute;
        border: 1px solid rgba(255,255,255,.14);
        border-radius: 50%;
        pointer-events: none;
    }

    .gdi-advisors-hero::before {
        width: 320px;
        height: 320px;
        top: -180px;
        right: 8%;
    }

    .gdi-advisors-hero::after {
        width: 220px;
        height: 220px;
        bottom: -150px;
        right: 25%;
    }

    .gdi-advisors-hero .container {
        position: relative;
        z-index: 1;
    }

    .gdi-advisors-hero h1 {
        margin: 0;
        color: #fff;
        font-size: clamp(34px, 5vw, 48px);
        font-weight: 800;
    }

    .gdi-advisors-hero .breadcrumb {
        display: flex;
        justify-content: center;
        margin: 16px 0 0;
        padding: 0;
    }

    .gdi-advisors-hero .breadcrumb a,
    .gdi-advisors-hero .breadcrumb li,
    .gdi-advisors-hero .breadcrumb li.active {
        color: #fff;
    }

    .gdi-advisors-hero .breadcrumb a {
        text-decoration: none;
    }

    /* Advisors Section */
    .gdi-advisors-content {
        padding: 75px 0 85px;
        background: #f5f8f6;
    }

    .gdi-advisors-heading {
        margin-bottom: 12px;
        color: var(--advisor-dark);
        font-size: clamp(29px, 4vw, 40px);
        font-weight: 800;
    }

    .gdi-advisors-heading span {
        color: var(--advisor-green);
    }

    .gdi-advisors-subtitle {
        max-width: 650px;
        margin: 18px auto 0;
        color: #68766e;
        font-size: 15px;
        line-height: 1.8;
    }

    .gdi-advisors-divider {
        width: 65px;
        height: 4px;
        margin: 20px auto 0;
        border-radius: 5px;
        background: var(--advisor-gold);
    }

    /* Advisor Cards */
    .gdi-advisor-card {
        height: 100%;
        overflow: hidden;
        border: 1px solid #e5ece7;
        border-radius: 18px;
        background: #fff;
        box-shadow: 0 10px 35px rgba(15,65,43,.06);
        transition: transform .3s ease, box-shadow .3s ease;
    }

    .gdi-advisor-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 42px rgba(15,65,43,.12);
    }

    .gdi-advisor-profile {
        padding: 30px 24px 20px;
        text-align: center;
        background: linear-gradient(180deg, #edf6f0, #fff);
        border-bottom: 1px solid #edf1ed;
    }

    .gdi-advisor-photo {
        display: block;
        width: 125px;
        height: 135px;
        margin: 0 auto 18px;
        object-fit: cover;
        object-position: center;
        border: 5px solid #fff;
        border-radius: 18px;
        box-shadow: 0 7px 22px rgba(15,65,43,.13);
    }

    .gdi-advisor-name {
        margin: 0;
        color: var(--advisor-dark);
        font-size: 19px;
        font-weight: 800;
        line-height: 1.5;
    }

    .gdi-advisor-role {
        margin-top: 8px;
        color: var(--advisor-green);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.3px;
        text-transform: uppercase;
    }

    .gdi-advisor-bio {
        padding: 25px 25px 28px;
    }

    .gdi-advisor-bio p {
        margin: 0;
        color: var(--advisor-text);
        font-size: 14px;
        line-height: 1.95;
        text-align: justify;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .gdi-advisors-content {
            padding: 55px 0 65px;
        }

        .gdi-advisor-card {
            margin-bottom: 10px;
        }
    }

    @media (max-width: 575px) {
        .gdi-advisors-hero {
            padding: 50px 0 42px;
        }

        .gdi-advisors-content {
            padding: 45px 0 55px;
        }

        .gdi-advisor-profile {
            padding: 25px 18px 18px;
        }

        .gdi-advisor-bio {
            padding: 20px;
        }

        .gdi-advisor-bio p {
            font-size: 14px;
        }
    }
</style>

<div role="main" class="main gdi-advisors-page">

    <!-- Page Header -->
    <section class="gdi-advisors-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <h1>Board of Advisors</h1>

                    <ul class="breadcrumb breadcrumb-light">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Board of Advisors</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- Advisors Section -->
    <section class="gdi-advisors-content">
        <div class="container">

            <!-- Section Heading -->
            <div class="row mb-5">
                <div class="col-12 text-center">

                    <h2 class="gdi-advisors-heading">
                        Board of <span>Advisors</span>
                    </h2>

                    <div class="gdi-advisors-divider"></div>

                    <p class="gdi-advisors-subtitle">
                        Meet the experienced professionals who contribute
                        their knowledge and expertise to Global
                        Development Initiative.
                    </p>

                </div>
            </div>

            <!-- Advisor Profiles -->
            <div class="row">

                <!-- KeertiBhusan Pradhan -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <article class="gdi-advisor-card">

                        <div class="gdi-advisor-profile">

                            <img
                                class="gdi-advisor-photo"
                                src="img/bm.jpg"
                                alt="KeertiBhusan Pradhan"
                                loading="lazy"
                            >

                            <h3 class="gdi-advisor-name">
                                KeertiBhusan Pradhan
                            </h3>

                            <div class="gdi-advisor-role">
                                Board of Advisors
                            </div>

                        </div>

                        <div class="gdi-advisor-bio">

                            <p>
                                Keeti is a healthcare management
                                professional with 25 years of experience
                                in Health care sector as a management
                                professional developing healthcare
                                services organizations and human
                                resources capacity building initiatives.

                                Currently he is a consultant and adviser
                                to organizations and institutes in
                                healthcare sector guiding, mentoring and
                                supporting with a vision to see a cohesive
                                well-coordinated healthcare ecosystem
                                which helps the humanity. He is passionate
                                in taking up challenging tasks and helping
                                them see the end goal with a purpose for
                                larger benefit to society.

                                Keerti Pradhan is passionate about
                                mentoring social enterprises in health
                                &amp; development space.
                            </p>

                        </div>

                    </article>
                </div>

                <!-- Dr. B.V.D.RAO -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <article class="gdi-advisor-card">

                        <div class="gdi-advisor-profile">

                            <img
                                class="gdi-advisor-photo"
                                src="img/bvrao.png"
                                alt="Dr. B.V.D.RAO"
                                loading="lazy"
                            >

                            <h3 class="gdi-advisor-name">
                                Dr. B.V.D.RAO
                            </h3>

                            <div class="gdi-advisor-role">
                                Board of Advisors
                            </div>

                        </div>

                        <div class="gdi-advisor-bio">

                            <p>
                                Dr. Rao, a fellow of All India Management
                                Association, has over 48 years of
                                management experience with various
                                companies in India and abroad, of which,
                                as senior management professional
                                (CEO/President) for 25 years. He worked
                                in various industries including; FMCG,
                                Entertainment Electronics, Building
                                Materials, Light Engineering, Plastic
                                Processing, Vegetable and Fruit wholesale
                                and retailing chains, Food Processing,
                                Garments, IT &amp; ITES staffing services,
                                Heavy Machinery, CNC machines, Mini
                                Turbines, Real Estate, Hospitality,
                                Education, Health/Medicare.

                                He was closely involved in management
                                movement in India through All India
                                Management Association. He has worked as
                                a Visiting/Adjunct Faculty/External
                                Examiner with many top-ranking
                                Engineering and Business Schools and
                                Universities in India. His expertise in
                                the areas of Market Research, Consumer
                                Behavior, Marketing, Sales Promotion,
                                Joint Ventures with world leaders,
                                International Business, Organization
                                Restructuring, Brand Building, People
                                Productivity, Turn Around Strategies
                                brought is success for several
                                organizations.
                            </p>

                        </div>

                    </article>
                </div>

            </div>

        </div>
    </section>

</div>

<?php
    include 'footer.php';
?>
