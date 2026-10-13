<?php

    include 'header.php';
?>
<style>
/* GDI Social Marketing page — frontend styling only */
.gdi-social-marketing {
    --gdi-blue: #123f79;
    --gdi-blue-dark: #0b2850;
    --gdi-blue-light: #edf5ff;
    --gdi-gold: #e5ad45;
    color: #253247;
}
.gdi-social-marketing .page-header {
    position: relative;
    overflow: hidden;
    padding: 76px 0 54px;
    background: linear-gradient(125deg, #0b2850 0%, #14559a 55%, #287fc0 100%);
    border: 0;
}
.gdi-social-marketing .page-header:before {
    content: "";
    position: absolute;
    width: 330px;
    height: 330px;
    right: -100px;
    top: -170px;
    border: 1px solid rgba(255,255,255,.18);
    border-radius: 50%;
    box-shadow: 0 0 0 35px rgba(255,255,255,.035), 0 0 0 75px rgba(255,255,255,.025);
}
.gdi-social-marketing .page-header h1 {
    position: relative;
    color: #fff;
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 800;
    letter-spacing: .3px;
    text-shadow: 0 5px 18px rgba(0,0,0,.18);
}
.gdi-social-marketing .breadcrumb {
    position: relative;
    margin: 10px 0 0;
}
.gdi-social-marketing .breadcrumb a,
.gdi-social-marketing .breadcrumb li {
    color: rgba(255,255,255,.88);
}
.gdi-social-marketing > section:not(.page-header) {
    padding: 64px 0;
    background: #f5f8fc;
}
.gdi-social-marketing h2 {
    color: var(--gdi-blue-dark);
    font-size: clamp(1.8rem, 3vw, 2.35rem);
    line-height: 1.25;
    margin-bottom: 20px;
}
.gdi-social-marketing h2 strong {
    font-weight: 800;
}
.gdi-social-marketing h2:after {
    content: "";
    display: block;
    width: 62px;
    height: 4px;
    margin-top: 15px;
    border-radius: 5px;
    background: var(--gdi-gold);
}
.gdi-social-marketing p,
.gdi-social-marketing li {
    color: #45546a;
    font-size: 1.04rem;
    line-height: 1.9;
}
.gdi-social-marketing p {
    margin-bottom: 18px;
}
.gdi-social-marketing ul {
    padding-left: 24px;
    margin: 12px 0 24px;
}
.gdi-social-marketing li {
    padding: 4px 0 4px 5px;
}
.gdi-social-marketing li::marker {
    color: #2479bb;
}
.gdi-social-marketing img.img-fluid {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
    margin-bottom: 18px;
    border-radius: 15px;
    box-shadow: 0 12px 30px rgba(20,48,84,.13);
    transition: transform .25s ease, box-shadow .25s ease;
}
.gdi-social-marketing img.img-fluid:hover {
    transform: translateY(-3px);
    box-shadow: 0 17px 36px rgba(20,48,84,.19);
}
.gdi-social-marketing h3 {
    color: var(--gdi-blue-dark);
    font-size: clamp(1.35rem, 2.4vw, 1.8rem);
    line-height: 1.4;
    margin-bottom: 24px;
    font-weight: 800;
}
.gdi-social-marketing .container {
    position: relative;
}
@media (max-width: 767px) {
    .gdi-social-marketing .page-header {
        padding: 52px 0 38px;
    }
    .gdi-social-marketing > section:not(.page-header) {
        padding: 40px 0;
    }
    .gdi-social-marketing p,
    .gdi-social-marketing li {
        font-size: 1rem;
        line-height: 1.8;
    }
    .gdi-social-marketing .row > [class*="col-"] {
        margin-bottom: 14px;
    }
}
@media (prefers-reduced-motion: reduce) {
    .gdi-social-marketing img.img-fluid {
        transition: none;
    }
}
</style>



            <div role="main" class="main gdi-social-marketing">

                    <section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-show overlay-op-1 mb-0" >

                    <div class="container">

                        <div class="row">

                            <div class="col-md-12 align-self-center p-static order-2 text-center">

                                <h1>Social Marketing</h1>



                            </div>

                            <div class="col-md-12 align-self-center order-1">

                                <ul class="breadcrumb breadcrumb-light d-block text-center">

                                    <li><a href="#">Home</a></li>

                                    <li class="active">Social Marketing</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </section>



                <section class="">

                    <div class="container">

                        <div class="row align-items-center justify-content-center">

                            <div class="col-md-8">

                                <h2 class="text-color-dark font-weight-normal text-6 mb-2"> <strong class="font-weight-extra-bold">Social Marketing</strong></h2>





                                <p class="text-justify text-color-dark text-4">GDI primarily follows commercial marketing strategies for financial sustainable, however, strategic departures which are consciously adopted in its operations are –</p>&#x20;

                                <p class="text-justify text-color-dark text-4">Pricing strategy:GDI does not follow the ‘maximizing of profit’ approach of the private sector especially that of the pharmaceutical industry and most social marketing enterprises in health. The norm followed by the private sector is to set the price to the consumer on a ’willingness to pay’ basis rather than constructing the maximum retail price (MRP) based on – </p>

                                <ul>

                                    <li class="text-color-dark text-4">product and marketing costs</li>

                                    <li class="text-color-dark text-4 font-weight-bild">defined markups for each level of the supply chain</li>

                                </ul>

                                    <p class="text-justify text-color-dark text-4">GDI’s price structure provides a healthy margin to its channel partners and covers its procurement and marketing costs.  No going extra deals to spike profits are given to the trade which pushes the MRPs to abnormal levels.  Business with channel partners is developed on timely visits, transparent financial policies and above all the assurance of the best quality products. </p>



                            </div>

                            <div class="col-md-4" >



                                <img src="img/sm1.jpg" class="img-fluid position-relative"  alt="" />

                                    <img src="img/sm2.jpg" class="img-fluid position-relative"  alt="" />

                            </div>

                        </div>

                    </div>





                        <div class="container" style="margin-top:-8px;">

                            <h3 class="mt-0  font-weight-bold" style="text-transform:none;">Integration of non-viable retail outlets for last mile connectivity:</h3>

                            <div class="row">

                                <div class="col-md-3">

                                    <img src="img/sm3.jpg" class="img-fluid " alt=""/>

                                        <img src="img/sm4.jpg" class="img-fluid " alt="" style="margin-top:8px;"/>

                                            <img src="img/sm5.jpg" class="img-fluid " alt="" style="margin-top:8px;"/>

                                </div>

                                <div class="col-md-9">

                                    <p class="text-justify text-dark text-4">For distribution channel partners GDI’s strength lies in its market coverage. Each and every partner is visited on a pre-determined date which is informed to the partner 48 hours prior to the visit, by SMS. Coverage outcomes are analyzed by the state-of-the-art MIS of GDI and feedback provided to the field team on a real time basis so that negotiations with the partner stays focused and yields maximum results. GDI’s channel partners perfectly understand this module and are comfortable with the on-time visits and doorstep delivery of products.</p>

                                    <p class="text-justify text-color-dark text-4">The same process is followed for rural markets and urban slums where handpicked entrepreneurs are mobilized through special training and revolving drug fund support. These entrepreneurs are based at population level of one per thousand population as is the case with the Accredited Social Health Activists (ASHAs). Initial movement of products clearly shows that GDI’s network supplements government short supplies and also cater to the section of population who wants to pay for their supplies if they are affordable and not depend on or even avail free supplies. For a growing economy like India this movement away from free supplies reduces the burden from the government system and also ensures uninterrupted supplies besides creating employment. </p>

                                            <p class="text-justify text-color-dark text-4">GDI sources its products from reputed pharmaceutical companies with  Good Manufacturing Practices as norms set by The Government of India. Before tying up, due diligence is conducted by a committee compromising of – </p>



                                                <ul class="text-justify text-color-dark text-4">

                                    <li>One director of the company</li>

                                    <li>An outsourced expert in due diligence process</li>

                                    <li>A member of the field team</li>

                                    <li>A channel partner selected by the Random Selection Process </li>

                                    <li>A healthcare provider also selected by the Random Selection Process </li>

                                    <li>Prices and payment terms are also negotiated with the shortlisted manufacturer in the presence of the committee. </li>

                                    <li>Maintains a non-tamperable computerized First In First Out (FIFO) system for all its products</li>

                                    <li>Does not sell products which has less than 6 months of expiry left as per the print on the primary consumer packaging</li>



                                </ul>

                                </div>





                            </div>

                        </div>

                </section>





                <!--<div><h2 class="text-color-dark text-center font-weight-normal text-6 mb-4 mt-4"> <strong class="font-weight-extra-bold">Our Product </strong></h2>

                </div>-->

                <!--<div class="container-fluid">

                    <div class="row mb-5 pb-3">

                        <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                            <div class="card">

                                <img class="card-img-top" src="img/safe1.png" alt="Card Image">

                            </div>

                        </div>

                        <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                            <div class="card">

                                <img class="card-img-top" src="img/safe2.png" alt="Card Image">

                            </div>

                        </div>

                        <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                            <div class="card">

                                <img class="card-img-top" src="img/safe3.png" alt="Card Image">

                            </div>

                        </div>

                        <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                            <div class="card">

                                <img class="card-img-top" src="img/safe4.png" alt="Card Image">

                            </div>

                        </div>

                        <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                            <div class="card">

                                <img class="card-img-top" src="img/4.jpg" alt="Card Image">

                            </div>

                        </div>

                        <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">



                            <div class="card">

                                <img class="card-img-top" src="img/2.jpg" alt="Card Image">



                            </div>

                        </div>

                        <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                            <div class="card text-center">

                                <img class="card-img-top" src="img/3.jpg" alt="Card Image">



                            </div>

                        </div>

                        <div class="col-md-3 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">





                            <div class="card">

                                <img class="card-img-top" src="img/1.jpg" alt="Card Image">



                            </div>

                        </div>

                    </div>

                </div>-->

            </div>



        <?php

            include 'footer.php';

        ?>