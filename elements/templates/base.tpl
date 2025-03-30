<!doctype html>
<html lang="en">
<head>
    {block 'head'}
        {insert 'chunks/head.tpl'}
    {/block}
</head>
<body>

{block 'header'}
    {insert 'chunks/header.tpl'}
{/block}

{block 'content'}
    <div class="container">
        {'!pbBlocks'|snippet: [
            'fileElements' => 1,
        ]}
    </div>
    {if $resource->content}
        <section class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {$modx->resource->content}
                    </div>
                </div>
            </div>
        </section>
    {/if}
{/block}

{block 'footer'}
    {insert 'chunks/footer.tpl'}
{/block}

{block 'modal'}
    {insert 'chunks/modal.tpl'}
{/block}

</body>
</html>