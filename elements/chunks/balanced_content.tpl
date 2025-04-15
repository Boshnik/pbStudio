<section class="row my-5">
    <div class="col-12 col-md-10 position-relative">
        <img loading="lazy"
             src="{$image.url|pthumb:'w=1100&h=460&bg=F8F9FA'}"
             class="img-fluid"
             alt="{$title}">
        <div class="col-12 col-md-6 position-absolute start-100 top-50 translate-middle">
            <h2 style="font-size: 3rem">{$title}</h2>
            {$description}
            {$button|button}
        </div>
    </div>
</section>