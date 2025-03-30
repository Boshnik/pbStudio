<footer class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>&copy;&nbsp;{'site_name'|config} {''|date: 'Y'}</p>
                <ul class="list-unstyled">
                    <li><small>total time: {((microtime(true) - $modx->startTime)) | round: 4} s</small></li>
                    <li><small>query time: {$modx->queryTime | round: 4} s</small></li>
                    <li><small>queries: {$modx->executedQueries}</small></li>
                    <li><small>memory: {(memory_get_usage() / 1024 / 1024) | round: 2} MB</small></li>
                </ul>
            </div>
        </div>
    </div>
</footer>