<meta charset="{'modx_charset'|config}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="{$modx->resource->description}">
<base href="{'site_url'|config}"/>
<title>{$modx->resource->pagetitle} / {'site_name'|config}</title>

{*bootstrap*}
<link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script async src="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

{*Roboto*}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
<style>
    body {
        font-family: "Roboto", serif
    }
</style>

{*FetchIt*}
<script src="/assets/components/fetchit/js/fetchit.min.js"></script>
<script async src="/assets/components/fetchit/lib/notyf.min.js"></script>
<link rel="preload" href="/assets/components/fetchit/lib/notyf.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/assets/components/fetchit/lib/notyf.min.css"></noscript>