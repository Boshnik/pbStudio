<section class="contacts row">
    <div class="col-auto">{$address}</div>
    <div class="col-auto mx-auto">{$phone}</div>
    <div class="col-auto">{$email}</div>
    <div class="col-12 mt-3">
        <div class="map-container">
            <div id="map">
                {'!pbMap' | snippet: [
                    'markers' => $map_coords,
                    'options' => $map_options,
                ]}
            </div>
        </div>
    </div>
</section>
<style>
    .map-container {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%;
    }

    #map {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>