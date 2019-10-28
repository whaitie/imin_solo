<content class="contenedor hidden" id="contenedor_perfil">
    <div class="contenedotGeneral moverDer">

        <div class="perfilPP">
            <div class="imgPerfilPP">
                <div class="clasePersona">
                    Deportista
                </div>
                <img src="" alt="">
            </div>

            <h3 class="nombrePerfilPP"> </h3>
            <div class="lineaNombrePP"></div>
            <div class="descripcionPerfilCampo">
                <div class="perfilCampoDes">
                    Nacionalidad:
                </div>
                <div class="campoPerfil">
                    <img src="" alt="" id="banderaNacionalidad">
                </div>
                <div class="campoPerfil">
                    <span id="nacionalidadPerfil"></span>
                </div>
            </div>

            <div class="descripcionPerfilCampo">
                <div class="perfilCampoDes">
                    Localidad:
                </div>
                <div class="campoPerfil">
                    <img src="" alt="" id="banderaLocalidad">
                </div>
                <div class="campoPerfil">
                    <span id="localidadPerfil"></span>
                </div>
            </div>

            <div class="descripcionPerfilCampo">
                <div class="perfilCampoDes">
                    Fecha de nacimiento:
                </div>
                <div class="campoPerfil">
                    <span id="perfilNacimiento">24 / 07 / 1987</span>
                </div>
            </div>

            <div class="descripcionPerfilCampo">
                <div class="perfilCampoDes">
                    Altura:
                </div>
                <div class="campoPerfil">
                    <span id="alturaPerfil"> </span>
                </div>
            </div>

            <div class="descripcionPerfilCampo">
                <div class="perfilCampoDes">
                    Peso:
                </div>
                <div class="campoPerfil">
                    <span id="pesoPerfil"> </span>
                </div>
            </div>



            <h3 class="nombrePerfilPP">Carrera deportiva </h3>
            <div class="lineaNombrePP"></div>

            <div class="descripcionPerfilCampo">
                <div class="perfilCampoDes">
                    Deporte:
                </div>
                <div class="campoPerfil">
                    <img src="" alt="" id="imgDeportePerfil">
                </div>
                <div class="campoPerfil">
                    <span id="deportePerfil">N/A</span>
                </div>
            </div>
            <div class="descripcionPerfilCampo">
                <div class="perfilCampoDes">
                    Club:
                </div>
                <div class="campoPerfil">
                    <img src="" alt="" id="clubPerfil">
                </div>
                <div class="campoPerfil">
                    <span id="clubPerfilNombre"></span>
                </div>
            </div>
            <div class="descripcionPerfilCampo">
                <div class="perfilCampoDes">
                    Liga:
                </div>
                <div class="campoPerfil">
                    <span id="perfilLiga">N/A</span>
                </div>
            </div>
            <div class="descripcionPerfilCampo">
                <div class="perfilCampoDes">
                    Goles / Partidos jugados:
                </div>
                <div class="campoPerfil">
                    <span id="golesYpartidosPerfil">0 / 0</span>
                </div>
            </div>
        </div>

        <div class="contenidoPerfil">
            <div class="followPerfil">
                <div class="sobrePerfil">
                    <div class="perfilSocialOption">
                        <div>
                            <img src="img/no-profile.png" alt="" class="fotoPerfilPP">
                        </div>
                        <h3 id="tituloPPperfil"></h3>
                    </div>
                    <div class="aboutMe">

                    </div>
                    <div class="estadsiticasPerfil">
                        <span id="presentacionVisitas"></span>
                        <span id="presentacionLikes"></span>
                    </div>
                    <div class="btnTimeline">
                        Ver historial y habilidades
                    </div>
                </div>
                <div class="videoPresentacion">
                    <div class="sinVideoMarco">
                        <p>Sin video presentación</p>
                    </div>
                </div>

            </div>

            <div class="pubsUser">
                <div class="tabsPubUser">
                    <div class="tabPubUserOptionSelected">Todos</div>
                    <div class="tabPubUserOption">Estados</div>
                    <div class="tabPubUserOption">Imagenes</div>
                    <div class="tabPubUserOption">Videos</div>
                </div>

                <div class="pubsContainer">
                    <div class="grid" tienePubs="false">
                        <p class="sinPubs">No hay publicaciones</p>
                        <div class="btnCrearPub link_asinc" seccion="publicar" href="<?= base_url('/publicar')?>" redirect ="off" >Crear publicacion</div>
                    </div> <!-- Fin del grid -->
                 </div>
            </div>

        </div>
    </div>
</content>


