<section class="team row">
	{foreach $team as $item}
		{*IMAGE*}
        {if $item.type === 'image'}
			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<img
					loading="lazy"
					src="{$item.image.url|pthumb:'w=416&h=416&zc=T&f=webp'}"
					class="img-fluid mb-2"
					width="416"
					height="416"
					alt="{$item.name}">
				<h5>{$item.name}</h5>
				<p>{$item.position}</p>
			</div>
		{/if}

		{*TEXT*}
        {if $item.type === 'text'}
			<div class="col-12 col-md-6 col-lg-4 mb-4">
				<div class="d-flex flex-column align-item-center justify-content-center m-auto h-100 pb-5" style="max-width: 250px">
					<h2 class="mb-3">{$item.title}</h2>
	                {$item.description}
				</div>
			</div>
        {/if}

        {*VACANCY*}
        {if $item.type === 'vacancy'}
			<div class="col-12 col-md-6 col-lg-8 mb-4">
				<div class="d-flex flex-column align-item-center justify-content-center m-auto h-100 pb-5" style="max-width: 500px">
					<div class="d-flex flex-column gap-3 align-items-start">
						<h2>{$item.title}</h2>
                        {$item.description}
						{$item.button|button}
					</div>
				</div>
			</div>
        {/if}

	{/foreach}
</section>