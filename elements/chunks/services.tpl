<section class="services d-flex flex-wrap">
    {foreach $services as $item}
        <div class="service-item col-12 col-xl-6"
             style="background-color: {$item.background};color:{$item.color?:'#fff'}">
            {if $item.type === 'text'}
                <h2 class="{$item.position}">{$item.title}</h2>
                {if $item.description}
                    <div class="mb-0 {$item.position}">{$item.description}</div>
                {/if}
            {else}
                <img loading="lazy"
                     src="/{$item.image.url}"
                     class="img-fluid mx-auto"
                     width="236"
                     height="236"
                     alt="{$item.image.title}">
            {/if}
            {if $item.resource_id}
                <a href="{$item.resource_id|url}"
                   class="service-link text-decoration-none d-flex align-items-center gap-3 position-absolute bottom-0 end-0">
                    {if $item.type === 'image'}
                        <span>{$item.resource_id|resource:'pagetitle'}</span>
                    {/if}
                    <svg fill="{$item.color}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>
                    </svg>
                </a>
            {/if}
        </div>
    {/foreach}
</section>
<style>
    .service-item {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        min-height: 30vw;
        padding: 3rem;
    }

    .service-link {
        padding: 1rem;
        color: inherit;
    }

    .service-link svg {
        display: block;
        width: 36px;
    }
</style>