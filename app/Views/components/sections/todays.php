<div class="wrap-title-bg">
    <h2 class="ui-title-bg">Artikel Terkini</h2>
</div>
<div data-jarallax="{&quot;type&quot;: &quot;scroll-opacity&quot;, &quot;speed&quot;: &quot;.2&quot;}"
    style="background-image: url(<?= base_url(); ?>/assets/media/content/bg/1.jpg)"
    class="section-default section-bg section-bg_dark jarallax">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__inner">
                    <div id="slider-1" class="slider-pro slider-thumbnails">
                        <div class="sp-slides">
                            <?php helper('text'); ?>
                            <?php foreach ($latestarticle as $latestarticle) : ?>
                            <div class="sp-slide">
                                <article class="post post-2 post-2_mod-a clearfix">
                                    <div class="entry-media">
                                        <div alt="Foto" class="img-responsive"
                                            style="width: 640px; height: 320px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/uploads/photos/<?= $latestarticle['photo']; ?>);">
                                        </div>
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <h2 class="entry-title text-uppercase"><a href="<?= site_url(); ?>/article">
                                                    <?= $latestarticle['judul']; ?></a>
                                            </h2>
                                        </div>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">
                                                <a class="entry-meta__link"><?= $latestarticle['tanggal']; ?></a>
                                            </span>
                                            <span class="entry-meta__item">
                                                <i class="icon pe-7s-comment"></i>
                                                <span
                                                    class="entry-meta__link"><?= $latestarticle['jumlahkomen']; ?></span>
                                            </span>
                                        </div>
                                        <div class="entry-content" id="description">
                                            <?= word_limiter($latestarticle['deskripsi'], 50) ?>...
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <div class="sp-thumbnails">
                            <?php foreach ($latestarticles as $latestarticles) : ?>
                            <div class="sp-thumbnail">
                                <article class="post post-2 post-2_mod-b clearfix">
                                    <div class="entry-media">
                                        <div alt="Foto" class="img-responsive"
                                            style="width: 180px; height: 110px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/uploads/photos/<?= $latestarticles['photo']; ?>);">
                                        </div>
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <h2 class="entry-title text-uppercase"><?= $latestarticles['judul']; ?></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">
                                                <i class="icon pe-7s-comment"></i>
                                                <span
                                                    class="entry-meta__link"><?= $latestarticles['jumlahkomen']; ?></span>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>