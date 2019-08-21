<content class="contenedor hidden" id="contenedor_scout">
    <div class="menu moverDer">
        <a class="logoMin" href="<?= base_url() ?>">
            <img src="img/logo_min2.png" alt="">
        </a>
        <div class="buscdorMenu">
            <input type="search" placeholder="Buscar" class="inputGenerico" id="buscadorTop">
            <i class="icon-search" id="buscarMenu"></i>
        </div>
        <div class="logoPatrocinadorMenu">
            <img src="img/adidas_b.png" alt="">
        </div>
    </div>
    <div class="especBuscador">
        <select name="" id="" class="selectGenerico">
            <option value="" selected>Todos</option>
            <option value="">Deportista</option>
            <option value="">Procurador</option>
            <option value="">Periodista</option>
            <option value="">Club</option>
            <option value="">Empresa</option>
        </select>
    </div>


    <div class="contenedotGeneral moverDer blurerItem">
        <div class="filtrosScout">
            <div class="filtroUnCont">
                <div class="labelFilter">Deporte:</div>
                <select class="selectGenerico w150">
                    <option value="" selected>Futbol</option>
                    <option value="" >Tennis</option>
                    <option value="" >Basket</option>
                </select>
            </div>
            <!--
            <div class="filtroUnCont">
                <div class="labelFilter">Pais:</div>
                <select class="selectGenerico w150">
                    <option value="" selected>Argentina</option>
                    <option value="" >Brasil</option>
                    <option value="" >Mexico</option>
                </select>
            </div>
            -->
            <div class="filtroUnCont">
                <div class="labelFilter">Posicion:</div>
                <select class="selectGenerico w150">
                    <option value="" selected>DC</option>
                    <option value="" >SD</option>
                    <option value="" >EXD</option>
                    <option value="" >MC</option>
                    <option value="" >MCD</option>
                    <option value="" >MDD</option>
                    <option value="" >MDI</option>
                    <option value="" >CD</option>
                    <option value="" >LI</option>
                    <option value="" >LD</option>
                    <option value="" >PT</option>
                </select>
            </div>
            <div class="filtroSlider">
                <div class="pretencionSlider">Pretencion economica:</div>
                <div class="sliderInputs">
                    <input type="text" id="pretencionEconomicaFiltro" name="my_range" value="" />
                </div>
            </div>

            <div class="filtroSlider">
                <div class="pretencionSlider">Edad:</div>
                <div class="sliderInputs">
                    <input type="text" id="edadDeportista" name="my_range" value="" />
                </div>
            </div>

            <div class="filtroSlider">
                <div class="pretencionSlider">Distancia:</div>
                <div class="sliderInputs">
                    <input type="text" id="distanciaDeportista" name="my_range" value="" />
                </div>
            </div>
        </div>

    </div>
</content>