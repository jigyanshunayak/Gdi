
<?php
    include 'header.php';
?>

<style>
/* ===== GDI Mission & Vision Page ===== */
.mv-page {
    background: #f5f8f5;
    padding-bottom: 70px;
}

.mv-hero {
    position: relative;
    overflow: hidden;
    padding: 65px 0 55px;
    background: linear-gradient(135deg, #073d2b, #126b49, #174b38);
}

.mv-hero::after {
    content: "";
    position: absolute;
    width: 260px;
    height: 260px;
    border: 1px solid rgba(255,255,255,0.13);
    border-radius: 50%;
    right: 8%;
    top: -130px;
}

.mv-hero h1 {
    position: relative;
    z-index: 1;
    color: #fff;
    font-size: 40px;
    font-weight: 800;
    letter-spacing: 1px;
    margin: 0 0 14px;
}

.mv-hero .breadcrumb {
    position: relative;
    z-index: 1;
    justify-content: center;
    background: transparent;
    padding: 0;
    margin: 0;
}

.mv-hero .breadcrumb li,
.mv-hero .breadcrumb li a {
    color: #e7f2eb;
    font-size: 14px;
    text-decoration: none;
}

.mv-hero .breadcrumb li.active {
    color: #f1c75b;
}

.mv-section {
    padding-top: 45px;
}

.mv-card {
    display: flex;
    align-items: center;
    background: #fff;
    border: 1px solid #e5ece6;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(20, 60, 40, 0.08);
    margin-bottom: 30px;
}

.mv-content {
    padding: 38px 42px;
}

.mv-label {
    display: inline-block;
    color: #b28a25;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.mv-content h2 {
    color: #123d2d;
    font-size: 30px;
    font-weight: 800;
    margin: 0 0 15px;
}

.mv-line {
    width: 62px;
    height: 4px;
    border-radius: 5px;
    background: #d4aa3d;
    margin-bottom: 24px;
}

.mv-content p {
    color: #374b40;
    font-size: 21px;
    font-weight: 700;
    line-height: 1.8;
    margin: 0;
}

.mv-image {
    height: 100%;
    min-height: 280px;
    padding: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(145deg, #e8f2e9, #f8f5e9);
}

.mv-image img {
    display: block;
    width: 100%;
    max-width: 360px;
    max-height: 320px;
    object-fit: contain;
    border-radius: 12px;
    transition: transform 0.3s ease;
}

.mv-image img:hover {
    transform: scale(1.025);
}

.mv-card-reverse .mv-image {
    order: 1;
}

.mv-card-reverse .mv-content {
    order: 2;
}

@media (max-width: 767px) {
    .mv-hero {
        padding: 45px 0 38px;
    }

    .mv-hero h1 {
        font-size: 31px;
    }

    .mv-section {
        padding-top: 28px;
    }

    .mv-card {
        display: flex;
        flex-direction: column;
        margin-bottom: 24px;
    }

    .mv-card-reverse .mv-image,
    .mv-card-reverse .mv-content {
        order: initial;
    }

    .mv-content {
        padding: 28px 23px;
        width: 100%;
    }

    .mv-content h2 {
        font-size: 26px;
    }

    .mv-content p {
        font-size: 18px;
        line-height: 1.7;
    }

    .mv-image {
        width: 100%;
        min-height: 220px;
        padding: 20px;
    }

    .mv-image img {
        max-height: 260px;
    }
}
</style>

<div role="main" class="main mv-page">

    <!-- Page Header -->
    <section class="mv-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Mission &amp; Vision</h1>

                    <ul class="breadcrumb d-flex">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">&nbsp; / Mission &amp; Vision</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container mv-section">

        <!-- Our Mission -->
        <section class="mv-card">
            <div class="col-md-7 mv-content">
                <span class="mv-label">Our Purpose</span>
                <h2>OUR MISSION</h2>
                <div class="mv-line"></div>

                <p>
                    Innovations for the bottom of pyramid population
                    to enable sustainable development
                </p>
            </div>

            <div class="col-md-5 mv-image">
                <img
                    src="img/mission.PNG"
                    alt="Our Mission"
                    loading="lazy"
                >
            </div>
        </section>

        <!-- Our Vision -->
        <section class="mv-card mv-card-reverse">
            <div class="col-md-5 mv-image">
                <img
                    src="img/vission.jpg"
                    alt="Our Vision"
                    loading="lazy"
                >
            </div>

            <div class="col-md-7 mv-content">
                <span class="mv-label">Our Aspiration</span>
                <h2>OUR VISION</h2>
                <div class="mv-line"></div>

                <p>
                    Health is wealth – Be healthy to be wealthy
                </p>
            </div>
        </section>

    </div>

</div>

<?php
    include 'footer.php';
?>
