<?php $articlesubject = $db->query("select
	ta.i_id as id,
	ta.i_categoryid as idKategori,
	ta.n_title as judul,
	ta.n_description as deskripsi,
	ta.n_photo as photo,
    DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
    tc.n_description as kategori,
    (select count(*) from t_comment tc2 where tc2.i_articleid = ta.i_id) as jumlahkomen,
    concat(u.first_name,' ',u.last_name) as author,
    u.bio as bio
from
	t_article ta
join t_category tc on
	ta.i_categoryid = tc.i_id
join users u on
	ta.i_adminid = u.id
where
    LOWER(ta.n_title) like ?", $articleTitle)->getResultArray(); ?>
<?php foreach ($articlesubject as $articlesubject) : ?>
<div class="cd-main">
    <div class="wrap-content cd-section cd-selected">
        <?= $this->include('partials/header'); ?>
        <div class="wrap-nav">
            <?= $this->include('partials/nav'); ?>
            <div class="section-title"
                style="background-image: url('<?= base_url(); ?>/assets/banner.jpg'); background-size: cover; background-position: center center;">
                <div class="section__inner">
                    <h1 class="ui-title-page">
                        <?= $articlesubject['judul']; ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <ol class="breadcrumb">
                <li><a href="<?= site_url(); ?>">Beranda</a></li>
                <li><a href="<?= site_url(); ?>/category"><?= $articlesubject['kategori']; ?></a></li>
                <li class="active">article</li>
            </ol>
        </div>
        <div class="section-type-k">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="post post-full clearfix">
                            <div class="entry-media"><a href="<?= base_url(); ?>/uploads/photos/"
                                    class="prettyPhoto"><img
                                        src="<?= base_url(); ?>/uploads/photos/<?= $articlesubject['photo']; ?>"
                                        alt="Foto" class="img-responsive"></a></div>
                            <div class="entry-main">
                                <div class="entry-header"><span
                                        class="label bg-2"><?= $articlesubject['kategori']; ?></span>
                                    <h2 class="entry-title"><a href="<?= site_url(); ?>/detail">
                                            <?= $articlesubject['judul']; ?>
                                        </a></h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a
                                            href="<?= site_url(); ?>/detail"
                                            class="entry-meta__link"><?= $articlesubject['author']; ?></a>
                                    </span><span class="entry-meta__item"><a href="<?= site_url(); ?>/detail"
                                            class="entry-meta__link"><?= $articlesubject['tanggal']; ?></a>
                                    </span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                            href="<?= site_url(); ?>/detail"
                                            class="entry-meta__link"><?= $articlesubject['jumlahkomen']; ?></a></span>
                                </div>
                                <div class="entry-content">
                                    <?= $articlesubject['deskripsi']; ?>
                                </div>
                                <div class="entry-footer clearfix">
                                    <div class="post-tags"><span class="post-tags__title">kategori :</span><a
                                            href="<?= site_url(); ?>/category" class="post-tags__link">
                                            <?= $articlesubject['kategori']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="author-post clearfix">
                            <div class="author-post__img"><img
                                    src="<?= base_url(); ?>/assets/assets/media/avatars/blank.png" alt="foto"
                                    class="img-responsive"></div>
                            <div class="author-post__inner">
                                <h2 class="author-post__title">Author:<span class="author-post__name">
                                        <?= $articlesubject['author']; ?></span></h2>
                                <div class="author-post__info"><?= $articlesubject['bio']; ?>
                                </div>
                            </div>
                        </article>
                        <section class="section-comment">
                            <h3 class="comment-title ui-title-inner ui-title-inner_spacing_sm">Komentar</h3>
                            <div class="decor-left"></div>
                            <ul class="comments-list list-unstyled">
                                <?php $comments = $db->query("select
                                                                tc.n_comment,
                                                                tc.d_date,
                                                                concat(u.first_name, ' ', u.last_name) as username
                                                            from
                                                                t_comment tc
                                                            join users u on
                                                                tc.i_userid = u.id
                                                            where
                                                                tc.i_articleid = ?
                                                                and tc.c_active = 1
                                                                and tc.i_base_commentid is null", $articlesubject['id'])->getResultArray(); ?>
                                <?php foreach ($comments as $comments) : ?>
                                <li>
                                    <article class="comment clearfix">
                                        <div class="avatar-placeholder"><img
                                                src="<?= base_url(); ?>/assets/assets/media/avatars/blank.png"
                                                alt="avatar" class="img-responsive"></div>
                                        <div class="comment-inner">
                                            <header class="comment-header">
                                                <cite class="comment-author"><?= $comments['username']; ?></cite>
                                                <time datetime="2012-10-27"
                                                    class="comment-datetime"><?= $comments['d_date']; ?></time>
                                            </header>
                                            <div class="comment-body">
                                                <p><?= $comments['n_comment']; ?></p>
                                            </div>
                                            <footer class="comment-footer"><a href="<?= site_url(); ?>"
                                                    class="comment-btn btn btn-default btn-effect">balas</a></footer>
                                        </div>
                                    </article>
                                    <!-- <ul class="children list-unstyled">
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
                                    </ul> -->
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </section>
                        <section class="section-reply-form">
                            <form action="javascript:void(0)" id="frm-add-user">
                                <?= csrf_field(); ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <textarea rows="5" placeholder="Komentar" id="comment" required name="comment"
                                            class="form-control"></textarea>
                                        <button class="ui-form__btn btn btn-xs btn-info btn-effect" type="submit"
                                            onclick="uploadComment(<?= $articlesubject['id']; ?>)">kirim</button>
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
                        <?php $artikelterkait = $db->query("select ta.i_id as id, ta.n_title as judul,ta.n_photo as photo, 
                            (select count(*) from t_comment tc2 where tc2.i_articleid = ta.i_id) as jumlahkomen,
                            tc.n_description as kategori,
                            DATE_FORMAT(ta.d_created_date , '%M %d, %Y') as tanggal,
                            ta.n_description as deskripsi,
                            concat(u.first_name,' ',u.last_name) as author
                            from t_article ta join t_category tc on 
                            ta.i_categoryid = tc.i_id join users u on u.id = ta.i_adminid 
                            where ta.i_categoryid = ? and ta.c_active = 1 and ta.i_id !=" . $articlesubject['id'] . " order by ta.i_id desc limit 6", $articlesubject['idKategori'])->getResultArray(); ?>
                        <div data-min480="1" data-min768="2" data-min992="2" data-min1200="3" data-pagination="false"
                            data-navigation="true" data-auto-play="4000" data-stop-on-hover="true"
                            class="owl-carousel owl-theme owl-theme_mod-e enable-owl-carousel">
                            <?php foreach ($artikelterkait as $artikelterkait) : ?>
                            <article class="post post-2 post-2_mod-h clearfix">
                                <a href="<?= site_url(); ?>/article/<?= strtolower($artikelterkait['judul']); ?>">
                                    <div class="entry-media"><img
                                            src="<?= base_url(); ?>/uploads/photos/<?= $artikelterkait['photo']; ?>"
                                            alt="Foto" class="img-responsive" /><span
                                            class="label bg-1"><?= $artikelterkait['kategori']; ?></span>
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <h2 class="entry-title text-uppercase"><?= $artikelterkait['judul']; ?></h2>
                                        </div>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">
                                                By <?= $artikelterkait['author']; ?>
                                            </span>
                                            <span class="entry-meta__item">
                                                <?= $artikelterkait['tanggal']; ?>
                                            </span>
                                            <?= $this->include('components/comment-count'); ?>
                                        </div>
                                    </div>
                                </a>
                            </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('partials/footer'); ?>
        <!-- end wrap-content-->
    </div>
</div>
<?php endforeach; ?>
<script type="text/javascript">
function uploadComment(id) {

    // Adding form validation
    $('#frm-add-user').validate();

    var comment = $('#comment').val();

    console.log(comment);

    $.ajax({
        url: "<?= base_url() ?>/new-comment/" + id,
        type: "POST",
        cache: false,
        data: {
            comment: comment
        },
        dataType: "JSON",
        success: function(datas) {
            if (datas.success == true) {
                window.location.reload();
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            window.location.href = '<?= base_url() ?>/sign-in'
        }
    });
};
</script>