
<?php
    include 'header.php';
?>

<style>
/* ===== GDI Who We Are Page ===== */
.who-page {
    background: #f5f8f5;
    padding-bottom: 70px;
}

.who-hero {
    position: relative;
    overflow: hidden;
    padding: 65px 0 55px;
    background: linear-gradient(135deg, #073d2b, #126b49, #174b38);
}

.who-hero::after {
    content: "";
    position: absolute;
    width: 260px;
    height: 260px;
    border: 1px solid rgba(255,255,255,0.13);
    border-radius: 50%;
    right: 8%;
    top: -130px;
}

.who-hero h1 {
    color: #fff;
    font-size: 40px;
    font-weight: 800;
    letter-spacing: 1px;
    margin: 0 0 14px;
}

.who-hero .breadcrumb {
    background: transparent;
    padding: 0;
    margin: 0;
}

.who-hero .breadcrumb li,
.who-hero .breadcrumb li a {
    color: #e7f2eb;
    font-size: 14px;
    text-decoration: none;
}

.who-hero .breadcrumb li.active {
    color: #f1c75b;
}

.who-section {
    padding-top: 55px;
}

.who-card {
    position: relative;
    max-width: 1050px;
    margin: 0 auto;
    padding: 45px 50px;
    background: #fff;
    border: 1px solid #e5ece6;
    border-radius: 18px;
    box-shadow: 0 12px 38px rgba(20, 60, 40, 0.08);
}

.who-label {
    display: inline-block;
    color: #b28a25;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

.who-card h2 {
    color: #123d2d;
    font-size: 32px;
    font-weight: 800;
    margin: 0 0 16px;
}

.who-card h2 span {
    color: #b28a25;
}

.who-divider {
    width: 65px;
    height: 4px;
    border-radius: 5px;
    background: #d4aa3d;
    margin: 0 auto 28px;
}

.who-description {
    color: #4b5563;
    font-size: 17px;
    line-height: 2;
    text-align: justify;
    margin: 0;
}

.who-highlight {
    margin-top: 30px;
    padding: 20px 24px;
    background: #f0f6f0;
    border-left: 4px solid #d4aa3d;
    border-radius: 8px;
}

.who-highlight p {
    color: #174b38;
    font-size: 15px;
    line-height: 1.8;
    margin: 0;
}

@media (max-width: 767px) {
    .who-hero {
        padding: 45px 0 38px;
    }

    .who-hero h1 {
        font-size: 32px;
    }

    .who-section {
        padding-top: 30px;
    }

    .who-card {
        padding: 30px 22px;
        border-radius: 14px;
    }

    .who-card h2 {
        font-size: 27px;
    }

    .who-description {
        font-size: 15px;
        line-height: 1.85;
    }

    .who-highlight {
        padding: 17px;
    }
}
</style>

<div role="main" class="main who-page">

    <!-- Page Header -->
    <section class="who-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Who We Are</h1>

                    <ul class="breadcrumb d-flex justify-content-center">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">&nbsp; / Who We Are</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are Content -->
    <section class="container who-section">

        <div class="who-card text-center">

            <span class="who-label">About Global Development Initiative</span>

            <h2>Who <span>We Are</span></h2>

            <div class="who-divider"></div>

            <p class="who-description">
                We are a group of young entrepreneurs with rich experience
                in social marketing and social franchise across different
                states of India and wish to enable an environment that leads
                towards trickle down development impact on the bottom of the
                pyramid population resulting in optimum health and sustainable
                development of the poorest of the poor.
            </p>

            <div class="who-highlight">
                <p>
                    Our focus is on creating sustainable development impact
                    and improving health outcomes for underserved communities.
                </p>
            </div>

        </div>

    </section>

</div>

<?php
    include 'footer.php';
?>
