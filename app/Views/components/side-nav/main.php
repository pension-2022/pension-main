<li>
    <a href="<?= site_url(); ?>" data-toggle="dropdown">
        Menu
    </a>
    <ul role="menu" class="dropdown-menu" style="background-color: #222222;">
        <li>
            <ul class="sidebar-nav__list list-unstyled">
                <li>
                    <a href="<?= site_url(); ?>">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="<?= site_url(); ?>/about">
                        Tentang Kami
                    </a>
                </li>
                <li>
                    <a href="<?= site_url(); ?>/contact">
                        Kontak
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>

<?php if ($priv == 1) : ?>
<li>
    <a onclick="window(confirm(`are you sure?`))" href="<?= site_url(); ?>/sign-out">Keluar</a>
</li>
<?php endif ?>