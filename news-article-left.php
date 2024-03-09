<article class="postcard dark blue col-12">
    <a class="postcard__img_link col-4" href="#">
        <img class="postcard__img" src="<?php echo $articleImageURL;?>" alt="<?php echo $articleTitle; ?>" />
    </a>
    <div class="postcard__text">
        <h1 class="postcard__title blue"><a href="#"><?php echo $articleTitle; ?></a></h1>
        <div class="postcard__subtitle small">
            <time datetime="<?php echo $articlePublishedDate; ?>">
                <i class="fas fa-calendar-alt mr-2"></i><?php echo $articlePublishedDate ?>
            </time>
        </div>
        <div class="postcard__bar"></div>
        <div class="postcard__preview-txt"><?php echo $articleShortDescription; ?></div>
        <ul class="postcard__tagbox">
            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Podcast</li>
            <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
            <li class="tag__item play blue">
                <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
            </li>
        </ul>
    </div>
</article>