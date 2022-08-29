<header class="header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-header__link bg-primary">
                        <div class="top-header__wrap-link">Berita Terkini<i class="icon fa fa-caret-right"></i>
                        </div>
                    </div>
                    <div class="top-header__ticker">
                        <ul id="myUl">
                            <?php $a = 1 ?>
                            <?php foreach ($favarticle as $favarticle) : $a++ ?>
                            <li class="news-item">
                                <a href="<?= site_url(); ?>/detail<?= $a; ?>" class="news-item__link">
                                    <?= $favarticle['judul']; ?>
                                </a>
                                <i class="icon fa fa-adjust"></i>
                            </li>
                            <?php endforeach; ?>
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
                    <?= $this->include('components/social-links'); ?>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                    <div style="width: 200px; margin: auto;"><a href="<?= site_url(); ?>"
                            class="logo"><?= $this->include('components/logo-dpbri-color'); ?></a></div>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-4">
                    <div class="header-main__links">
                        <?php if ($priv == 1) : ?>
                        <a href="<?= site_url(); ?>/edit-profile">
                            <img style="width:30px;height:30px" alt="Logo"
                                src="<?= base_url(); ?>/assets/assets/media/avatars/blank.png" />
                        </a>
                        <?php else : ?>
                        <a href="<?= site_url(); ?>/sign-in" class="header-main__links-item">
                            Masuk
                        </a>
                        atau
                        <a href="<?= site_url(); ?>/sign-up" class="header-main__links-item">
                            daftar
                        </a>
                        <?php endif; ?>
                        <a href="#fakelink" class="search-open">
                            <i class="icon pe-7s-search"></i>
                        </a>
                        <a href="#cd-nav" class="trigger cd-nav-trigger">
                            <i class="icon pe-7s-menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-search">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="navbar-search">
                        <form class="search-global">
                            <input type="text" placeholder="Type to search" autocomplete="off" name="s" value=""
                                class="search-global__input" />
                            <button class="search-global__btn"><i class="icon fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
    </div>
</header>