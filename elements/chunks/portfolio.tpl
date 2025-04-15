<section class="portfolio row">
    {foreach $items as $item}
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <img loading="lazy"
                 src="{$item.image.url|pthumb:'w=416&h=280&zc=1&f=webp'}"
                 class="img-fluid mb-2"
                 width="416"
                 height="280"
                 alt="{$item.title}">
            <h5>{$item.title}</h5>
        </div>
    {/foreach}
</section>