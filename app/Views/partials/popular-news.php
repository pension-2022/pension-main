<h2 class="widget-title ui-title-inner text-right">Artikel Populer</h2>
<div class="decor-right"></div>
<div class="widget-content">
    <?php foreach ($favarticle2 as $favarticle2) : ?>
    <article class="post post-3 post-3_mod-a clearfix">
        <div class="entry-media"><a href="<?= base_url(); ?>/uploads/photos/<?= $favarticle2['photo']; ?>"
                class="prettyPhoto"><img src="<?= base_url(); ?>/uploads/photos/<?= $favarticle2['photo']; ?>"
                    alt="Foto" class="img-responsive" /></a></div>
        <div class="entry-main">
            <div class="entry-header">
                <h2 class="entry-title"><a href="<?= site_url(); ?>/detail"><?= $favarticle2['judul']; ?></a></h2>
            </div>
            <div class="entry-meta"><span class="category color-1"><?= $favarticle2['kategori']; ?></span>
                <span class="entry-meta__item">
                    <i class="icon pe-7s-comment"></i>
                    <span class="entry-meta__link"><?= $favarticle2['jumlahkomen']; ?></span>
                </span>
            </div>
        </div>
    </article>
    <?php endforeach; ?>
</div>