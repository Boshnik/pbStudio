<div id="pbSlider" class="carousel slide">
    <div class="carousel-indicators">
        {foreach $slider as $idx => $slide}
            <button type="button"
                    data-bs-target="#pbSlider"
                    data-bs-slide-to="{$idx}"
                    class="{!$idx ? 'active' : ''}"
                    aria-current="{!$idx ? 'true' : 'false'}"
                    aria-label="{$slide.title}"></button>
        {/foreach}
    </div>
    <div class="carousel-inner">
        {foreach $slider as $idx => $slide}
            <div class="carousel-item{!$idx ? ' active' : ''}">
                <img src="{$slide.background.url|pthumb:'w=1296&h=500&zc=1&f=webp'}"
                     class="d-block w-100 img-fluid object-fit-cover"
                     width="1296"
                     height="500"
                     style="min-height: 240px;"
                     alt="{$slide.title}">
                <div class="carousel-caption mx-auto top-50 start-50 translate-middle w-100" style="max-width:650px;">
                    <h1>{$slide.title}</h1>
                    {if $slide.description}
                        <p class="d-none d-md-block">{$slide.description}</p>
                    {/if}
                </div>
            </div>
        {/foreach}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#pbSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#pbSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>