<div class="container ukms">
    <div class="row">
        <div class="col-md-12">
            <div class="produk">
                <h1 class="menu">Daftar Berita</h1><hr>
            </div>
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1">

            <ul class="event-list">
                <?php foreach ($news as $row): ?>

                    <li>
                        <time datetime="2014-07-20">
                            <span class="days"><?php echo pretty_date($row['news_post_date'], 'd', FALSE) ?></span>
                            <span class="months"><?php echo pretty_date($row['news_post_date'], 'M', FALSE) ?></span>
                        </time>
                        <?php if ($row['news_image'] != NULL) { ?>
                            <img src="<?php echo $row['news_image'] ?>" />
                        <?php } ?>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo news_url($row) ?>" > <?php echo character_limiter($row['news_title'], 40) ?></a></h3>
                            <p class="desc"><?php echo strip_tags(character_limiter($row['news_description'], 130)) ?></p>
                        </div>
                    </li>
                <?php endforeach ?>

            </ul>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div >
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div> 
</div>