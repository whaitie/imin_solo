    <div class="cargandoAjax">
        <div class="imgCargandoAjax">
            <img src="<?= base_url('img/loader.svg')?>" alt="">
        </div>
        <span>Cargando...</span>
    </div>
    <div class="modal-loading"></div>
    <div class="menuInferior">
        <div class="btnMenuInf link_asinc" seccion="publicar" href="<?= base_url('/publicar')?>">
            <i class="icon-pencil"></i>
            <span>Publicar</span>
        </div>

        <div class="btnMenuInf">
            <i class="icon-home"></i>
            <span>Home</span>
        </div>

        <div class="btnMenuInf" id="btnNotificaciones">
            <div class="circuloNot">
                10
            </div>
            <i class="icon-bell"></i>
            <span>Notificaciones</span>
        </div>

        <div class="btnMenuInf" id="btnMenuIz">
            <i class="icon-menu"></i>
            <span>Menu</span>
        </div>

        <div class="btnMenuInf btnOpenMychat" id="toggleChatUser">
            <div class="userChat">
                <img src="<?= base_url('img/no-profile.png')?>" alt="" id="imgMyChat">
                <div class="circulosChat conectado estadoChatMI"></div>
            </div>
        </div>
    </div>

    <div class="notificaciones">
        <div class="notificacion">
            <div class="imgNotify">
                <img src="<?= base_url('img/perfil4.jpg')?>" alt="">
            </div>
            <div class="contNotify">
                <p> El periodista <span class="userNotify">Sebastian Vignolo</span> empezo a seguirte.</p>
                <div class="fechaNotify">
                    5 de junio 2019 10:42 am
                </div>
            </div>
        </div>


        <div class="notificacion">
            <div class="imgNotify">
                <img src="<?= base_url('img/perfil3.jpg')?>" alt="">
            </div>
            <div class="contNotify">
                <p> El scout <span class="userNotify">Pablo Dominguez</span> empezo a hacerte scouting.</p>
                <div class="fechaNotify">
                    5 de junio 2019 14:30 pm
                </div>
            </div>
        </div>

        <div class="notificacion">
            <div class="imgNotify">
                <img src="<?= base_url('img/perfil3.jpg')?>" alt="">
            </div>
            <div class="contNotify">
                <p> El scout <span class="userNotify">Pablo Dominguez</span> quiere agregarte como contacto.</p>
                <div class="btnsNotify">
                    <div class="btnNotify">Aceptar</div>
                    <div class="btnNotifyRojo">Rechazar</div>
                </div>
                <div class="fechaNotify">
                    5 de junio 2019 14:31 pm
                </div>
            </div>
        </div>

        <div class="notificacion">
            <div class="imgNotify">
                <img src="<?= base_url('img/perfil5.png')?>" alt="">
            </div>
            <div class="contNotify">
                <p> El club <span class="userNotify">Newell's Old Boys</span> te ha enviado una propuesta para unirse a su club.</p>
                <div class="fechaNotify">
                    5 de junio 2019 15:12 pm
                </div>
            </div>
        </div>

        <div class="notificacion">
            <div class="imgNotify">
                <img src="<?= base_url('img/perfil2.jpg')?>" alt="">
            </div>
            <div class="contNotify">
                <p><span class="userNotify">Steven Prob</span> te ha sugerido participar de un evento.</p>
                <div class="fechaNotify">
                    5 de junio 2019 15:12 pm
                </div>
            </div>
        </div>

        <div class="notificacion">
            <div class="imgNotify">
                <img src="<?= base_url('img/adidasnegro.jpg')?>" alt="">
            </div>
            <div class="contNotify">
                <p><span class="userNotify">Adidas</span> quiere ser tu patrocinador.</p>
                <div class="fechaNotify">
                    5 de junio 2019 17:39 pm
                </div>
            </div>
        </div>

        <div class="notificacion">
            <div class="imgNotify">
                <img src="<?= base_url('img/perfil4.jpg')?>" alt="">
            </div>
            <div class="contNotify">
                <p> El periodista <span class="userNotify">Sebastian Vignolo</span> empezo a seguirte.</p>
                <div class="fechaNotify">
                    5 de junio 2019 10:42 am
                </div>
            </div>
        </div>


        <div class="notificacion">
            <div class="imgNotify">
                <img src="<?= base_url('img/perfil3.jpg')?>" alt="">
            </div>
            <div class="contNotify">
                <p> El scout <span class="userNotify">Pablo Dominguez</span> empezo a hacerte scouting.</p>
                <div class="fechaNotify">
                    5 de junio 2019 14:30 pm
                </div>
            </div>
        </div>

        <div class="notificacion">
            <div class="imgNotify">
                <img src="<?= base_url('img/perfil3.jpg')?>" alt="">
            </div>
            <div class="contNotify">
                <p> El scout <span class="userNotify">Pablo Dominguez</span> quiere agregarte como contacto.</p>
                <div class="btnsNotify">
                    <div class="btnNotify">Aceptar</div>
                    <div class="btnNotifyRojo">Rechazar</div>
                </div>
                <div class="fechaNotify">
                    5 de junio 2019 14:31 pm
                </div>
            </div>
        </div>
    </div>

    <div class="menuDesplegable">
        <div class="infoPerfil1" id="">
            <div>
                <img src="img/no-profile.png" alt="" class="fotoPerfilMenu">
            </div>
            <h4>Sin nombre</h4>
            <div class="circulosChat conectado"></div>
        </div>

        <i class="icon-cancel" id="cerrarMenuPP"></i>

        <div class="tiempoRestanteCuenta">
            Te quedan 3 meses y 5 días de menbrecia
        </div>

        <div class="btnExtenderMembresia">
            Extender membresia
        </div>


        <div class="btnsMenuIz">
            <div class="btnMenuIz" target="modalObjetivos">
                <i class="icon-star-3"></i>
                <span>Mis objetivos</span>
            </div>
            <div class="btnMenuIz" target="modalCaracteristicas">
                <i class="icon-chart-1"></i>
                <span>Mis caracteristicas</span>
            </div>
            <div class="btnMenuIz">
                <i class="icon-back-in-time"></i>
                <span>Mi Time-line</span>
            </div>

            <div class="btnMenuIz">
                <i class="icon-bookmark"></i>
                <span>Mis favoritos</span>
            </div>

            <div class="btnMenuIz" target="modalConfiguracion">
                <i class="icon-cog"></i>
                <span>Configuración</span>
            </div>

            <div class="btnMenuIz cerrarCuenta" target="modalCerrarCuenta">
                <i class="icon-user-delete"></i>
                <span>Cerrar cuenta</span>
            </div>

            <div class="btnMenuIz">
                <i class="icon-chart-alt"></i>
                <span>Estadisticas</span>
            </div>

            <div class="btnMenuIz" target="modalSugerencias">
                <i class="icon-chat-2"></i>
                <span>Reportes y Sugerencias</span>
            </div>

            <div class="btnMenuIz btnMenuIzDestacado">
                <i class="icon-crown-plus"></i>
                <span>Destacar</span>
            </div>

            <div class="btnMenuIz btnMenuIzDonar">
                <i class="icon-credit-card-alt"></i>
                <span>Donar</span>
            </div>

            <div class="btnMenuIz link_asinc" href="<?= base_url('logout') ?>" redirect="on">
                <i class="icon-logout-3"></i>
                <span>Salir</span>
            </div>

        </div>
    </div>

    <div class="modalPerfil" id="modalConfiguracion">
        <div class="contModalOptons">
            <div class="tituloModal">
                <i class="icon-angle-circled-left" id="volverTipoRegistro" loc="menu"></i>
                <h2 class="colorPP" id="headerReg"> <i class="icon-cog"></i>Configuración</h2>
                <div class="lineaModal"></div>
            </div>
            <div class="cerrarMoldaPerfil">
                <i class="icon-cancel"></i>
            </div>
            <div class="contModalOptonsB">
                <div class="item-tipo-cuenta" target="registroDeportista" type="Deportista">
                    <i class="icon-lock-open-1 l-itc"></i>
                    <span class="l-itc">Cambiar contraseña</span>
                </div>
                <div class="item-tipo-cuenta" target="registroDeportista" type="Periodista">
                    <i class="icon-eye l-itc"></i>
                    <span class="l-itc">Privacidad</span>
                </div>
                <div class="item-tipo-cuenta" target="registroClub" type="Club">
                    <i class="icon-language l-itc"></i>
                    <span class="l-itc">Idioma</span>
                </div>
                <div class="item-tipo-cuenta" target="registroDeportista" type="Procurador">
                    <i class="icon-bell l-itc"></i>
                    <span class="l-itc">Notificaciónes</span>
                </div>
                <div class="item-tipo-cuenta" target="registroDeportista" type="Procurador">
                    <i class="icon-soccer-ball l-itc"></i>
                    <span class="l-itc">Deporte elegido</span>
                </div>
            </div>
        </div>
    </div>



    <div class="modalPerfil" id="modalObjetivos">
        <div class="contModalOptons">
            <div class="tituloModal">
                <i class="icon-angle-circled-left" id="volverTipoRegistro" loc="menu"></i>
                <h2 class="colorPP" id="headerReg"> <i class="icon-star-3"></i>Mis objetivos</h2>
                <div class="lineaModal"></div>
            </div>
            <div class="cerrarMoldaPerfil">
                <i class="icon-cancel"></i>
            </div>
            <div class="contModalOptonsB">
                <div class="letraChicaObjetivos">
                    *Tus objetivos solo pueden verlos Procuradores/Scouts
                </div>
                <div class="objetivosAsks">
                    <span>Pretención economica anual:</span>
                    <div class="pretencionesDeportista">
                        <div class="monedaPretenciones">U$D</div>
                        <input type="number" class="inputGenerico w150">
                    </div>
                    <div class="btnOAm ">Actualizar</div>
                </div>
                
                <div class="objetivosAsks">
                    <span>Objetivos de tu carrera:</span>
                    <textarea class="objCarrera" cols="30" rows="10" maxlength="250" placeholder="Describe en 250 caracteres tus objetivos principales y por que deben tenerte en cuenta"></textarea>
                    <div class="btnOAm ">Actualizar</div>
                </div>
                <div class="clubesSelection">
                    <div class="objetivosAsks">
                        <span>Elije los clubes a los que aspiras:</span>
                        <select class="selectGenerico" style="display: block">
                            <option>Todas las ligas</option>
                        </select>
                    </div>
                    <div class="clubSelector">
                        <div class="clubLegible" elegido="false" clubid="1">
                            <div class="contCLBimg">
                                <img src="<?= base_url('img/clubes/barcelona.png')?>" alt="">
                            </div>
                            <span id="nombreClub-1">Barcelona</span>
                            <div class="elegido">
                                <i class="icon-check-empty boxNeutro" id="check-1"></i>
                            </div>
                        </div>

                        <div class="clubLegible" elegido="false" clubid="2">
                            <div class="contCLBimg">
                                <img src="<?= base_url('img/clubes/realmadrid.png')?>" alt="">
                            </div>
                            <span id="nombreClub-2">Real Madrid</span>
                            <div class="elegido">
                                <i class="icon-check-empty boxNeutro" id="check-2"></i>
                            </div>
                        </div>

                        <div class="clubLegible" elegido="false" clubid="3">
                            <div class="contCLBimg">
                                <img src="<?= base_url('img/clubes/juventus.png')?>" alt="">
                            </div>
                            <span id="nombreClub-3">Juventus</span>
                            <div class="elegido">
                                <i class="icon-check-empty boxNeutro" id="check-3"></i>
                            </div>
                        </div>

                        <div class="clubLegible" elegido="false" clubid="4">
                            <div class="contCLBimg">
                                <img src="<?= base_url('img/clubes/manchester.png')?>" alt="">
                            </div>
                            <span id="nombreClub-4">Manchester United</span>
                            <div class="elegido">
                                <i class="icon-check-empty boxNeutro" id="check-4"></i>
                            </div>
                        </div>

                        <div class="clubLegible" elegido="false" clubid="5">
                            <div class="contCLBimg">
                                <img src="<?= base_url('img/clubes/paris-saint-germain.png')?>" alt="">
                            </div>
                            <span id="nombreClub-5">Paris Saint Germain</span>
                            <div class="elegido">
                                <i class="icon-check-empty boxNeutro" id="check-5"></i>
                            </div>
                        </div>

                        <div class="clubLegible" elegido="false" clubid="6">
                            <div class="contCLBimg">
                                <img src="<?= base_url('img/clubes/borusia-dortmund.png')?>" alt="">
                            </div>
                            <span id="nombreClub-6">Borusia Dortmund</span>
                            <div class="elegido">
                                <i class="icon-check-empty boxNeutro" id="check-6"></i>
                            </div>
                        </div>

                        <div class="clubLegible" elegido="false" clubid="7">
                            <div class="contCLBimg">
                                <img src="<?= base_url('img/clubes/atletico-de-madrid.png')?>" alt="">
                            </div>
                            <span id="nombreClub-7">Atletico de Madrid</span>
                            <div class="elegido">
                                <i class="icon-check-empty boxNeutro" id="check-7"></i>
                            </div>
                        </div>
                    </div>
                    <div class="btnOAm ">Actualizar</div>
                </div>

            </div>
        </div>
    </div>

    <div class="modalPerfil" id="modalCaracteristicas">
        <div class="contModalOptons">
            <div class="tituloModal">
                <i class="icon-angle-circled-left" id="volverTipoRegistro" loc="menu"></i>
                <h2 class="colorPP" id="headerReg"> <i class="icon-chart-1"></i>Mis caracteristicas</h2>
                <div class="lineaModal"></div>
            </div>
            <div class="cerrarMoldaPerfil">
                <i class="icon-cancel"></i>
            </div>
            <div class="contModalOptonsB">
                <div class="tabsGeneric">
                    <div class="tabGenericOptionSelected" target="contPresentacion">Presentación</div>
                    <div class="tabGenericOption" target="contDatosPersonales">Datos personales</div>
                    <div class="tabGenericOption" target="contCualidades">Cualidades fisicas</div>
                    <div class="tabGenericOption" target="contClubActual">Club</div>
                </div>
                <div class="contModalOptionsTabs" id="contPresentacion">
                    <div class="contModalContiguo">
                        <span class="modalSpanBlock">Mis fotos principales:</span>

                        <div class="contImgDelPerfil">
                            <div class="OAimgCuerpoCompleto ">
                                <div class="hoverCambiar" target="OAimgCP" idinput="foto_cuerpo_completo_edit">
                                    <span>Cambiar foto</span>
                                </div>
                                <img src="<?= base_url('img/cuerpo_completo.png')?>" alt="" id="OAimgCP">
                                <input type="file" class="hidden" id="foto_cuerpo_completo_edit" accept="image/x-png,image/gif,image/jpeg" target="OAimgCM">
                                <input type="text" class="hidden" name="cuerpo_completo" id="foto_cuerpo_completo_edit_final">
                            </div>
                            <h4>Cuerpo completo</h4>
                            <div class="btnOAm ">Actualizar</div>
                        </div>
                        <div class="contImgDelPerfil">
                            <div class="OAimgCuerpoMedio">
                                <div class="hoverCambiar" target="OAimgCM"  idinput="foto_cuerpo_medio_edit">
                                    <span>Cambiar foto</span>
                                </div>
                                <img src="<?= base_url('img/cuerpo_medio.png')?>" alt="" id="OAimgCM">
                                <input type="file" class="hidden" id="foto_cuerpo_medio_edit" accept="image/x-png,image/gif,image/jpeg" target="OAimgCM">
                                <input type="text" class="hidden" name="cuerpo_medio" id="foto_cuerpo_medio_edit_final">
                            </div>
                            <h4>Cuerpo medio</h4>
                            <div class="btnOAm " id="actualizar_cuerpo_completo">Actualizar</div>
                        </div>
                        <div class="contImgDelPerfil">
                            <div class="OAimgSocial">
                                <div class="hoverCambiar" target="OAimgS" idinput="foto_avatar_edit">
                                    <span>Cambiar foto</span>
                                </div>
                                <img src="<?= base_url('img/no-profile.png')?>" alt="" id="OAimgS">
                                <input type="file" class="hidden" id="foto_avatar_edit" accept="image/x-png,image/gif,image/jpeg" target="OAimgCM">
                                <input type="text" class="hidden" name="avatar" id="foto_avatar_edit_final">
                            </div>
                            <h4>Imagen social</h4>
                            <div class="btnOAm ">Actualizar</div>
                        </div>
                        <div class="bloqueModalGenerico">
                            <span class="modalSpanBlock">Mi presentación textual:</span>

                            <textarea class="objCarrera" cols="30" rows="10" maxlength="250" placeholder="Describe tu personalidad y tu forma de ser dentro las canchas en 250 caracteres"></textarea>
                            <div class="btnOAm ">Actualizar</div>
                        </div>
                        <div class="miVideoPresentacionEdit">
                            <span class="modalSpanBlock">Mi video presentación:</span>
                            <div class="videoPresentacion">
                                <div class="sinVideoMarco">
                                    <p>Sin video presentación</p>
                                </div>
                            </div>
                            <div class="btnOAm ">Actualizar</div>
                        </div>

                    </div>
                </div>
                <div class="contModalOptionsTabs" id="contDatosPersonales">
                    <form id="formActDatosPersonales" class="formsMiPerfil">
                        <input type="text" class="inputGenerico inputTextDoble" placeholder="Nombres" name="nombre">
                        <input type="text" class="inputGenerico inputTextDoble" placeholder="Apellidos" name="apellido">
                        <input type="text" class="inputGenerico" placeholder="DNI" name="dni">
                        <input type="date" class="inputGenerico" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
                        <select class="selectGenerico" name="genero">
                            <option value="" selected>Sexo</option>
                            <option value="1">Hombre</option>
                            <option value="2">Mujer</option>
                        </select>
                        <select class="selectGenerico contenedor_option_deporte" name="id_deporte" >
                        </select>
                        <select class="selectGenerico contenedor_option_nacionalidad" name="id_pais_nac" >
                        </select>
                        <select class="selectGenerico contenedor_option_residencia" name="id_pais_res" >
                        </select>
                        <input type="text" class="inputGenerico inputTextDoble" placeholder="Provincia" name="provincia">
                        <input type="text" class="inputGenerico inputTextDoble" placeholder="Ciudad" name="ciudad">
                        <input type="text" class="inputGenerico inputTextDoble" placeholder="Calle" name="calle">
                        <input type="text" class="inputGenerico inputTextDoble" placeholder="Número" name="numero">
                        <div class="filtroSliderMiPerfil">
                            <div class="pretencionSlider">Altura:</div>
                            <div class="miSliderMenu">
                                <input type="text" id="miAltura" name="altura" value="" />
                            </div>
                        </div>
                        <div class="filtroSliderMiPerfil">
                            <div class="pretencionSlider">Peso:</div>
                            <div class="miSliderMenu">
                                <input type="text" id="miPeso" name="peso" value="" />
                            </div>
                        </div>
                        <div class="btnOAmDisponible w150" style="margin-top: 20px" id="actMiAltura">Actualizar</div>
                    </form>
                </div>
                <div class="contModalOptionsTabs" id="contCualidades">
                    <form id="formMisCualidades" class="formsMiPerfil">
                        <input type="number" class="inputGenerico inputTextDoble" placeholder="Ataque" name="ataque" step="1" min="30" max="99" onKeyPress="return check(event,value)" onInput="checkLength(2,this)">
                        <input type="number" class="inputGenerico inputTextDoble" placeholder="Defensa" name="defensa" step="1" min="30" max="99" onKeyPress="return check(event,value)" onInput="checkLength(2,this)">
                        <input type="number" class="inputGenerico inputTextDoble" placeholder="Disparo" name="disparo" step="1" min="30" max="99" onKeyPress="return check(event,value)" onInput="checkLength(2,this)">
                        <input type="number" class="inputGenerico inputTextDoble" placeholder="Pase" name="pase" step="1" min="30" max="99" onKeyPress="return check(event,value)" onInput="checkLength(2,this)">
                        <input type="number" class="inputGenerico inputTextDoble" placeholder="Resistencia" name="resistencia" step="1" min="30" max="99" onKeyPress="return check(event,value)" onInput="checkLength(2,this)">
                        <input type="number" class="inputGenerico inputTextDoble" placeholder="Dribleo" name="dribling" step="1" min="30" max="99" onKeyPress="return check(event,value)" onInput="checkLength(2,this)">

                        <select class="selectGenerico" name="posicion">
                            <option value="" selected>Posicion</option>
                            <option value="DC">Delantero Central</option>
                            <option value="SD">Segundo Delantero</option>
                            <option value="EXD">Extremo Derecho</option>
                            <option value="EXI">Extremo Izquierdo</option>
                            <option value="MO">Medio Ofensivo</option>
                            <option value="MDI">Medio Izquierdo</option>
                            <option value="MDD">Medio Derecho</option>
                            <option value="MC">Mediocampista Central</option>
                            <option value="MCD">Mediocampista defensivo</option>
                            <option value="CAR">Carrilero</option>
                            <option value="LI">Lateral Izquierdo</option>
                            <option value="LD">Lateral Derecho</option>
                            <option value="DC">Defensor Central</option>
                            <option value="PT">Portero</option>
                        </select>
                        <select class="selectGenerico" name="pie">
                            <option value="" selected>Pierna habil</option>
                            <option value="1">Derecha</option>
                            <option value="2">Izquierda</option>
                            <option value="3">Ambidiestro</option>
                        </select>
                        <div class="btnOAmDisponible w150">Actualizar</div>
                    </form>
                </div>
                <div class="contModalOptionsTabs" id="contClubActual">
                    <p>Soy Club</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modalPerfil" id="modalCerrarCuenta">
        <div class="contModalOptons">
            <div class="tituloModal">
                <i class="icon-angle-circled-left" id="volverTipoRegistro" loc="menu"></i>
                <h2 class="colorPP" id="headerReg"> <i class="icon-user-delete"></i>Cerrar cuenta</h2>
                <div class="lineaModal"></div>
            </div>
            <div class="cerrarMoldaPerfil">
                <i class="icon-cancel"></i>
            </div>
            <div class="bloqueModalGenerico">
                <div class="letraChicaObjetivos">
                    Ten en cuenta que al cerrar tu cuenta, desaparecera del publico y privados, como si no existieses, pero tu cuenta y todo lo que hayas ingresado en ella seguira existiendo en nuestras base de datos, y podras solicitar una re-habilitacion via E-mail.
                </div>
                <input type="password" placeholder="Tu contraseña" class="inputGenerico" name="password">
                <input type="password" placeholder="Repite contraseña" class="inputGenerico" name="re-password">
                <div class="btnOAm ">Enviar</div>
            </div>
        </div>

    </div>

    <div class="modalPerfil" id="modalSugerencias">
        <div class="contModalOptons">
            <div class="tituloModal">
                <i class="icon-angle-circled-left" id="volverTipoRegistro" loc="menu"></i>
                <h2 class="colorPP" id="headerReg"> <i class="icon-chat-2"></i>Reportes y sugerencias</h2>
                <div class="lineaModal"></div>
            </div>
            <div class="cerrarMoldaPerfil">
                <i class="icon-cancel"></i>
            </div>
            <div class="bloqueModalGenerico">
                <select class="selectGenerico">
                    <option value="reporte">Reporte</option>
                    <option value="sugerencia">Sugerencia</option>
                    <option value="error">Error/Bug</option>
                    <option value="opinion">Opinion</option>
                </select>
                <input type="text" class="inputGenerico" placeholder="titulo de tu sugerencia">
                <textarea class="objCarrera" cols="30" rows="10" maxlength="65000" placeholder="Puedes escribir un texto bastante descriptivo de todo lo que quieras aportar"></textarea>
                <div class="btnOAm ">Enviar</div>
            </div>
        </div>
    </div>


    <div class="chatsDesplegables">
        <div class="userChat">
            <img src="<?= base_url('img/perfil2.jpg')?>" alt="">
            <div class="circulosChat ocupado estadoChatMI"></div>
        </div>
    </div>

    <div class="menuChatDerecho">
        <div class="chatParteSuperior">
            <i class="icon-cancel" id="cerrarChatDerecho"></i>
            <div class="eligeEstado">
                <span>Estoy: </span>
                <select class="selectGenerico">
                    <option value="conectado">Conectado</option>
                    <option value="conectado">Ocupado</option>
                    <option value="conectado">Ausente</option>
                    <option value="conectado">Auto-mensaje</option>
                    <option value="conectado">Desconectado</option>
                </select>
            </div>
            <div class="buscarContacto">
                <input type="text" class="inputGenerico " placeholder="Buscar contacto" style="text-align: center">
            </div>

            <div class="eligeEstado filtradoChat">
                <span>Filtrar por: </span>
                <select class="selectGenerico">
                    <option value="conectado" selected>Todos</option>
                    <option value="conectado">Deportista</option>
                    <option value="conectado">Procurador</option>
                    <option value="conectado">Periodista</option>
                    <option value="conectado">Club</option>
                </select>
            </div>

            <div class="listaDeContactos">
                <div class="contactoChat">
                    <div class="userChat">
                        <img src="<?= base_url('img/perfil2.jpg') ?>" alt="">
                        <div class="circulosChat ocupado estadoChatcontacto"></div>
                    </div>
                    <div class="userChatInfo">
                        <p>Steven Prob</p>
                        <div class="tipoUser">Procurador</div>
                    </div>
                </div>

                <div class="contactoChat">
                    <div class="userChat">
                        <img src="<?= base_url('img/perfil3.jpg') ?>" alt="">
                        <div class="circulosChat conectado estadoChatcontacto"></div>
                    </div>
                    <div class="userChatInfo">
                        <p>Charles Mickels</p>
                        <div class="tipoUser">Deportista</div>
                    </div>
                </div>

                <div class="contactoChat">
                    <div class="userChat">
                        <img src="<?= base_url('img/perfil4.jpg') ?>" alt="">
                        <div class="circulosChat especial estadoChatcontacto"></div>
                    </div>
                    <div class="userChatInfo">
                        <p>Sebastian Vignolo</p>
                        <div class="tipoUser">Periodista</div>
                    </div>
                </div>

                <div class="contactoChat">
                    <div class="userChat">
                        <img src="<?= base_url('img/perfil5.png') ?>" alt="">
                        <div class="circulosChat desconectado estadoChatcontacto"></div>
                    </div>
                    <div class="userChatInfo">
                        <p>Newell's Old Boys</p>
                        <div class="tipoUser">Club</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>

    <!-- jQuery -->
    <script type="application/javascript" src="<?= base_url('plugins/jquery/jquery-3.2.1.js')?>"></script>
    <!-- Bootstrap -->
    <script type="application/javascript" src="<?= base_url('plugins/bootstrap/js/bootstrap.min.js')?>" ></script>
    <!-- EasyTemplate -->
    <script type="application/javascript" src="<?= base_url('js/easytemplate.js')?>"></script>
    <!-- SweetAlert -->
    <script type="application/javascript" src="<?= base_url('plugins/sweetalert/sweetalert.min.js')?>"></script>
    <!-- Cropper -->
    <script type="application/javascript" src="<?= base_url('plugins/cropper/cropper.min.js') ?>"></script>
    <!-- Smooth Scroll -->
    <script type="application/javascript" src="<?= base_url('js/smoothScroll.js') ?>"></script>
    <!-- Tippy -->
    <script type="application/javascript" src="<?= base_url('js/tippy.min.js') ?>"></script>
    <!-- Knob -->
    <script type="application/javascript" src="<?= base_url('js/knob.js') ?>"></script>
    <!-- Autosize -->
    <script type="application/javascript" src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>

    <!-- ion slider -->
    <script type="application/javascript" src="<?= base_url('js/ion.rangeSlider.min.js') ?>"></script>


    <!-- BASIC FUNCTIONS -->
    <script type="application/javascript" src="<?= base_url('js/functions.js') ?>"></script>

    <script type="application/javascript" src="<?= base_url('js/masonry.js') ?>"></script>

    <script type="text/javascript">
        var base_url = '<?= base_url() ?>';
        var $body = $("body");
        var logged = '<?= session()->ingresado ?>';
        var registroAbierto = false;
        var notificaciones_open = false;
        /*
        var chats_menu_open = false;
        var menu_open = false;*/

        var chatMenuAbierto = false;
        var menuPP = false;
        var notificacionesAbierto = false;
        var inputsNacYdeporteCargadosMenu = false;
        var menuPPseteado = false;

        var datosPerfil = [{}];

        function menus_iniciales() {
            //$('.btnsUsuario, .buscdorMenu').css('display', 'none');


            $('.close_alerts').unbind('click').on('click', function () {
                notificaciones_open = false;
                css_translate('.base_translate' , '0px');
                css_translate('.alertas' ,'0px');
                css_blur( '.contenedor , .contenedor_superior', 15 );
            });

            $('.close_chats').unbind('click').on('click', function () {
                chats_menu_open = false;
                css_translate('.base_translate' , '0px');
                css_translate('.chats' ,'0px');
                css_blur( '.contenedor , .contenedor_superior', 15 );
            });

            $('.show_alerts').unbind('click').on('click', function (e) {
                e.stopPropagation();
                notificaciones_open = true;
                css_translate('.base_translate' , '-'+  window.innerWidth * 0.27 +'px');
                css_translate('.alertas' ,'-100%');
                css_translate('.chats' ,'0px');
                css_blur( '.contenedor , .contenedor_superior', 15 );
            });

            $('.show_chats').unbind('click').on('click', function (e) {
                e.stopPropagation();
                chats_menu_open = true;
                css_translate('.base_translate' , '-'+  window.innerWidth * 0.27 +'px');
                css_translate('.chats' ,'-100%');
                css_translate('.alertas' ,'0px');
                css_blur( '.contenedor , .contenedor_superior', 15 );
            });

             $('.act_menu').unbind('click').on('click',function (e) {
                e.stopPropagation();
                menu_open = true;
                css_translate('.menu_lateral' ,'0%');
                css_translate('.base_translate' , window.innerWidth * 0.27 +'px');
                css_blur( '.contenedor , .contenedor_superior', 15 );
            });
        }

        function ordenarGrid(){
            if($(window).width > 1024){
                $('.grid').masonry({
                    itemSelector: '.grid-item',
                    columnWidth: 350,
                    gutter: 15
                });
            }
            else{
                $('.grid').masonry({
                    itemSelector: '.grid-item',
                    columnWidth: 350,
                    gutter: 15,
                    fitWidth: true
                });
            }

        }

        function cerrarChat(){
            $('.moverDer , .menuChatDerecho').css('transform', 'translateX(0)');
            $('#contenedor_perfil  , .perfilPP , .contenidoPerfil, .pubsUser , .blurerItem').css('filter', 'blur(0)');
            $('.menuChatDerecho').css('left','calc(100% + 300px)');
            $('.coverNegro').css('display','none');
            chatMenuAbierto = false;
        }

        function cerrarMenuPP(){
            $('.moverDer , .menuChatDerecho').css('transform', 'translateX(0)');
            $('#contenedor_perfil  , .perfilPP , .contenidoPerfil, .pubsUser, .blurerItem').css('filter', 'blur(0)');
            $('.menuDesplegable').css('left','-300px');
            $('.coverNegro').css('display','none');
            $('.modalPerfil').css('left','-100%');
            deselecionarBtnsMenuIz();
            menuPP = false;
        }

        function cerrarNotificaciones(){
            $('.moverDer , .menuChatDerecho').css('transform', 'translateX(0)');
            $('#contenedor_perfil  , .perfilPP , .contenidoPerfil, .pubsUser, .blurerItem').css('filter', 'blur(0)');
            $('.menuChatDerecho').css('left','calc(100% + 300px)');
            $('.coverNegro').css('display','none');
            if(notificacionesAbierto)
            {
                $('.notificacion').addClass('notifyVista');
            }
            $('.notificaciones').css('top','100%');
            notificacionesAbierto = false;
        }

        function deselecionarBtnsMenuIz() {
            $('.btnMenuIz').removeClass('btnMenuIzSelected');
        }

        function opcionesBuscador() {
            $('.buscdorMenu').on('click', function(){
                if(!menuPP && !chatMenuAbierto){
                    $('.especBuscador').css('top','50px');
                }

            });

            $(document).mouseup(function(e)
            {
                var container = $(".buscdorMenu , .especBuscador");

                // if the target of the click isn't the container nor a descendant of the container
                if (!container.is(e.target) && container.has(e.target).length === 0)
                {
                    $('.especBuscador').css('top','0');
                }

                if(menuPP){
                    container = $('.menuDesplegable, .modalPerfil');
                    if (!container.is(e.target) && container.has(e.target).length === 0)
                    {
                        cerrarMenuPP();
                    }
                }

                if(chatMenuAbierto){
                    container = $('.menuChatDerecho ');
                    if (!container.is(e.target) && container.has(e.target).length === 0)
                    {
                        cerrarChat();
                    }
                }

                if(notificacionesAbierto){
                    container = $('.notificaciones ');
                    if (!container.is(e.target) && container.has(e.target).length === 0)
                    {
                        cerrarNotificaciones();
                    }
                }
            });
        }


        function  menusYchatPP() {

            if(menuPPseteado){
                return;
            }
            $('.menuInferior , .chatsDesplegables').show();

            var userScroll = 0;
            var _perfilHide = false;

            $(window).on('scroll', function() {
                var newScroll = $(document).scrollTop();
                var _height = $('.perfilPP').height() - 740;
                if($( window ).width() > 1024){
                    if(userScroll - newScroll > _height || newScroll - userScroll > _height){
                        $('.perfilPP').css('transform', 'translateX(-400px)');
                        $('.contenidoPerfil').css('margin-left','0').css('width','100%');
                        _perfilHide = true;
                        ordenarGrid();
                    }
                    else if(_perfilHide){
                        $('.contenidoPerfil').css('margin-left','400px').css('width','calc(100% - 404px)');
                        $('.perfilPP').css('transform', 'translateX(0px)');
                        _perfilHide = false;
                        ordenarGrid();
                    }
                }
                var scrollHeight = $(document).height();
                var scrollPosition = $(window).height() + $(window).scrollTop();
                if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
                    pubs = $('.grid-item').not('.cloned').clone().addClass('cloned');
                    $('.grid').append(pubs).masonry( 'appended', pubs );
                }
            });

          var _alturaContatos = $(window).height() - 220;

            $('.listaDeContactos').height(_alturaContatos);


            $('#toggleChatUser').on('click', function(){
                if(!chatMenuAbierto){
                    cerrarMenuPP();
                    cerrarNotificaciones();
                    $('#contenedor_perfil , .perfilPP , .contenidoPerfil , .pubsUser, .blurerItem').css('filter', 'blur(10px)');
                    $('.moverDer').css('transform', 'translateX(-300px)');
                    $('.menuChatDerecho').css('left','calc(100% - 300px)');
                    $('.coverNegro').css('display','block');
                    chatMenuAbierto = true;
                }
            });


            $('#btnMenuIz').on('click', function(){
                if(!menuPP){
                    cerrarChat();
                    cerrarNotificaciones();
                    $('#contenedor_perfil , .perfilPP , .contenidoPerfil , .pubsUser, .blurerItem').css('filter', 'blur(10px)');
                    $('.moverDer').css('transform', 'translateX(300px)');
                    $('.menuDesplegable').css('left','0');
                    $('.coverNegro').css('display','block');
                    menuPP = true;
                }
            });

            $('#btnNotificaciones').on('click', function(){
                if(!notificacionesAbierto){
                    cerrarChat();
                    cerrarMenuPP();
                    $('#contenedor_perfil , .perfilPP , .contenidoPerfil , .pubsUser, .blurerItem').css('filter', 'blur(10px)');
                    $('.coverNegro').css('display','block');
                    $('.circuloNot').css('display','none');
                    var h = window.innerHeight - 50;
                    var _top = h - $('.notificaciones').height() + 2;

                    $('.notificaciones').css('top', _top + 'px');
                    notificacionesAbierto = true;
                }
            });

            $('#cerrarChatDerecho').on('click', function(){cerrarChat();});
            $('#cerrarMenuPP').on('click', function(){cerrarMenuPP();});


            $('.btnMenuInf').mouseover(function () {
                $(this).css('background','#1db383');
                $(this).children('span').css('color','#fff');
                $(this).children('i').css('color','#fff');
            });

            $('.btnMenuInf').mouseout(function () {
                $(this).css('background','#fff');
                $(this).children('span').css('color','#1db383');
                $(this).children('i').css('color','#1db383');
            });

            $('.btnMenuIz').on('click', function () {
                $('.btnMenuIzSelected').removeClass('btnMenuIzSelected');
                $(this).addClass('btnMenuIzSelected');
            });

            $('.btnMenuIz').on('click', function () {
                var target =   $(this).attr('target');
                $('.modalPerfil').css("left","-100%");
                if(window.innerWidth > 680){
                    $('#' + target).css("left","300px");
                }
                else{
                    cerrarMenuPP();
                    $('.moverDer').css({transform: 'translateX(0)'});
                    $('#' + target).css({left: 0, width: '100%'});
                }
            });

            $('.cerrarMoldaPerfil').on('click',function () {
                $(this).parents('.modalPerfil').css('left','-100%');
                deselecionarBtnsMenuIz();
            });

            $('.clubLegible').on('click', function () {
                var elegido = $(this).attr('elegido');
                var id =  $(this).attr('clubid');
                if(elegido == 'false'){
                    $(this).attr('elegido', true).css('border',' 1px solid #008077;').css('background','#41a29c');
                    $('#check-' + id).attr('class','icon-check boxElegido');
                    $('#nombreClub-' + id).css({"color": "#fff"});
                }
                else if (elegido == 'true'){
                    $(this).attr('elegido', false).css('border',' 1px solid #ccc;').css('background','#fff');
                    $('#check-' + id).attr('class','icon-check-empty boxNeutro');
                    $('#nombreClub-' + id).css({"color": "#000"});
                }
            });

            $('.hoverCambiar').on('click', function () {
               var _target = $(this).attr('target');
               var _input = $(this).attr('idinput');
               var file = $('#'+ _input);
               var img = $('#'+ _target);
                /*
                img.on('change', function () {
                    console.log($(this).attr('src'));
                });*/

                img.unbind('load').on('load', function () {
                    console.log($(this).attr('src'));
                    //console.log(imageToDataUri(this, $(this).width() , $(this).height , 0.8));
                });
               file.unbind('change').on('change',function (e) {
                   //readURL(file, '#'+ _target)
                   previsualizarIMGinputFile(this, '#'+ _target , 400);
               });
               file.click();


               /*
                $('#' + _input + '_final').on('change',function () {
                   console.log($(this).val());
                });*/
            });

            menuPPseteado = true;
        }

        function formatearPerfil(datosPerfil) {
            cargando_ajax();
            perfil = datosPerfil.responseJSON;

            if(perfil.usuario == "undefined"){
                modalImin('El usuario no existe!','error');
            }

            $('#tituloPPperfil , .nombrePerfilPP , .infoPerfil1 h4').text(perfil.nombre + " " + perfil.apellido);
            $('.fotoPerfilPP , #imgMyChat ,.fotoPerfilMenu').attr('src', base_url + perfil.avatar);
            $('.imgPerfilPP img').attr('src', base_url + perfil.cuerpo_completo);
            if(perfil.verificado == true){
                $('.nombrePerfilPP').append('<i class="icon-ok-circled"></i>');
            }
            $('#banderaNacionalidad').attr('src', base_url + 'img/banderas/' + perfil.id_pais_nac + '.svg' );
            $('#nacionalidadPerfil').text(  cod_paises(perfil.id_pais_nac) );

            $('#banderaLocalidad').attr('src', base_url + 'img/banderas/' + perfil.id_pais_nac + '.svg' );
            $('#localidadPerfil').text(  cod_paises(perfil.id_pais_res) + ' - ' + perfil.ciudad );

            $('#perfilNacimiento').text(perfil.fecha_nacimiento);

            $('#alturaPerfil').text((perfil.altura != 'N/A')? perfil.altura + " m" : 'N/A');
            $('#pesoPerfil').text((perfil.altura != 'N/A')? perfil.peso + " Kg" : 'N/A');

            if(perfil.id_deporte == 1){
                $('#imgDeportePerfil').attr('src', base_url + 'img/Deportes/futbol_b.png');
                $('#deportePerfil').text('Futbol');

                $('#clubPerfil').attr('src', (perfil.club == "N/A") ? base_url + 'img/clubes/sinclub.png' : base_url + 'img/clubes/' + perfil.club +'.png');
                $('#clubPerfilNombre').text(perfil.club);
                $('#perfilLiga').text(perfil.liga);
                $('#golesYpartidosPerfil').text(perfil.goles + ' - ' + perfil.partidos);
            }

            $('.aboutMe').text(perfil.presentacion);
            $('#presentacionLikes').text(perfil.presentacion_likes + " Likes");
            $('#presentacionVisitas').text(perfil.presentacion_visitas + " Visitas");

            $('.perfilSocialOption').html();
            if(perfil.mi_perfil == false){
                $('.perfilSocialOption').append('<div class="btnOpcionFollow">Seguir</div>');
            }
            else{
                $('.perfilSocialOption').append('<div class="btnOpcionFollow" id="editarMiPerfil">Editar perfil</div>');
                $('#editarMiPerfil').on('click',function () {
                    $('#btnMenuIz').click();
                    $('.btnMenuIz[target="modalCaracteristicas"]').click();
                });
                $('#OAimgCP').attr('src', base_url + perfil.cuerpo_completo);
            }

            if(perfil.tipo_cuenta == 2 || perfil.tipo_cuenta == 3){
                $('.perfilSocialOption').append('<div class="btnOpcionFollow">Scout</div>');
            }
        }


        function cod_paises(_int) {
            switch (_int) {
                case '12': return 'Argentina';break;
                case '44': return 'Chile';break;
            }
        }

        function tabsGenericos(){
            $('.tabGenericOptionSelected').each(function () {
               var _target = $(this).attr('target');
               $('#' + _target).css('display', 'block');
            });

            $('.tabGenericOption , .tabGenericOptionSelected').on('click', function () {
                $('.contModalOptionsTabs').css('display','none');
                var _target = $(this).attr('target');
                $('#' + _target).css('display', 'block');
                console.log('#' + _target);
                $('.tabGenericOptionSelected').attr('class','tabGenericOption');
                $(this).attr('class','tabGenericOptionSelected');
            });

            if(!inputsNacYdeporteCargadosMenu && seccion_actual != 'home'){
                deporteYnacionalidadSelects();
            }
        }

        function deporteYnacionalidadSelects() {
            setTimeout(function(){
                var datos = { url: base_url + 'deportes' };
                ajax_call('cargar_inpu_deportes', datos);
            }, 1000);

            setTimeout(function(){
                var datos = { url: base_url + 'paises' };
                ajax_call('cargar_inpu_paises', datos);
            }, 2000);
        }

        function carruselHome(){

            var _patrocinadores = $('.patrocinadores').width();
            var _totalSelectores = 0;

            $('.pat-item').each(function () {
                _totalSelectores += $(this).width();
            });

            var totalPatSelectores = Math.ceil(_totalSelectores / _patrocinadores);

            for(var i = 0;i < totalPatSelectores;i++){

                var _html = (i == 0) ? '<div class=\"pat-selector pat-elegidos\" num=\"' + i + '\"></div>': '<div class=\"pat-selector\" num=\"' + i + '\" ></div>' ;

                $('.pat-list').append(_html);
            }

            $('.pat-selector').on('click' , function () {
                $('.pat-selector').attr('class','pat-selector');
                $(this).addClass('pat-elegidos');
                var index = $(this).attr('num');
                console.log(index);
                $('.patrocinadores').stop().animate({
                    scrollLeft: index * _patrocinadores
                }, 1000);
            });
        }

        function cargar_seccion( _seccion ) {

            console.log('estas en la seccion ' + _seccion);

            cargar_contenido(_seccion);
            switch (_seccion){
                case 'home':

                    deporteYnacionalidadSelects();
                    opcionesBuscador();

                    $(window).on('load',function(){
                        carruselHome();
                    });

                    $('#fotoUsuario').on('click',function () {
                        $('#foto_deportista').click();
                    });

                    $(".fotoPerfil").change(function() {
                        previsualizarIMGinputFile(this , '.fotoPerfilActual');
                    });



                    $('.formRegistro').hide();

                    $('.item-tipo-cuenta').on('click', function () {
                        var showForm = $(this).attr('target');
                        $('.eligeTipoCuenta').hide();
                        $('#volverTipoRegistro').css('display', 'block');
                        var _tipo = $(this).attr('type');
                        $('#headerReg').text("Registrar " + _tipo);
                        $('#registroEspecial').attr('tipo' , _tipo);
                        $('#'+ showForm).show(250);
                    });

                    $('#volverTipoRegistro').on('click', function () {
                        var loc = $(this).attr('loc');
                        if(loc == "menu"){
                            $('.formRegistro').hide();
                            $(this).hide();
                            $('#headerReg').text('Registrar cuenta');
                            $('.eligeTipoCuenta').show(250);
                        }
                        else {
                            $('.formasDePago').hide();
                            $('#headerReg').text('Registrar ' + loc);
                            $(this).attr('loc','menu');
                            $('#registro' + loc).show(250);
                        }
                        //console.log(_loc);
                    });


                    $('.montoApagar').text(montoAPagar());

                    $('#planDePago').change(function () {
                        $('.montoApagar').text(montoAPagar());
                    });

                    $('#pagoConTarjeta').show();

                    $('.tabPubUserOption').on('click', function () {
                        var target = $(this).attr('target');
                        $('.tabPubUserOption').attr('class','tabPubUserOption');
                        $(this).addClass('tabPubUserOptionSelected');
                        $('.formaDePago').hide();
                        $('#pagoCon' + target).show(250);
                    });

                    $('#btnCerrarModal').on('click', function () {
                        $('.modalCentral').removeClass('jackInTheBox fadeIn').addClass('fadeOut').one("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
                            $(this).css('display', 'none');
                        });
                    });

                    $('#btnOlvideCuenta').on('click', function () {
                        alert('despues de terminar todas las fasetas de deportista se hara esta parte.')
                    });

                    /* ######### Funciones login ######### */
                    $('#btnIniciarSesion').on('click',function () {
                        var datos = { url: base_url + 'login/login' , form: $('#inputsLogin').serialize() };
                        ajax_call('login_verificar' , datos);
                    });

                    /* ######### Funciones registro ######### */

                    $('.btnRegistarCuenta').on('click',function () {
                        var _tipo = $(this).attr('tipo');
                        if(_tipo == "Deportista"){
                            ///console.log($('#registroDeportista').serialize());
                            $('#foto_deportista_base64').val($('#imagenAvatar').attr('src'));
                            var datos = { url: base_url + 'registrar_usuario' , form: $('#registroDeportista').serialize() };
                            ajax_call('registro_crear', datos);
                        }

                    });

                    $("#alturaReg").ionRangeSlider({
                        type: "single",
                        grid: false,
                        hide_min_max: false,
                        hide_from_to: false,
                        min: 0.5,
                        max: 2.3,
                        step: 0.01,
                        from: 1.7,
                        postfix: " m"
                    });

                    $("#pesoReg").ionRangeSlider({
                        type: "single",
                        grid: false,
                        hide_min_max: false,
                        hide_from_to: false,
                        min: 45,
                        max: 110,
                        step: 1,
                        from: 55,
                        postfix: " Kg"
                    });


                break;
                case 'perfil':
                    //slider
                    animarItemMouseEnter('.imgPerfilAnimated' , 'rubberBand');
                    deporteYnacionalidadSelects();

                    var _usuario = window.location.pathname.split("/").pop();
                    if(_usuario != 'undefined'){
                        datosPerfil = ajax_call( 'formatearPerfil',{url: base_url + 'datosperfil', data: {usuario: _usuario}});
                    }
                    else{
                        modalImin('El usuario que buscas no existe','error');
                    }

                    ordenarGrid();
                    opcionesBuscador();
                    menusYchatPP();

                    $('.btnAccionesPub ').mouseover(function () {
                        var padre = $(this).parent('.grid-contenido');
                        padre.find('.btnAccionPub').css('height','84px');
                        padre.find('.btnAccionPub span').css('display', 'block').css('opacity', '1');
                    });

                    $('.btnAccionesPub ').mouseout(function () {
                        var padre = $(this).parent('.grid-contenido');
                        padre.find('.btnAccionPub').css('height','55px');
                        padre.find('.btnAccionPub span').css('display', 'none').css('opacity', '0');
                    });

                    $("#miAltura").ionRangeSlider({
                        type: "single",
                        grid: false,
                        hide_min_max: false,
                        hide_from_to: false,
                        min: 0.5,
                        max: 2.3,
                        step: 0.01,
                        from: 1.7,
                        postfix: " m"
                    });

                    $("#miPeso").ionRangeSlider({
                        type: "single",
                        grid: false,
                        hide_min_max: false,
                        hide_from_to: false,
                        min: 45,
                        max: 110,
                        step: 1,
                        from: 55,
                        postfix: " Kg"
                    });

                break;

                case 'scout':
                    opcionesBuscador();
                    menusYchatPP();
                    deporteYnacionalidadSelects();

                    $("#pretencionEconomicaFiltro").ionRangeSlider({
                        type: "double",
                        grid: false,
                        hide_min_max: false,
                        hide_from_to: false,
                        min: 0,
                        max: 50000,
                        from: 0,
                        to: 15000,
                        prefix: "$"
                    });

                    $("#edadDeportista").ionRangeSlider({
                        type: "double",
                        grid: false,
                        hide_min_max: false,
                        hide_from_to: false,
                        min: 13,
                        max: 50,
                        from: 13,
                        to: 21,
                        postfix: " Años"
                    });

                    $("#distanciaDeportista").ionRangeSlider({
                        type: "double",
                        grid: false,
                        hide_min_max: false,
                        hide_from_to: false,
                        min: 0,
                        max: 2000,
                        from: 0,
                        to: 150,
                        postfix: " Km"
                    });
                    break;

                case 'logout':
                    window.location.href = '/logout'
                    break;
                case 'publicar':
                    opcionesBuscador();
                    menusYchatPP();
                    break;
                default:
                    console.log('se hace default');
            }
        }

        $(document).ready(function () {
            seccion_actual = '<?= $seccion ?>';
            menus_iniciales();
            tabsGenericos();
            cargar_seccion(seccion_actual);
            ajax_link();
            $('#toolbarContainer').remove();
        });

        $(window).on("load", function() {
            carga_completa();
        });

        window.addEventListener('popstate', function(event) {
            var parseurl = document.createElement('a');
            var URLactual = window.location.href;
            parseurl.href = URLactual;
            var seccion_back = parseurl.pathname.split("/");
            seccion_actual = seccion_back[1];
            if (seccion_actual == '') {seccion_actual = 'home';}
            cargar_seccion(seccion_actual);
        }, false);
    </script>

</html>
