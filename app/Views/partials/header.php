<header class="header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-header__link bg-primary">
                        <div class="top-header__wrap-link">top headlines<i class="icon fa fa-caret-right"></i>
                        </div>
                    </div>
                    <div class="top-header__ticker">
                        <ul id="myUl">
                            <li class="news-item"><a href="<?= site_url(); ?>/detail" class="news-item__link">Uber
                                    offers $29m 'safe ride' settlement</a><i class="icon fa fa-adjust"></i></li>
                            <li class="news-item"><a href="<?= site_url(); ?>/detail" class="news-item__link">The
                                    robot that camouflages itself</a><i class="icon fa fa-adjust"></i></li>
                            <li class="news-item"><a href="<?= site_url(); ?>/detail" class="news-item__link">Luxury
                                    cars at the Detroit auto show</a><i class="icon fa fa-adjust"></i></li>
                            <li class="news-item"><a href="<?= site_url(); ?>/detail" class="news-item__link">Uber
                                    offers $29m 'safe ride' settlement</a><i class="icon fa fa-adjust"></i></li>
                            <li class="news-item"><a href="<?= site_url(); ?>/detail" class="news-item__link">The
                                    robot that camouflages itself</a><i class="icon fa fa-adjust"></i></li>
                            <li class="news-item"><a href="<?= site_url(); ?>/detail" class="news-item__link">Luxury
                                    cars at the Detroit auto show</a><i class="icon fa fa-adjust"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="social-links list-inline">
                        <li><?= $this->include('components/twitter-link'); ?></li>
                        <li><?= $this->include('components/facebook-link'); ?></li>
                        <li><?= $this->include('components/instagram-link'); ?></li>
                        <li><?= $this->include('components/linkedin-link'); ?></li>
                        <li><?= $this->include('components/pinterest-link'); ?></li>
                        <li><?= $this->include('components/youtube-link'); ?></li>
                        <li><?= $this->include('components/rss-link'); ?></li>
                    </ul>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                    <div style="width: 200px; margin: auto;"><a href="<?= site_url(); ?>"
                            class="logo"><?= $this->include('components/logo-dpbri-color'); ?></a></div>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                    <div class="header-main__links">
                        <a href="<?= site_url(); ?>" class="header-main__links-item">
                            Sign In
                        </a>
                        or
                        <a href="<?= site_url(); ?>" class="header-main__links-item">
                            Register
                        </a>
                        <a href="#fakelink" class="search-open"><i class="icon pe-7s-search"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>