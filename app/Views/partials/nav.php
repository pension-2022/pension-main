    <nav class="navbar yamm">
        <div id="navbar-collapse-1" class="navbar-collapse collapse">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="nav navbar-nav">
                            <li><a href="<?= site_url(); ?>">All pages</a>

                                <ul class="dropdown-menu">


                                    <li><a href="<?= site_url(); ?>">HOMEPAGE </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?= site_url(); ?>">HOMEPAGE 1</a></li>
                                            <li><a href="home-2.html">HOMEPAGE 2</a></li>
                                            <li><a href="home-3.html">HOMEPAGE 3</a></li>
                                        </ul>
                                    </li>


                                    <li><a href="<?= site_url(); ?>/category">NEWS </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?= site_url(); ?>/category">Blog page</a></li>
                                            <li><a href="<?= site_url(); ?>/detail">news details</a></li>
                                        </ul>
                                    </li>


                                    <li><a href="about.html">pages </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">ABOUT</a></li>
                                            <li><a href="contacts.html">CONTACT</a></li>
                                            <li><a href="typography.html">typography</a></li>
                                        </ul>
                                    </li>



                                </ul>
                            </li>
                            <li class="yamm-fw"><a href="<?= site_url(); ?>">Health</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <?= $this->include('components/categories'); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <article class="post post-4 post-4_mod-a clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title">Lorem ipsum dolor sit
                                                                    amet</h2>
                                                            </div>
                                                            <div class="entry-meta"><span class="entry-meta__item"><a
                                                                        href="<?= site_url(); ?>/detail"
                                                                        class="entry-meta__link">38 mins
                                                                        ago</a></span><?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Volupta tem
                                                                        acusa ntium dolore me laud</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Incididunt
                                                                        ulabore dolore malnu alikua</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Sed eiusmod
                                                                        tempor incid magna aliqua enim</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="yamm-fw"><a href="<?= site_url(); ?>">technology</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <?= $this->include('components/categories'); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <article class="post post-4 post-4_mod-a clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title">Lorem ipsum dolor sit
                                                                    amet</h2>
                                                            </div>
                                                            <div class="entry-meta"><span class="entry-meta__item"><a
                                                                        href="<?= site_url(); ?>/detail"
                                                                        class="entry-meta__link">38 mins
                                                                        ago</a></span><?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Volupta tem
                                                                        acusa ntium dolore me laud</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Incididunt
                                                                        ulabore dolore malnu alikua</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Sed eiusmod
                                                                        tempor incid magna aliqua enim</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="yamm-fw"><a href="<?= site_url(); ?>">politics</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <?= $this->include('components/categories'); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <article class="post post-4 post-4_mod-a clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title">Lorem ipsum dolor sit
                                                                    amet</h2>
                                                            </div>
                                                            <div class="entry-meta"><span class="entry-meta__item"><a
                                                                        href="<?= site_url(); ?>/detail"
                                                                        class="entry-meta__link">38 mins
                                                                        ago</a></span><?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Volupta tem
                                                                        acusa ntium dolore me laud</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Incididunt
                                                                        ulabore dolore malnu alikua</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Sed eiusmod
                                                                        tempor incid magna aliqua enim</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="yamm-fw"><a href="<?= site_url(); ?>">entertainment</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <?= $this->include('components/categories'); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <article class="post post-4 post-4_mod-a clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title">Lorem ipsum dolor sit
                                                                    amet</h2>
                                                            </div>
                                                            <div class="entry-meta"><span class="entry-meta__item"><a
                                                                        href="<?= site_url(); ?>/detail"
                                                                        class="entry-meta__link">38 mins
                                                                        ago</a></span><?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Volupta tem
                                                                        acusa ntium dolore me laud</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Incididunt
                                                                        ulabore dolore malnu alikua</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Sed eiusmod
                                                                        tempor incid magna aliqua enim</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="yamm-fw "><a href="<?= site_url(); ?>">lifestyle</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <?= $this->include('components/categories'); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <article class="post post-4 post-4_mod-a clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title">Lorem ipsum dolor sit
                                                                    amet</h2>
                                                            </div>
                                                            <div class="entry-meta"><span class="entry-meta__item"><a
                                                                        href="<?= site_url(); ?>/detail"
                                                                        class="entry-meta__link">38 mins
                                                                        ago</a></span><?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Volupta tem
                                                                        acusa ntium dolore me laud</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Incididunt
                                                                        ulabore dolore malnu alikua</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Sed eiusmod
                                                                        tempor incid magna aliqua enim</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="yamm-fw"><a href="<?= site_url(); ?>">Sports</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <?= $this->include('components/categories'); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <article class="post post-4 post-4_mod-a clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title">Lorem ipsum dolor sit
                                                                    amet</h2>
                                                            </div>
                                                            <div class="entry-meta"><span class="entry-meta__item"><a
                                                                        href="<?= site_url(); ?>/detail"
                                                                        class="entry-meta__link">38 mins
                                                                        ago</a></span><?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Volupta tem
                                                                        acusa ntium dolore me laud</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Incididunt
                                                                        ulabore dolore malnu alikua</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Sed eiusmod
                                                                        tempor incid magna aliqua enim</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="yamm-fw"><a href="<?= site_url(); ?>">travel</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <?= $this->include('components/categories'); ?>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <article class="post post-4 post-4_mod-a clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/360x280/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title">Lorem ipsum dolor sit
                                                                    amet</h2>
                                                            </div>
                                                            <div class="entry-meta"><span class="entry-meta__item"><a
                                                                        href="<?= site_url(); ?>/detail"
                                                                        class="entry-meta__link">38 mins
                                                                        ago</a></span><?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-md-4 col-xs-12">
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/1.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Volupta tem
                                                                        acusa ntium dolore me laud</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/2.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Incididunt
                                                                        ulabore dolore malnu alikua</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="post post-3 post-3_mod-f clearfix">
                                                        <div class="entry-media"><a
                                                                href="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                class="prettyPhoto"><img
                                                                    src="<?= base_url(); ?>/assets/media/content/post/100x80/3.jpg"
                                                                    alt="Foto" class="img-responsive" /></a>
                                                        </div>
                                                        <div class="entry-main">
                                                            <div class="entry-header">
                                                                <h2 class="entry-title"><a
                                                                        href="<?= site_url(); ?>/detail">Sed eiusmod
                                                                        tempor incid magna aliqua enim</a></h2>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <?= $this->include('components/comment-count'); ?>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
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
    </nav>