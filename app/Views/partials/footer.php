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
                            <div class="decor-right decor-right_sm bg-7"></div>
                            <ul class="footer-list list list-mark-2">
                                <?= $this->include('components/category-list'); ?>
                            </ul>
                        </section>
                        <section class="footer-section">
                            <h3 class="footer__title ui-title-inner">our partners</h3>
                            <div class="decor-right decor-right_sm bg-13"></div>
                            <ul class="footer-list list list-mark-2">
                                <li><a href="<?= site_url(); ?>/category">Abc media</a></li>
                                <li><a href="<?= site_url(); ?>/category">correspondents</a></li>
                                <li><a href="<?= site_url(); ?>/category">Advertise with us</a></li>
                                <li><a href="<?= site_url(); ?>/category">terms & conditions</a></li>
                                <li><a href="<?= site_url(); ?>/category">work for us</a></li>
                                <li><a href="<?= site_url(); ?>/category">general inquiries</a></li>
                            </ul>
                        </section>
                        <section class="footer-section">
                            <h3 class="footer__title ui-title-inner">get Connect</h3>
                            <div class="decor-right decor-right_sm bg-3"></div>
                            <ul class="footer-list list list-mark-2">
                                <li><a href="contacts.html">Contact Us</a></li>
                                <li><a href="<?= site_url(); ?>/category">Download apps</a></li>
                                <li><a href="<?= site_url(); ?>/category">podcasts</a></li>
                                <li><a href="<?= site_url(); ?>/category">newsletter signup</a></li>
                                <li><a href="<?= site_url(); ?>/category">breaking news alerts</a></li>
                            </ul>
                        </section>
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