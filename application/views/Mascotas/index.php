<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
                <h3 class="text-center">Registrar Mascota</h3>
                <hr>
                <form action="<?php echo site_url('Mascotas/guardar'); ?>" id="frm_registrar_mascota" method="post">
                    <label for=""><b>Nombre:</b></label>
                    <input type="text" name="nombre_mas" id="nombre_mas"
                    placeholder="Ingrese el nombre de la mascota" class="form-control">
                    <br>
                    <label for=""><b>Raza:</b></label>
                    <input type="text" name="raza_mas" id="raza_mas"
                    placeholder="Ingrese la raza de su mascota" class="form-control">
                    <br>
                    <label for=""><b>Edad:</b></label>
                    <input type="number" name="edad_mas" id="edad_mas"
                    placeholder="Ingrese la edad de su mascota" class="form-control">
                    <br>
                    <label for=""><b>Lugar de Nacimiento:</b></label>
                    <input type="text" name="latitud_mas" id="latitud_mas"
                    placeholder="Seleccione la ubicacion en el mapa" class="form-control">
                    <br>
                    <input type="text" name="longitud_mas" id="longitud_mas"
                    placeholder="Seleccione la ubicacion en el mapa" class="form-control">
                    <div id="mapa-direccion" style="border:1px solid black; height: 250px; width:100%; margin-top:10px;"></div>
                    <br>
                    <label for=""><b>Lugar de residencia:</b></label>
                    <input type="text" name="latitud2_mas" id="latitud2_mas"
                    placeholder="Seleccione la ubicacion en el mapa" class="form-control">
                    <br>
                    <input type="text" name="longitud2_mas" id="longitud2_mas"
                    placeholder="Seleccione la ubicacion en el mapa" class="form-control">
                    <div id="mapa-residencia" style="border:1px solid black; height: 250px; width:100%; margin-top:10px;"></div>
                    <br>
                    <button class="btn btn-success">Guardar</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-light" type="reset">Cancelar</button>
                    
                </form>
        </div>
    </div>
</div>

<br><br>

<script>

    function initMap(){
        var coordenadaCentral=new google.maps.LatLng(-0.3258273716742187, -78.55204056505521);
        var mapa1=new google.maps.Map(
            document.getElementById('mapa-direccion'),
            {
                center:coordenadaCentral,
                zoom:10,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            }
        );
        var marcador=new google.maps.Marker({
            position:coordenadaCentral,
            map: mapa1,
            title:'Seleccione la direccion',
            draggable:true
        });

        google.maps.event.addListener(
            marcador, 
            'dragend',
            function(event){
                var latitud=this.getPosition().lat();
                var longitud=this.getPosition().lng();
                //alert(latitud+"---"+longitud); //prueba
                document.getElementById('latitud_mas').value=latitud;
                document.getElementById('longitud_mas').value=longitud;
            }
        );
        var coordenada2=new google.maps.LatLng(-0.9262606817800895, -78.61437930708178);
        var mapa2=new google.maps.Map(
            document.getElementById('mapa-residencia'),
            {
                center:coordenadaCentral,
                zoom:10,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            }
        );
        var marcador=new google.maps.Marker({
            position:coordenadaCentral,
            map: mapa2,
            title:'Seleccione la direccion',
            draggable:true
        });

        google.maps.event.addListener(
            marcador, 
            'dragend',
            function(event){
                var latitud=this.getPosition().lat();
                var longitud=this.getPosition().lng();
                //alert(latitud+"---"+longitud); //prueba
                document.getElementById('latitud2_mas').value=latitud;
                document.getElementById('longitud2_mas').value=longitud;
            }
        );
    }
</script>