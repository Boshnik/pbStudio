<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{'site_url'|config}">
            <img src="/assets/images/logo.svg" width="40" height="40" alt="{'site_name'|config}">
            {'site_name'|config}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto d-flex align-items-center">
                {'!pbMenu'|snippet: [
                    'level' => 2,
                    'tpl' => '@INLINE <li class="nav-item level-{$level}">
                                    <a class="nav-link{$resourse_id === $id ? " active": ""}" href="{$uri}" {$attributes}>{$menutitle ?: $pagetitle}</a>
                                </li>'
                    'tplParent' => '@INLINE <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" {$attributes}>{$menutitle ?: $pagetitle}</a>
                                    <ul class="dropdown-menu">{$wrapper}</ul>
                                </li>'
                ]}
            </ul>
        </div>
    </div>
</nav>