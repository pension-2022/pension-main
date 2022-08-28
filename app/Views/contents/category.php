<?php foreach ($mainCategory as $mainCategory) : ?>
<div class="cd-main">
    <div class="wrap-content cd-section cd-selected">
        <?= $this->include('partials/header'); ?>
        <div class="wrap-nav">
            <?= $this->include('partials/nav'); ?>
            <div class="section-title"
                style="background-image: url('<?= base_url(); ?>/assets/banner.jpg'); background-size: cover; background-position: center center;">
                <div class="section__inner">
                    <h1 class="ui-title-page"><?= $mainCategory['n_description']; ?></h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <ol class="breadcrumb">
                <li><a href="<?= site_url(); ?>">Beranda</a></li>
                <li class="active"><?= $mainCategory['n_description']; ?></li>
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
                            <?php $articleslider = $db->query("select ta.i_id as id, ta.n_title as judul,ta.n_photo as photo, 
                            (select count(*) from t_comment tc2 where tc2.i_articleid = ta.i_id) as jumlahkomen,
                            tc.n_description as kategori,
                            DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                            ta.n_description as deskripsi,
                            concat(u.first_name,' ',u.last_name) as author
                            from t_article ta join t_category tc on 
                            ta.i_categoryid = tc.i_id join users u on u.id = ta.i_adminid 
                            where ta.i_categoryid = ? and ta.c_active = 1 order by ta.i_id desc limit 5", $mainCategory['i_id'])->getResultArray(); ?>
                            <?php foreach ($articleslider as $articleslider) : ?>
                            <div class="slider-type-a__item"><img
                                    src="<?= base_url(); ?>/uploads/photos/<?= $articleslider['photo']; ?>" alt="foto"
                                    class="slider-type-a__img">
                                <div class="slider-type-a__inner">
                                    <div class="slider-type-a__title"><?= $articleslider['judul']; ?></div>
                                    <div class="slider-type-a__footer"><span
                                            class="slider-type-a__meta"><?= $articleslider['tanggal']; ?>
                                        </span><span class="slider-type-a__meta"><i
                                                class="icon pe-7s-comment"></i><?= $articleslider['jumlahkomen']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-default">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php $articleofcategory = $db->query("select ta.i_id as id, ta.n_title as judul,ta.n_photo as photo, 
                        (select count(*) from t_comment tc2 where tc2.i_articleid = ta.i_id) as jumlahkomen,
                        tc.n_description as kategori,
                        DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                        ta.n_description as deskripsi,
                        concat(u.first_name,' ',u.last_name) as author
                        from t_article ta join t_category tc on 
                        ta.i_categoryid = tc.i_id join users u on u.id = ta.i_adminid 
                        where ta.i_categoryid = ? and ta.c_active = 1 order by ta.i_id desc", $mainCategory['i_id'])->getResultArray(); ?>
                        <?php helper('text'); ?>
                        <?php foreach ($articleofcategory as $articleofcategory) : ?>
                        <article class="post post-5 clearfix">
                            <div class="entry-media"><a
                                    href="<?= base_url(); ?>/uploads/photos/<?= $articleofcategory['photo']; ?>"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/uploads/photos/<?= $articleofcategory['photo']; ?>"
                                        alt="Foto" class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span class="category color-4">entertainment</span>
                                    <h2 class="entry-title"><a
                                            href="<?= site_url(); ?>/article/<?= strtolower($articleofcategory['judul']); ?>"><?= $articleofcategory['judul']; ?></a>
                                    </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail" class="entry-meta__link">
                                            <?= $articleofcategory['author']; ?>
                                        </a></span><span class="entry-meta__item"><a href="<?= site_url(); ?>/detail"
                                            class="entry-meta__link"><?= $articleofcategory['tanggal']; ?>
                                        </a></span>
                                    <span class="entry-meta__item">
                                        <i class="icon pe-7s-comment"></i>
                                        <span class="entry-meta__link"><?= $articleofcategory['jumlahkomen']; ?></span>
                                    </span>
                                    <div class="entry-content">
                                        <p>
                                            <?= word_limiter($articleofcategory['deskripsi'], 50); ?>
                                        </p>
                                    </div>
                                    <div class="entry-footer"><a href="<?= site_url(); ?>/detail" class="btn-link">baca
                                            lebih lanjut</a></div>
                                </div>
                        </article>
                        <?php endforeach; ?>
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
                            <!-- <section class="widget">
                                <?= $this->include('partials/follow-us'); ?>
                            </section> -->
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
<?php endforeach ?>