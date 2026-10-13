<?php
	include 'header.php';
?>

<style>
/* GDI Achievements page — frontend styling only */
.gdi-achievements-page {
    --gdi-navy: #102b55;
    --gdi-blue: #1768b3;
    --gdi-cyan: #28b6d7;
    --gdi-ink: #182b45;
    --gdi-muted: #62738a;
    color: var(--gdi-ink);
    overflow: hidden;
}
.gdi-achievements-page .gdi-achievements-hero {
    position: relative;
    padding: 76px 0 68px;
    background: linear-gradient(120deg, rgba(8, 29, 62, .97), rgba(20, 91, 157, .91)),
                radial-gradient(circle at 80% 20%, rgba(40, 182, 215, .4), transparent 36%);
    overflow: hidden;
}
.gdi-achievements-page .gdi-achievements-hero:before,
.gdi-achievements-page .gdi-achievements-hero:after {
    content: "";
    position: absolute;
    border: 1px solid rgba(255,255,255,.13);
    border-radius: 50%;
    pointer-events: none;
}
.gdi-achievements-page .gdi-achievements-hero:before {
    width: 390px; height: 390px; right: -110px; top: -190px;
}
.gdi-achievements-page .gdi-achievements-hero:after {
    width: 260px; height: 260px; right: 35px; bottom: -190px;
}
.gdi-achievements-page .gdi-achievements-hero .container { position: relative; z-index: 1; }
.gdi-achievements-page .gdi-achievements-hero h1 {
    margin: 0 0 15px;
    color: #fff;
    font-size: clamp(32px, 4vw, 48px);
    font-weight: 800;
    letter-spacing: .4px;
    line-height: 1.15;
}
.gdi-achievements-page .gdi-achievements-hero .breadcrumb {
    margin: 0;
    padding: 0;
    justify-content: center;
    background: transparent;
}
.gdi-achievements-page .gdi-achievements-hero .breadcrumb li,
.gdi-achievements-page .gdi-achievements-hero .breadcrumb li a {
    color: rgba(255,255,255,.82);
    font-size: 14px;
}
.gdi-achievements-page .gdi-achievements-hero .breadcrumb li.active { color: #fff; }
.gdi-achievements-page .gdi-achievements-content {
    padding: 76px 0 88px;
    background: linear-gradient(180deg, #f5f8fc 0%, #ffffff 100%);
}
.gdi-achievements-page .gdi-section-heading { margin-bottom: 42px; text-align: center; }
.gdi-achievements-page .gdi-section-heading h2 {
    margin: 0;
    color: var(--gdi-navy);
    font-size: clamp(28px, 3vw, 38px);
    font-weight: 400;
    line-height: 1.25;
}
.gdi-achievements-page .gdi-section-heading h2 strong { font-weight: 800; }
.gdi-achievements-page .gdi-heading-rule {
    display: block;
    width: 66px;
    height: 4px;
    margin: 18px auto 0;
    border-radius: 10px;
    background: linear-gradient(90deg, var(--gdi-blue), var(--gdi-cyan));
}
.gdi-achievements-page .gdi-report-grid { row-gap: 24px; }
.gdi-achievements-page .gdi-report-card {
    position: relative;
    display: flex;
    align-items: center;
    min-height: 176px;
    height: 100%;
    padding: 28px 24px;
    border: 1px solid #e5edf6;
    border-radius: 18px;
    background: #fff;
    box-shadow: 0 12px 34px rgba(16, 43, 85, .08);
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
}
.gdi-achievements-page .gdi-report-card:before {
    content: "";
    position: absolute;
    top: 0; left: 24px; right: 24px;
    height: 4px;
    border-radius: 0 0 8px 8px;
    background: linear-gradient(90deg, var(--gdi-blue), var(--gdi-cyan));
}
.gdi-achievements-page .gdi-report-card:hover {
    transform: translateY(-7px);
    border-color: #c9e2f7;
    box-shadow: 0 20px 42px rgba(16, 43, 85, .15);
}
.gdi-achievements-page .gdi-report-icon {
    display: inline-flex;
    flex: 0 0 58px;
    width: 58px;
    height: 58px;
    align-items: center;
    justify-content: center;
    margin-right: 17px;
    border-radius: 15px;
    color: #fff;
    background: linear-gradient(135deg, var(--gdi-blue), var(--gdi-cyan));
    box-shadow: 0 8px 18px rgba(23, 104, 179, .22);
    font-size: 25px;
}
.gdi-achievements-page .gdi-report-card a {
    color: var(--gdi-navy);
    font-size: 18px !important;
    font-weight: 800 !important;
    line-height: 1.5;
    text-decoration: none;
    overflow-wrap: anywhere;
    transition: color .2s ease;
}
.gdi-achievements-page .gdi-report-card a:hover { color: var(--gdi-blue); }
.gdi-achievements-page .gdi-report-hint {
    display: block;
    margin-top: 7px;
    color: var(--gdi-muted);
    font-size: 13px;
    font-weight: 500;
}
@media (max-width: 767.98px) {
    .gdi-achievements-page .gdi-achievements-hero { padding: 58px 0 50px; }
    .gdi-achievements-page .gdi-achievements-content { padding: 52px 0 60px; }
    .gdi-achievements-page .gdi-section-heading { margin-bottom: 30px; }
    .gdi-achievements-page .gdi-report-card { min-height: 140px; padding: 24px 19px; }
    .gdi-achievements-page .gdi-report-card a { font-size: 16px !important; }
}
@media (prefers-reduced-motion: reduce) {
    .gdi-achievements-page .gdi-report-card,
    .gdi-achievements-page .gdi-report-card a { transition: none; }
}
</style>

<div role="main" class="main gdi-achievements-page">
    <section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-show overlay-op-1 mb-0 gdi-achievements-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1>Achievments</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Achievments</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0 gdi-achievements-content">
        <div class="container">
            <div class="gdi-section-heading">
                <h2> <strong>Achievments</strong></h2>
                <span class="gdi-heading-rule"></span>
            </div>

            <section>
                <div class="container">
                    <div class="row align-items-stretch justify-content-center gdi-report-grid">
                        <div class="col-md-4">
                            <div class="gdi-report-card">
                                <span class="gdi-report-icon" aria-hidden="true">▤</span>
                                <div>
                                    <a href="upload/GDI ANNUAL REPORT 2017-18.pdf" target="blank" style="font-size:22px;font-weight:bold;">GDI ANNUAL REPORT 2017-18</a>
                                    <span class="gdi-report-hint">Annual report document</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gdi-report-card">
                                <span class="gdi-report-icon" aria-hidden="true">▤</span>
                                <div>
                                    <a href="upload/GDI ANNUAL REPORT 2018-19.pdf" target="blank" style="font-size:22px;font-weight:bold;">GDI ANNUAL REPORT 2018-19</a>
                                    <span class="gdi-report-hint">Annual report document</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gdi-report-card">
                                <span class="gdi-report-icon" aria-hidden="true">▤</span>
                                <div>
                                    <a href="upload/GDI ANNUAL REPORT 2019-20.pdf" target="blank" style="font-size:22px;font-weight:bold;">GDI ANNUAL REPORT 2019-20</a>
                                    <span class="gdi-report-hint">Annual report document</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>

<?php
    include 'footer.php';
?>
