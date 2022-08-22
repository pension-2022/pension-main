<div class="cd-main">
    <div class="wrap-content cd-section cd-selected">
        <?= $this->include('partials/header'); ?>
        <div class="wrap-nav">
            <?= $this->include('partials/nav'); ?>
            <div class="section-title"
                style="background-image: url('<?= base_url(); ?>/assets/banner.jpg'); background-size: cover; background-position: center center;">
                <div class="section__inner">
                    <h1 class="ui-title-page">Hiburan</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <ol class="breadcrumb">
                <li><a href="<?= site_url(); ?>">Beranda</a></li>
                <li class="active">Hiburan</li>
            </ol>
        </div>
        <div class="section-type-b">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div data-pagination="false" data-navigation="true" data-single-item="true"
                            data-auto-play="7000" data-transition-style="fade" data-main-text-animation="true"
                            data-after-init-delay="3000" data-after-move-delay="1000" data-stop-on-hover="true"
                            class="slider-type-a owl-carousel owl-theme owl-theme_mod-d enable-owl-carousel">
                            <div class="slider-type-a__item"><img
                                    src="<?= base_url(); ?>/assets/media/content/slider-type-a/1.jpg" alt="foto"
                                    class="slider-type-a__img">
                                <div class="slider-type-a__inner">
                                    <div class="slider-type-a__title">Adieusm tempor incidunt dolore</div>
                                    <div class="slider-type-a__footer"><span class="slider-type-a__meta">feb 30,
                                            2016</span><span class="slider-type-a__meta"><i
                                                class="icon pe-7s-comment"></i>62</span></div>
                                </div>
                            </div>
                            <div class="slider-type-a__item"><img
                                    src="<?= base_url(); ?>/assets/media/content/slider-type-a/1.jpg" alt="foto"
                                    class="slider-type-a__img">
                                <div class="slider-type-a__inner">
                                    <div class="slider-type-a__title">Adieusm tempor incidunt dolore</div>
                                    <div class="slider-type-a__footer"><span class="slider-type-a__meta">feb 30,
                                            2016</span><span class="slider-type-a__meta"><i
                                                class="icon pe-7s-comment"></i>62</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-default">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/assets/media/content/post/340x310/1.jpg"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/assets/media/content/post/340x310/1.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">Lorem ipsum dolor amt
                                            elit sed
                                            tempor incidunt</a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                            sina</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                            ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda
                                        exercitation ullamco laboris onsequat ...</p>
                                </div>
                                <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                        lebih lanjut</a></div>
                            </div>
                        </article>
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/assets/media/content/post/340x310/2.jpg"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/assets/media/content/post/340x310/2.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">Lorem ipsum dolor amt
                                            elit sed
                                            tempor incidunt</a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                            sina</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                            ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda
                                        exercitation ullamco laboris onsequat ...</p>
                                </div>
                                <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                        lebih lanjut</a></div>
                            </div>
                        </article>
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/assets/media/content/post/340x310/3.jpg"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/assets/media/content/post/340x310/3.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">Lorem ipsum dolor amt
                                            elit sed
                                            tempor incidunt</a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                            sina</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                            ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda
                                        exercitation ullamco laboris onsequat ...</p>
                                </div>
                                <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                        lebih lanjut</a></div>
                            </div>
                        </article>
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/assets/media/content/post/340x310/4.jpg"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/assets/media/content/post/340x310/4.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">Lorem ipsum dolor amt
                                            elit sed
                                            tempor incidunt</a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                            sina</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                            ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda
                                        exercitation ullamco laboris onsequat ...</p>
                                </div>
                                <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                        lebih lanjut</a></div>
                            </div>
                        </article>
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/assets/media/content/post/340x310/5.jpg"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/assets/media/content/post/340x310/5.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">Lorem ipsum dolor amt
                                            elit sed
                                            tempor incidunt</a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                            sina</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                            ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda
                                        exercitation ullamco laboris onsequat ...</p>
                                </div>
                                <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                        lebih lanjut</a></div>
                            </div>
                        </article>
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/assets/media/content/post/340x310/6.jpg"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/assets/media/content/post/340x310/6.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">Lorem ipsum dolor amt
                                            elit sed
                                            tempor incidunt</a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                            sina</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                            ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda
                                        exercitation ullamco laboris onsequat ...</p>
                                </div>
                                <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                        lebih lanjut</a></div>
                            </div>
                        </article>
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/assets/media/content/post/340x310/7.jpg"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/assets/media/content/post/340x310/7.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">Lorem ipsum dolor amt
                                            elit sed
                                            tempor incidunt</a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                            sina</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                            ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda
                                        exercitation ullamco laboris onsequat ...</p>
                                </div>
                                <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                        lebih lanjut</a></div>
                            </div>
                        </article>
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/assets/media/content/post/340x310/8.jpg"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/assets/media/content/post/340x310/8.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">Lorem ipsum dolor amt
                                            elit sed
                                            tempor incidunt</a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                            sina</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                            ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda
                                        exercitation ullamco laboris onsequat ...</p>
                                </div>
                                <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                        lebih lanjut</a></div>
                            </div>
                        </article>
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/assets/media/content/post/340x310/9.jpg"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/assets/media/content/post/340x310/9.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">Lorem ipsum dolor amt
                                            elit sed
                                            tempor incidunt</a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                            sina</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                            ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua enimad minim veniam quis nostruda
                                        exercitation ullamco laboris onsequat ...</p>
                                </div>
                                <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                        lebih lanjut</a></div>
                            </div>
                        </article>
                        <div class="wrap-pagination">
                            <ul class="pagination">
                                <li><a href="#">
                                        < </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <aside class="sidebar">
                            <div class="widget">
                                <form id="search-global-form" method="get" class="form-search">
                                    <div class="form-group has-feedback">
                                        <input type="text" placeholder="Search any news, article"
                                            class="form-search__input form-control">
                                        <button
                                            class="form-search__btn icon pe-7s-search form-control-feedback"></button>
                                    </div>
                                </form>
                            </div>
                            <section class="widget">
                                <?= $this->include('partials/follow-us'); ?>
                            </section>
                            <section class="widget">
                                <?= $this->include('partials/categories'); ?>
                            </section>
                            <section class="widget">
                                <?= $this->include('partials/popular-news'); ?>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('partials/footer'); ?>
        <!-- end wrap-content-->
    </div>
</div>