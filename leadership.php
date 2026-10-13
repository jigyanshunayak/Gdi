
<?php
    include 'header.php';
?>

<style>
/* ===== GDI Leadership Page ===== */
.leadership-page {
    background: #f5f8f5;
    padding-bottom: 70px;
    color: #374151;
}

.leadership-hero {
    position: relative;
    padding: 65px 0 55px;
    background: linear-gradient(135deg, #073d2b, #126b49, #174b38);
    overflow: hidden;
}

.leadership-hero::before {
    content: "";
    position: absolute;
    width: 280px;
    height: 280px;
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 50%;
    top: -140px;
    right: 8%;
}

.leadership-hero h1 {
    color: #fff;
    font-size: 40px;
    font-weight: 800;
    letter-spacing: 1px;
    margin: 0 0 14px;
}

.leadership-hero .breadcrumb {
    justify-content: center;
    background: transparent;
    margin: 0;
    padding: 0;
}

.leadership-hero .breadcrumb li,
.leadership-hero .breadcrumb li a {
    color: #e7f2eb;
    font-size: 14px;
    text-decoration: none;
}

.leadership-hero .breadcrumb li.active {
    color: #f1c75b;
}

.leadership-section {
    padding-top: 55px;
}

.leadership-heading {
    text-align: center;
    margin-bottom: 35px;
}

.leadership-heading .eyebrow {
    display: inline-block;
    color: #b28a25;
    font-size: 12px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 8px;
}

.leadership-heading h2 {
    color: #123d2d;
    font-size: 30px;
    font-weight: 800;
    margin: 0 0 14px;
}

.leadership-heading .heading-line {
    width: 65px;
    height: 4px;
    border-radius: 5px;
    background: #d4aa3d;
    margin: 0 auto;
}

.leader-card {
    max-width: 1060px;
    margin: 0 auto;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 12px 40px rgba(20, 60, 40, 0.09);
    border: 1px solid #e7eee8;
}

.leader-profile {
    background: linear-gradient(160deg, #eaf3ec, #f8faf7);
    padding: 35px 25px;
    text-align: center;
    height: 100%;
    border-right: 1px solid #e2eae3;
}

.leader-image-frame {
    display: inline-block;
    padding: 7px;
    border-radius: 18px;
    background: linear-gradient(135deg, #d5ae4b, #f6e5a5, #b58a26);
    margin-bottom: 22px;
}

.leader-image-frame img {
    display: block;
    width: 100%;
    max-width: 260px;
    height: auto;
    border-radius: 13px;
    object-fit: contain;
    background: #fff;
}

.leader-profile h3 {
    color: #123d2d;
    font-size: 22px;
    font-weight: 800;
    line-height: 1.4;
    margin: 0 0 10px;
}

.leader-role {
    display: inline-block;
    padding: 7px 16px;
    border-radius: 30px;
    background: #dcece1;
    color: #17613f;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.7px;
    text-transform: uppercase;
}

.leader-bio {
    padding: 35px 38px;
}

.leader-bio p {
    color: #4b5563;
    font-size: 15px;
    line-height: 1.9;
    text-align: justify;
    margin: 0 0 18px;
}

.leader-bio p:last-of-type {
    margin-bottom: 22px;
}

.leader-contact {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    padding: 16px 18px;
    border-left: 4px solid #d4aa3d;
    border-radius: 8px;
    background: #f4f8f3;
}

.leader-contact-label {
    color: #123d2d;
    font-weight: 800;
    font-size: 14px;
}

.leader-contact a {
    color: #176b48;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    overflow-wrap: anywhere;
}

.leader-contact a:hover {
    color: #b28a25;
    text-decoration: underline;
}

@media (max-width: 767px) {
    .leadership-hero {
        padding: 45px 0 38px;
    }

    .leadership-hero h1 {
        font-size: 32px;
    }

    .leadership-section {
        padding-top: 38px;
    }

    .leadership-heading h2 {
        font-size: 25px;
    }

    .leader-profile {
        border-right: none;
        border-bottom: 1px solid #e2eae3;
        padding: 28px 20px;
    }

    .leader-image-frame img {
        max-width: 230px;
    }

    .leader-bio {
        padding: 25px 22px;
    }

    .leader-bio p {
        font-size: 14px;
        line-height: 1.8;
    }
}
</style>

<div role="main" class="main leadership-page">

    <!-- Page Header -->
    <section class="leadership-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Leadership</h1>

                    <ul class="breadcrumb d-flex">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">&nbsp; / Leadership</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Managing Director -->
    <section class="container leadership-section">

        <div class="leadership-heading">
            <span class="eyebrow">Our Leadership</span>
            <h2>Managing Director</h2>
            <div class="heading-line"></div>
        </div>

        <div class="leader-card">
            <div class="row no-gutters">

                <!-- Profile Image and Name -->
                <div class="col-md-4">
                    <div class="leader-profile">

                        <div class="leader-image-frame">
                            <img
                                src="img/ranjan.png"
                                alt="Ranjan Panda, Managing Director"
                                class="img-fluid"
                                loading="lazy"
                            >
                        </div>

                        <h3>RANJAN PANDA</h3>

                        <span class="leader-role">
                            Managing Director
                        </span>

                    </div>
                </div>

                <!-- Biography -->
                <div class="col-md-8">
                    <div class="leader-bio">

                        <p>
                            Ranjan is a senior public health profession with
                            more than 22 years of experience in managing large
                            scale projects in India and South Asian countries.
                            He worked with one of the leading social marketing
                            and social franchising organization
                            (Janani/DKT International) of India for 12 years
                            in various positions including Deputy Director
                            Programmes. While with Janani he managed a team of
                            more than 400 people for delivering family planning
                            and reproductive health services in difficult to
                            reach areas of Bihar, Jharkhand and Madhya Pradesh.
                            His key skills includes developing public private
                            partnership models and implementing them sustainably.
                            He was associated with Futures Group
                            International/Palladium for more than 4 years in
                            different positions. He successfully implemented
                            different PPP schemes including the fixed day
                            services in public sector using resources from
                            private sector and reimbursement to private sector
                            against free sterilization service provision in
                            private sector. He was instrumental in designing
                            the flagship development impact bond project led
                            by Palladium in Rajasthan.
                        </p>

                        <p>
                            Ranjan represented Janani and Futures Group
                            International in different national and
                            international forums including the world health
                            congress, social franchisee conference etc. he
                            worked for UNFA Indonesia through Palladium on a
                            consulting assignment to design the social
                            franchising program in Yogyakarta province
                            involving private sector providers for provision
                            of primary health care services in a sustainable
                            manner.
                        </p>

                        <p>
                            His last assignment was with IPE Global as the
                            State Technical Advisor, Odisha for the USAID
                            Vriddhi Project, a flagship program on
                            strengthening RMNCH+A services in different
                            states of India.
                        </p>

                        <!-- Contact -->
                        <div class="leader-contact">
                            <span class="leader-contact-label">
                                Contact:
                            </span>

                            <a href="mailto:ranjan@gdi.co.in">
                                ranjan@gdi.co.in
                            </a>
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
