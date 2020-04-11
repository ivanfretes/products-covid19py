<html>
<head>
    <?php 
        $data = 
        [
            'data_load_map' => "list"
        ]
    ?>
    @include('header', $data)
</head>
<body>
    @include('menu')

    @include('main_menu')

    @include('searcher')

    <div id="map">
        <div class="title-section">Vendedores con ubicaci&oacute;n</div>
        <div id='map-container' class="map-container-vendors" style="height: 450px; border: 1px solid #AAA;"></div>
    </div>
    </br>
    <div>
        <div class="title-section">Vendedores sin ubicaci&oacute;n</div>
        Listado
    </div>
    </br>
    @include('footer')
</body>
</html>