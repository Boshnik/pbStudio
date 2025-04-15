<section class="my-5">
    <div class="position-relative">
        <img loading="lazy"
             src="{$image.url|pthumb:'w=1296&h=500&f=webp&bg=FF5D44'}"
             class="img-fluid"
             alt="{$title}">
        <h2 class="position-absolute top-50 start-100 translate-middle w-100"
            style="font-size: 4rem;max-width: 33rem;">{$title}</h2>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-6">
            {$description}
        </div>
        <div class="col-12 col-md-6 text-center">
            {$button|button}
        </div>
    </div>
</section>