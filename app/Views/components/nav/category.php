<?php $category = [
    'Kesehatan',
    'Teknologi',
    'Politik',
    'Hiburan',
    'Gaya Hidup',
    'Olahraga',
    'Wisata'
] ?>
<?php foreach ($navcategory as $c) : ?>
<li class="yamm-fw"><a href="<?= site_url() . '/category/' . $c['id']; ?>"><?= $c['deskripsi']; ?></a>
    <ul class="dropdown-menu">
        <li>
            <div class="yamm-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <ul class="list list-mark-1 list-mark-1_mod-a">
                            <?= $this->include('components/category-list'); ?>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <?php $data = $db->query("select i_id as id, n_title as judul,n_photo as photo 
                                                    from t_article where i_categoryid = ? order by i_id desc 
                                                    limit 1", $c['id'])->getResultArray(); ?>
                        <?php foreach ($data as $datas) : ?>
                        <article class="post post-4 post-4_mod-a clearfix">
                            <a href="<?= site_url(); ?>/article">
                                <div class="entry-media">
                                    <div alt="Foto" class="img-responsive"
                                        style="width: 360px; height: 280px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/uploads/photos/<?= $datas['photo']; ?>);">
                                    </div>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title"><?= $datas['judul']; ?></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <span class="entry-meta__item">
                                            38 mins ago
                                        </span>
                                        <?= $this->include('components/comment-count'); ?>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <?php endforeach ?>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <?php $data2 = $db->query("select i_id as id, n_title as judul,n_photo as photo 
                                                    from t_article where i_categoryid = ? order by i_id desc 
                                                    limit 3", $c['id'])->getResultArray(); ?>
                        <?php foreach ($data2 as $datas2) : ?>
                        <article class="post post-3 post-3_mod-f clearfix">
                            <a href="<?= site_url(); ?>/article">
                                <div class="entry-media">
                                    <div alt="Foto" class="img-responsive"
                                        style="width: 100px; height: 80px; background-size: cover; background-position: center center; background-image: url(<?= base_url(); ?>/uploads/photos/<?= $datas2['photo']; ?>);">
                                    </div>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <?= $datas2['judul']; ?>
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        <?= $this->include('components/comment-count'); ?>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
<?php endforeach ?>