<div class="cd-main">
    <div class="wrap-content cd-section cd-selected">
        <?= $this->include('partials/header'); ?>
        <div class="wrap-nav">
            <?= $this->include('partials/nav'); ?>
            <div class="section-title"
                style="background-image: url('<?= base_url(); ?>/assets/banner.jpg'); background-size: cover; background-position: center center;">
                <div class="section__inner">
                    <h1 class="ui-title-page">
                        <?= $datarow[0]['n_title']; ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <ol class="breadcrumb">
                <li><a href="<?= site_url(); ?>">Beranda</a></li>
                <li><a href="<?= site_url(); ?>/category">Hiburan</a></li>
                <li class="active">article</li>
            </ol>
        </div>
        <div class="section-type-k">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="post post-full clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/uploads/photos/<?= $datarow[0]['n_photo']; ?>"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/uploads/photos/<?= $datarow[0]['n_photo']; ?>"
                                        alt="Foto" class="img-responsive"></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="label bg-3">lifestyle</span><span
                                        class="label bg-5">world</span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">
                                            <?= $datarow[0]['n_title']; ?>
                                        </a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link"> muhammad
                                            hafid</a></span><span class="entry-meta__item"><a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">feb 30,
                                            2016</a></span><span class="entry-meta__item"><i
                                            class="icon pe-7s-comment"></i><a href="<?= site_url(); ?>/detail"
                                            class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                    <?= $datarow[0]['n_description']; ?>
                                </div>
                                <div class="entry-footer clearfix">
                                    <div class="post-tags"><span class="post-tags__title">kategori :</span><a
                                            href="<?= site_url(); ?>/category" class="post-tags__link"> Movies</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="author-post clearfix">
                            <div class="author-post__img"><img
                                    src="<?= base_url(); ?>/assets/media/content/post/author/1.jpg" alt="foto"
                                    class="img-responsive"></div>
                            <div class="author-post__inner">
                                <h2 class="author-post__title">Authoor:<span class="author-post__name"> samir
                                        hasman</span></h2>
                                <div class="author-post__info">Tempor incididunt labore et dolore magna aliqua enimad
                                    min veniam saquis nostru exercitation ullamco laboris onsequat lorem ipsum dolor
                                    tasit amet consect elit sed eiusmod incididunt labore et dolore magna aliquipsum.
                                </div>
                            </div>
                        </article>
                        <section class="section-comment">
                            <h3 class="comment-title ui-title-inner ui-title-inner_spacing_sm">Komentar :<span
                                    class="comment-title__number"> 4</span></h3>
                            <div class="decor-left"></div>
                            <ul class="comments-list list-unstyled">
                                <li>
                                    <article class="comment clearfix">
                                        <div class="avatar-placeholder"><img
                                                src="<?= base_url(); ?>/assets/media/content/post/reviews/1.jpg"
                                                alt="avatar" class="img-responsive"></div>
                                        <div class="comment-inner">
                                            <header class="comment-header">
                                                <cite class="comment-author">don jeans</cite>
                                                <time datetime="2012-10-27" class="comment-datetime">feb 30, 2016</time>
                                            </header>
                                            <div class="comment-body">
                                                <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor
                                                    incididunt labore dolore magna aliqu enimad min incididunt ut labore
                                                    et dolore sed.</p>
                                            </div>
                                            <footer class="comment-footer"><a href="<?= site_url(); ?>"
                                                    class="comment-btn btn btn-default btn-effect">balas</a></footer>
                                        </div>
                                    </article>
                                    <ul class="children list-unstyled">
                                        <li>
                                            <article class="comment clearfix">
                                                <div class="avatar-placeholder"><img
                                                        src="<?= base_url(); ?>/assets/media/content/post/reviews/2.jpg"
                                                        alt="avatar" class="img-responsive"></div>
                                                <div class="comment-inner">
                                                    <header class="comment-header">
                                                        <cite class="comment-author">mark waugh</cite>
                                                        <time datetime="2012-10-27" class="comment-datetime">feb 30,
                                                            2016</time>
                                                    </header>
                                                    <div class="comment-body">
                                                        <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod
                                                            tempor incidid magna aliqu enimad min incididunt labore
                                                            dolore sed.</p>
                                                    </div>
                                                    <footer class="comment-footer"><a href="<?= site_url(); ?>"
                                                            class="comment-btn btn btn-default btn-effect">balas</a>
                                                    </footer>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <article class="comment clearfix">
                                        <div class="avatar-placeholder"><img
                                                src="<?= base_url(); ?>/assets/media/content/post/reviews/3.jpg"
                                                alt="avatar" class="img-responsive"></div>
                                        <div class="comment-inner">
                                            <header class="comment-header">
                                                <cite class="comment-author">suzain liza</cite>
                                                <time datetime="2012-10-27" class="comment-datetime">feb 30, 2016</time>
                                            </header>
                                            <div class="comment-body">
                                                <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor
                                                    incididunt labore dolore magna aliqu enimad min incididunt ut labore
                                                    et dolore sed.</p>
                                            </div>
                                            <footer class="comment-footer"><a href="<?= site_url(); ?>"
                                                    class="comment-btn btn btn-default btn-effect">balas</a></footer>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </section>
                        <section class="section-reply-form">
                            <h3 class="comment-title ui-title-inner ui-title-inner_spacing_sm">komentar</h3>
                            <div class="decor-left"></div>
                            <form action="#" method="post" class="form-reply ui-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" placeholder="nama" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" placeholder="email" class="form-control">
                                    </div>
                                    <div class="col-xs-12">
                                        <textarea rows="5" placeholder="deskripsi" class="form-control"></textarea>
                                        <button class="ui-form__btn btn btn-xs btn-info btn-effect">kirim</button>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                    <div class="col-md-4">
                        <aside class="sidebar">
                            <div class="widget">
                                <form id="search-global-form" method="get" class="form-search">
                                    <div class="form-group has-feedback">
                                        <input type="text" placeholder="Cari artikel"
                                            class="form-search__input form-control">
                                        <button
                                            class="form-search__btn icon pe-7s-search form-control-feedback"></button>
                                    </div>
                                </form>
                            </div>
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
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-default">
                        <h2 class="ui-title-block ui-title-block_border"><span class="text-uppercase">Artikel
                                Terkait</span></h2>
                        <div data-min480="1" data-min768="2" data-min992="2" data-min1200="3" data-pagination="false"
                            data-navigation="true" data-auto-play="4000" data-stop-on-hover="true"
                            class="owl-carousel owl-theme owl-theme_mod-e enable-owl-carousel">
                            <article class="post post-2 post-2_mod-h clearfix">
                                <div class="entry-media"><a
                                        href="<?= base_url(); ?>/assets/media/content/post/360x300/1.jpg"
                                        class="prettyPhoto"><img
                                            src="<?= base_url(); ?>/assets/media/content/post/360x300/1.jpg" alt="Foto"
                                            class="img-responsive" /></a><span class="label bg-1">politics</span>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor
                                            incidunt</h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">By<a
                                                href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                                sina</a></span><span class="entry-meta__item"><a
                                                href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                                ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                </div>
                            </article>
                            <article class="post post-2 post-2_mod-h clearfix">
                                <div class="entry-media"><a
                                        href="<?= base_url(); ?>/assets/media/content/post/360x300/2.jpg"
                                        class="prettyPhoto"><img
                                            src="<?= base_url(); ?>/assets/media/content/post/360x300/2.jpg" alt="Foto"
                                            class="img-responsive" /></a><span class="label bg-6">travel</span>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title text-uppercase">nostrud exercitation ullamco laboris nisi
                                            aliquip</h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">By<a
                                                href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                                sina</a></span><span class="entry-meta__item"><a
                                                href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                                ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                </div>
                            </article>
                            <article class="post post-2 post-2_mod-h clearfix">
                                <div class="entry-media"><a
                                        href="<?= base_url(); ?>/assets/media/content/post/360x300/3.jpg"
                                        class="prettyPhoto"><img
                                            src="<?= base_url(); ?>/assets/media/content/post/360x300/3.jpg" alt="Foto"
                                            class="img-responsive" /></a><span class="label bg-2">technology</span>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title text-uppercase">sedo eiusmod tempor incidunt ut labore
                                            dolore</h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">By<a
                                                href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                                sina</a></span><span class="entry-meta__item"><a
                                                href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                                ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                </div>
                            </article>
                            <article class="post post-2 post-2_mod-h clearfix">
                                <div class="entry-media"><a
                                        href="<?= base_url(); ?>/assets/media/content/post/360x300/2.jpg"
                                        class="prettyPhoto"><img
                                            src="<?= base_url(); ?>/assets/media/content/post/360x300/2.jpg" alt="Foto"
                                            class="img-responsive" /></a><span class="label bg-6">travel</span>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title text-uppercase">nostrud exercitation ullamco laboris nisi
                                            aliquip</h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">By<a
                                                href="<?= site_url(); ?>/detail" class="entry-meta__link"> john
                                                sina</a></span><span class="entry-meta__item"><a
                                                href="<?= site_url(); ?>/detail" class="entry-meta__link">15 mins
                                                ago</a></span><?= $this->include('components/comment-count'); ?></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('partials/footer'); ?>
        <!-- end wrap-content-->
    </div>
</div>