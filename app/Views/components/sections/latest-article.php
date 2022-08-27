<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="clearfix">
                <h2 class="ui-title-block">
                    <span class="text-uppercase">
                        Artikel Terpopuler
                    </span>
                </h2>
                <a href="<?= site_url(); ?>/category" class="btn-link btn-link_under-title">
                    Lihat Semua Artikel
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="wrap-posts">
            <?php foreach ( $favarticle as $favarticle) : ?>
                <article class="post post-2 post-2_mod-e clearfix">
                    <div class="entry-media">
                        <div alt="Foto" class="img-responsive"
                            style="width: 100%; height: 200px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/assets/article-dummy-1.jpeg);">
                        </div>
                        <span class="label bg-2">
                        <?= $favarticle['kategori']; ?>
                        </span>
                    </div>
                    <div class="entry-main">
                        <div class="entry-header">
                            <h2 class="entry-title text-uppercase">
                            <?= $favarticle['judul']; ?>
                            </h2>
                        </div>
                        <div class="entry-meta">
                            <span class="entry-meta__item">
                                By <?= $favarticle['author']; ?>
                                </a>
                            </span>
                            <span class="entry-meta__item">
                            <?= $favarticle['tanggal']; ?>
                                </a>
                            </span>
                            <span class="entry-meta__item">
                                <i class="icon pe-7s-comment"></i>
                                <span class="entry-meta__link"><?= $favarticle['jumlahkomen']; ?></span>
                            </span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>