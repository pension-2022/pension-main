<div class="wrap-title-bg">
    <h2 class="ui-title-bg">Kategori Terkini</h2>
</div>
<div data-min480="1" data-min768="2" data-min992="2" data-min1200="4" data-pagination="false" data-navigation="true"
    data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
    <?php foreach ($latestcategory as $latestcategory) : ?>
    <?php $article = $db->query("select ta.i_id as id, ta.n_title as judul,ta.n_photo as photo, 
                                    (select count(*) from t_comment tc2 where tc2.i_articleid = ta.i_id) as jumlahkomen,
                                    tc.n_description as kategori,
                                    DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal
                                    from t_article ta join t_category tc on
                                    ta.i_categoryid = tc.i_id where ta.i_categoryid = ? order by ta.i_id desc 
                                    limit 1", $latestcategory['id'])->getResultArray(); ?>
    <?php foreach ($article as $article) : ?>
    <article class="post post-1 clearfix">
        <div class="entry-media">
            <a href="<?= site_url(); ?>/article">
                <div class="img-responsive">
                    <div
                        style="width: 100%; height: 300px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/uploads/photos/<?= $article['photo']; ?> );">
                    </div>
                </div>
            </a>
            <h2 class="entry-title">
                <?= $article['judul']; ?>
            </h2>
        </div>
        <span class="label bg-1">
            <?= $article['kategori']; ?>
        </span>
        <div class="entry-meta">
            <span class="entry-meta__item">
                <a href="news_details-1.html" class="entry-meta__link">
                    <?= $article['tanggal']; ?>
                </a>
            </span>
            <span class="entry-meta__item">
                <i class="icon pe-7s-comment"></i>
                <span class="entry-meta__link"><?= $article['jumlahkomen']; ?> </span>
            </span>
        </div>
    </article>
    <?php endforeach ?>
    <?php endforeach ?>
</div>