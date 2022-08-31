<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer__first-section">
                    <a href="<?= site_url(); ?>" class="footer__logo" style="width: 200px;">
                        <?= $this->include('components/logo-dpbri-color'); ?>
                    </a>
                    <div class="footer__info">
                        Pelayanan Pensiunan di Gedung Dana Pensiunan BRI pada hari Senin s/d Jum'at Pukul 08:00 - 15:00
                    </div>
                    <div class="decor-right decor-right_sm"></div>
                    <div class="footer-contacts">
                        <div class="footer-contacts__item"><i class="icon fa fa-location-arrow"></i><a
                                href="https://goo.gl/maps/RAWLpYuQE9o8z3xx7" target="_blank" style="color: #cccccc;">Jl.
                                Veteran II No.
                                15 Jakarta 10110</a></div>
                        <div class="footer-contacts__item">
                            <i class="icon fa fa-phone"></i>
                            0811-9256-774
                        </div>
                        <div class="footer-contacts__item">
                            <i class="icon fa fa-envelope"></i>
                            <a href="mailto:dapenbri@dapenbri.co.id" target="_blank" style="color: #cccccc;">
                                dapenbri@dapenbri.co.id
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="clearfix">
                    <div class="footer-wrap-section">
                        <section class="footer-section">
                            <h3 class="footer__title ui-title-inner">
                                Kategori
                            </h3>
                            <div class="decor-right decor-right_sm bg-2"></div>
                            <ul class="footer-list list list-mark-2">
                                <?= $this->include('components/category-list'); ?>
                            </ul>
                        </section>
                        <section class="footer-section">
                            <h3 class="footer__title ui-title-inner">Layanan Lainnya</h3>
                            <div class="decor-right decor-right_sm bg-2"></div>
                            <ul class="footer-list list list-mark-2">
                                <a href="http://play.google.com/store/apps/articles?id=com.dpbri.dpbri" target="_blank">
                                    <img src="<?= base_url(); ?>/assets/media/google-playstore.png" alt=""
                                        style="width: 150px;">
                                </a>
                                <br>
                                <br>
                                <a href="http://appstoreconnect.apple.com/apps/1508718316/appstore" target="_blank">
                                    <img src="<?= base_url(); ?>/assets/media/appstore.png" alt=""
                                        style="width: 150px;">
                                </a>
                            </ul>
                        </section>
                        <section class="footer-section">
                            <h3 class="footer__title ui-title-inner">Profil Perusahaan</h3>
                            <div class="decor-right decor-right_sm bg-2"></div>
                            <ul class="footer-list list list-mark-2">
                                <li><a href="<?= site_url(); ?>#">Sejarah Pendirian</a></li>
                                <li><a href="<?= site_url(); ?>#">Pendiri</a></li>
                                <li><a href="<?= site_url(); ?>#">Visi dan Misi</a></li>
                                <li><a href="<?= site_url(); ?>#">Budaya Kerja</a></li>
                                <li><a href="<?= site_url(); ?>#">Struktur Organisasi</a></li>
                                <li><a href="<?= site_url(); ?>#">Anak Perusahaan</a></li>
                            </ul>
                        </section>
                        <!-- <section class="footer-section">
                            <h3 class="footer__title ui-title-inner">Tentang Dapen BRI</h3>
                            <div class="decor-right decor-right_sm bg-3"></div>
                            <ul class="footer-list list list-mark-2">
                                <div class="footer__info">
                                    Dana Pensiun BRI merupakan lembaga keuangan berbadan hukum yang didirikan oleh PT.
                                    Bank Rakyat lndonesia (Persero) Tbk. dengan maksud dan tujuan untuk menyelenggarakan
                                    Program Pensiun Manfaat Pasti yang bertujuan memelihara kesinambungan penghasilan
                                    padahari tua para pesertanya, sehingga akan menciptakan ketentraman kerja dan
                                    meningkatkan motivasi kerja para Pekerja yang merupakan iklim yang kondusif bagi
                                    peningkatan produktivitas.
                                </div>
                            </ul>
                        </section> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-bottom__link bg-primary">
                        <div class="footer-bottom__wrap-link">media sosial<i class="icon fa fa-caret-right"></i></div>
                    </div>
                    <div class="footer-bottom__inner">
                        <?= $this->include('components/social-links'); ?>
                    </div>
                    <div class="copyright">Copyright © <a href="<?= site_url(); ?>"> Dana Pensiun BRI 2022.</a> Powered
                        by <a href="http://zancodes.com">Zancodes.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>