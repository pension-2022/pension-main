<div class="cd-main">
    <div class="wrap-content cd-section cd-selected">
        <?= $this->include('partials/header'); ?>
        <div class="wrap-nav">
            <?= $this->include('partials/nav'); ?>
            <div id="main-slider" data-slider-width="100%" data-slider-height="750" data-orientation="vertical"
                class="main-slider main-slider_mod-a main-slider_dark text-center slider-pro">
                <div class="sp-slides">
                    <?= $this->include('components/sections/slider'); ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <section class="section-type-a wow">
                        <?= $this->include('components/sections/latest-category'); ?>
                    </section>
                </div>
            </div>
        </div>
        <section class="section-type-a">
            <?= $this->include('components/sections/todays'); ?>
        </section>
        <div class="section-downloads section-downloads_mod-a wow">
            <?= $this->include('components/sections/aplication'); ?>
        </div>
        <div class="section-default">
            <?= $this->include('components/sections/default'); ?>
        </div>
        <section class="section-default wow">
            <?= $this->include('components/sections/latest-article.php'); ?>
        </section>
        <?= $this->include('partials/footer'); ?>
        <!-- end wrap-content-->
    </div>
</div>