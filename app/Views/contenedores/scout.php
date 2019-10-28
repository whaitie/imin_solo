<content class="contenedor hidden" id="contenedor_scout">
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

    <div class="jugadoresScouting">
        <div class="jugadorScout">
            <img src="<?= base_url('img/cuerpo_medio.png') ?>" alt="">
            <div class="JSI">
                <h4>Jaime Gonzales</h4>
                <span>18 años</span> <span>71 Kg</span>  <span> 1,75 cm</span>
            </div>
            <div class="JSestadisticas">
                <div class="JSE">
                    <span class="JSE_pre">Ataque:</span> <span class="JSE_90">92</span>
                </div>
                <div class="JSE">
                    <span class="JSE_pre">Defensa:</span> <span class="JSE_60">55</span>
                </div>
                <div class="JSE">
                    <span class="JSE_pre">Disparo:</span> <span class="JSE_80">83</span>
                </div>
                <div class="JSE">
                    <span class="JSE_pre">Pase:</span> <span class="JSE_70">72</span>
                </div>
                <div class="JSE">
                    <span class="JSE_pre">Resitencia:</span> <span class="JSE_60">66</span>
                </div>
                <div class="JSE">
                    <span class="JSE_pre">Drible:</span> <span class="JSE_95">97</span>
                </div>
            </div>
            <div class="aptitudesBasicas">
                <div class="JSE JSEposU">
                    <span class="JSEpos cDelantero">DC</span>
                </div>
                <div class="JSE">
                    <span class="JSEpie">Ambi-Diestro</span>
                </div>
            </div>

            <div class="pretencionesJugador">
                <h6>Pretenciones economicas:</h6>
                <span class="PEconomica"> U$D 15.000 anuales</span>
            </div>

        </div>

    </div>


</content>