<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <?php foreach ($favcategory as $favcategory) : ?>
                <div class="col-md-6 wow">
                    <div class="title-category clearfix">
                        <h2
                            class="title-category__title ui-title-inner color-<?= ($favcategory['artikel'] % 2 == 0) ? '1' : '5' ?>">
                            <?= $favcategory['kategori']; ?>
                        </h2>
                    </div>
                    <div class="decor-right bg-<?= ($favcategory['artikel'] % 2 == 0) ? '3' : '5' ?>"></div>
                    <?php $articledetail = $db->query("select ta.i_id as id, ta.n_title as judul,ta.n_photo as photo, 
                        (select count(*) from t_comment tc2 where tc2.i_articleid = ta.i_id) as jumlahkomen,
                        tc.n_description as kategori,
                        DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                        ta.n_description as deskripsi,
                        concat(u.first_name,' ',u.last_name) as author
                        from t_article ta join t_category tc on 
                        ta.i_categoryid = tc.i_id join users u on u.id = ta.i_adminid 
                        where ta.i_categoryid = ? order by ta.i_id desc 
                        limit 1", $favcategory['id'])->getResultArray(); ?>
                    <?php helper('text'); ?>
                    <?php foreach ($articledetail as $articledetail) : ?>
                    <article class="post post-2 post-2_mod-c clearfix">
                        <a href="<?= site_url(); ?>/article/<?= strtolower($articledetail['judul']); ?>">
                            <div class="entry-media">
                                <div class="img-responsive"
                                    style="width: 100%; height: 240px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/uploads/photos/<?= $articledetail['photo']; ?>);">
                                </div>
                            </div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title text-uppercase">
                                        <?= $articledetail['judul']; ?>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <span class="entry-meta__item">
                                        By <?= $articledetail['author']; ?>
                                    </span>
                                    <span class="entry-meta__item">
                                        <?= $articledetail['tanggal']; ?>
                                    </span>
                                    <span class="entry-meta__item">
                                        <i class="icon pe-7s-comment"></i>
                                        <span class="entry-meta__link"><?= $articledetail['jumlahkomen']; ?></span>
                                    </span>
                                </div>
                                <div class="entry-content">
                                    <p style="color: #999999;">
                                        <?= word_limiter($articledetail['deskripsi'], 50); ?>...
                                    </p>
                                </div>
                                <div class="entry-footer">
                                    <a href="<?= site_url(); ?>/article/<?= strtolower($articledetail['judul']); ?>"
                                        class="btn-link">
                                        Baca Lebih Lanjut
                                    </a>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php endforeach; ?>
                </div>
                <?php endforeach ?>
            </div>
            <div class="row">
                <?php foreach ($favcategory2 as $favcategory2) : ?>
                <?php $articledetail2 = $db->query("select ta.i_id as id, ta.n_title as judul,ta.n_photo as photo, 
                    (select count(*) from t_comment tc2 where tc2.i_articleid = ta.i_id) as jumlahkomen,
                    tc.n_description as kategori,
                    DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                    ta.n_description as deskripsi,
                    concat(u.first_name,' ',u.last_name) as author
                    from t_article ta join t_category tc on 
                    ta.i_categoryid = tc.i_id join users u on u.id = ta.i_adminid 
                    where ta.i_categoryid = ? order by ta.i_id desc 
                    limit 3", $favcategory2['id'])->getResultArray(); ?>
                <div class="col-md-6 wow">
                    <?php foreach ($articledetail2 as $articledetail2) : ?>
                    <article class="post post-3 post-3_mod-c clearfix">
                        <a href="<?= site_url(); ?>/article/<?= strtolower($articledetail2['judul']); ?>">
                            <div class="entry-media">
                                <div class="img-responsive"
                                    style="width: 100%; height: 100px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/uploads/photos/<?= $articledetail2['photo']; ?>);">
                                </div>
                            </div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title text-uppercase">
                                        <?= $articledetail2['judul']; ?>
                                    </h2>
                                </div>
                                <div class="entry-meta"><span
                                        class="category color-<?= ($favcategory2['artikel'] % 2 == 0) ? '1' : '5' ?>">
                                        <?= $favcategory2['kategori']; ?>
                                    </span>
                                    <span class="entry-meta__item">
                                        <i class="icon pe-7s-comment"></i>
                                        <span class="entry-meta__link"><?= $articledetail2['jumlahkomen']; ?></span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php endforeach ?>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="col-md-4">
            <aside class="sidebar">
                <section class="widget wow">
                    <?= $this->include('partials/categories'); ?>
                </section>
            </aside>
        </div>
    </div>
</div>