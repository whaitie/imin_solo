<div class="contenedor_superior">
    <div class="menu moverDer">
        <div class="buscdorMenu">
            <input type="search" placeholder="Buscar" class="inputGenerico">
        </div>
        <div class="logoPatrocinadorMenu">
            <img src="<?= base_url('img/adidas_b.png') ?>" alt="">
        </div>
    </div>
</div>

<content class="contenedor hidden" id="contenedor_home">
    <div class="bginicio">
        <div class="centroHome">
            <img src="<?= base_url('img/logo.png') ?>" alt="" class="logoHome">
            <div class="btnsHome" id="btnLogin">Login</div>
            <div class="btnsHome" id="btnRegistro">Registrarse</div>
        </div>
        <div class="pat-head">
            Patrocinadores oficiales:
        </div>
        <div class="patrocinadores">


            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/cocacola.png') ?>" alt="">
            </a>

            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/adidas.jpg') ?>" alt="">
            </a>

            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/mcdonald.jpg') ?>" alt="">
            </a>

            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/ferrari.jpg') ?>" alt="">
            </a>

            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/epurita.png') ?>" alt="">
            </a>

            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/gatorade.jpg') ?>" alt="">
            </a>

            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/rollroyce.png') ?>" alt="">
            </a>

            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/cocacola.png') ?>" alt="">
            </a>

            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/cocacola.png') ?>" alt="">
            </a>

            <a class="pat-item" href="https://google.com.ar">
                <img src="<?= base_url('img/patrocinadores/cocacola.png') ?>" alt="">
            </a>
        </div>
        <div class="pat-list">

        </div>
    </div>

    <div class="modalPantallaCompleta" id="modalRegistro">
        <div class="contenidoModal">
            <div class="tituloModal">
                <i class="icon-angle-circled-left" id="volverTipoRegistro" loc="menu"></i>
                <h2 class="colorPP" id="headerReg">Registar Cuenta</h2>
                <div class="lineaModal"></div>
            </div>
            <div class="eligeTipoCuenta">
                <div class="item-tipo-cuenta" target="registroDeportista" type="Deportista">
                    <i class="icon-soccer-ball l-itc"></i>
                    <span class="l-itc">Deportista</span>
                </div>
                <div class="item-tipo-cuenta" target="registroDeportista" type="Periodista">
                    <i class="icon-mic l-itc"></i>
                    <span class="l-itc">Periodista</span>
                </div>
                <div class="item-tipo-cuenta" target="registroClub" type="Club">
                    <i class="icon-shield l-itc"></i>
                    <span class="l-itc">Club</span>
                </div>
                <div class="item-tipo-cuenta" target="registroDeportista" type="Procurador">
                    <i class="icon-user-secret l-itc"></i>
                    <span class="l-itc">Procurador</span>
                </div>
                <div class="item-tipo-cuenta" target="registroEmpresa" type="Empresa">
                    <i class="icon-building-filled l-itc"></i>
                    <span class="l-itc">Empresa</span>
                </div>
            </div>

            <form class="formModal formRegistro" id="registroDeportista">
                <div class="campoModal" id="fotoUsuario">
                    <a data-dismiss="modal" href="#" data-target="#modalCropperAvatar" data-toggle="modal">
                        <img src="img/no-profile.png" alt="" id="imagenAvatar">
                        <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
                    </a>
                </div>
                <div class="campoModal">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Nombres" name="nombre">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Apellidos" name="apellido">
                    <input type="text" class="inputGenerico" placeholder="DNI" name="dni">
                    <input type="date" class="inputGenerico" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
                    <select class="selectGenerico" name="genero" id="genero">
                        <option value="" SELECTED>Sexo</option>
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                    </select>
                    <select class="selectGenerico" name="id_deporte" id="contenedor_option_deporte">
                    </select>
                    <select class="selectGenerico" name="id_pais_nac" id="contenedor_option_nacionalidad">
                    </select>
                    <select class="selectGenerico" name="id_pais_res" id="contenedor_option_residencia">
                    </select>
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Provincia" name="provincia">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Calle" name="calle">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Número" name="numero">
                    <input type="text" class="inputGenerico " placeholder="E-mail" name="email">
                    <input type="text" class="inputGenerico " placeholder="Usuario" name="usuario">
                    <input type="password" class="inputGenerico " placeholder="Contraseña" name="password">
                    <input type="password" class="inputGenerico " placeholder="Repite Contraseña" name="confirm_password">
                    <div class="btnsHome btnRegistarCuenta" tipo="Deportista" id="registroEspecial">Registrarse</div>
                </div>
            </form>

            <form class="formModal formRegistro" id="registroPeriodista">
                <div class="campoModal" id="fotoUsuario">
                    <a data-dismiss="modal" href="#" data-target="#modalCropperAvatar" data-toggle="modal">
                        <img src="img/no-profile.png" alt="" id="imagenAvatar">
                        <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
                    </a>
                </div>
                <div class="campoModal">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Nombres" name="nombre">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Apellidos" name="apellido">
                    <input type="text" class="inputGenerico" placeholder="DNI" name="dni">
                    <input type="date" class="inputGenerico" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
                    <select class="selectGenerico" name="genero" id="genero">
                        <option value="" SELECTED>Sexo</option>
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                    </select>
                    <select class="selectGenerico" name="id_deporte" id="contenedor_option_deporte">
                    </select>
                    <select class="selectGenerico" name="id_pais_nac" id="contenedor_option_nacionalidad">
                    </select>
                    <select class="selectGenerico" name="id_pais_res" id="contenedor_option_residencia">
                    </select>
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Provincia" name="provincia">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Calle" name="calle">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Número" name="numero">
                    <input type="text" class="inputGenerico " placeholder="E-mail" name="email">
                    <input type="text" class="inputGenerico " placeholder="Usuario" name="usuario">
                    <input type="password" class="inputGenerico " placeholder="Contraseña" name="password">
                    <input type="password" class="inputGenerico " placeholder="Repite Contraseña" name="confirm_password">
                    <div class="btnsHome btnRegistarCuenta" tipo="Deportista" id="registroEspecial">Registrarse</div>
                </div>
            </form>

            <form class="formModal formRegistro" id="registroProcurador">
                <div class="campoModal" id="fotoUsuario">
                    <a data-dismiss="modal" href="#" data-target="#modalCropperAvatar" data-toggle="modal">
                        <img src="img/no-profile.png" alt="" id="imagenAvatar">
                        <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
                    </a>
                </div>
                <div class="campoModal">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Nombres" name="nombre">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Apellidos" name="apellido">
                    <input type="text" class="inputGenerico" placeholder="DNI" name="dni">
                    <input type="date" class="inputGenerico" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
                    <select class="selectGenerico" name="genero" id="genero">
                        <option value="" SELECTED>Sexo</option>
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                    </select>
                    <select class="selectGenerico" name="id_deporte" id="contenedor_option_deporte">
                    </select>
                    <select class="selectGenerico" name="id_pais_nac" id="contenedor_option_nacionalidad">
                    </select>
                    <select class="selectGenerico" name="id_pais_res" id="contenedor_option_residencia">
                    </select>
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Provincia" name="provincia">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Calle" name="calle">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Número" name="numero">
                    <input type="text" class="inputGenerico " placeholder="E-mail" name="email">
                    <input type="text" class="inputGenerico " placeholder="Usuario" name="usuario">
                    <input type="password" class="inputGenerico " placeholder="Contraseña" name="password">
                    <input type="password" class="inputGenerico " placeholder="Repite Contraseña" name="confirm_password">
                    <div class="btnsHome btnRegistarCuenta" tipo="Deportista" id="registroEspecial">Registrarse</div>
                </div>
            </form>

            <form class="formModal formRegistro" id="registroClub">
                <div class="campoModal" id="fotoUsuario">
                    <a data-dismiss="modal" href="#" data-target="#modalCropperAvatar" data-toggle="modal">
                        <img src="img/no-profile.png" alt="" id="imagenAvatar">
                        <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
                    </a>
                </div>
                <div class="campoModal">
                    <input type="text" class="inputGenerico" placeholder="Nombre" name="nombre">
                    <input type="text" class="inputGenerico" placeholder="Razon social" name="rason_social">
                    <input type="text" class="inputGenerico" placeholder="CUIT" name="cuit">
                    <input type="date" class="inputGenerico" placeholder="Fecha de inaguración" name="fecha_nacimiento">
                    <select class="selectGenerico " name="id_deporte" id="contenedor_option_deporte_club">
                    </select>
                    <select class="selectGenerico" name="id_pais_nac" id="contenedor_option_nacionalidad_club">
                    </select>
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Provincia" name="provincia">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Calle" name="calle">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Número" name="numero">
                    <input type="text" class="inputGenerico " placeholder="E-mail" name="email">
                    <input type="text" class="inputGenerico " placeholder="Usuario" name="usuario">
                    <input type="password" class="inputGenerico " placeholder="Contraseña" name="password">
                    <input type="password" class="inputGenerico " placeholder="Repite Contraseña" name="confirm_password">
                    <div class="btnsHome btnRegistarCuenta" tipo="Club">Registrarse</div>
                </div>
            </form>

            <form class="formModal formRegistro" id="registroEmpresa">
                <div class="campoModal" id="fotoUsuario">
                    <a data-dismiss="modal" href="#" data-target="#modalCropperAvatar" data-toggle="modal">
                        <img src="img/no-profile.png" alt="" id="imagenAvatar">
                        <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
                    </a>
                </div>
                <div class="campoModal">
                    <input type="text" class="inputGenerico" placeholder="Nombre empresa" name="nombre">
                    <input type="text" class="inputGenerico" placeholder="Encargado/Responsable" name="responsable">
                    <input type="text" class="inputGenerico" placeholder="Slogan" name="slogan">
                    <input type="text" class="inputGenerico" placeholder="Razon social" name="rason_social">
                    <input type="text" class="inputGenerico" placeholder="CUIL/CUIT" name="cuit">
                    <input type="date" class="inputGenerico" placeholder="Fecha de inaguración" name="fecha_nacimiento">
                    <select class="selectGenerico " name="condicion_fiscal">
                        <option value="sin_eleccion" selected>Condicion fiscal</option>
                        <option value="fisica">Fisica</option>
                        <option value="fisica">Juridica</option>
                    </select>
                    <br>
                    <h3>Sucursal principal</h3>
                    <br>
                    <select class="selectGenerico" name="id_pais_nac" id="contenedor_option_nacionalidad_empresa">
                    </select>
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Provincia" name="provincia">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Calle" name="calle">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Número" name="numero">
                    <br>
                    <input type="text" class="inputGenerico " placeholder="E-mail" name="email">
                    <input type="text" class="inputGenerico " placeholder="Usuario" name="usuario">
                    <input type="password" class="inputGenerico " placeholder="Contraseña" name="password">
                    <input type="password" class="inputGenerico " placeholder="Repite Contraseña" name="confirm_password">

                    <div class="btnsHome btnRegistarCuenta" tipo="Empresa">Registrarse</div>
                </div>
            </form>

            <form class="formModal formasDePago">
                <div class="tabsPubUser tabsMetodos">
                    <div class="tabPubUserOptionSelected"><i class="icon-credit-card-alt"></i></div>
                    <div class="tabPubUserOption"><i class="icon-paypal"></i></div>
                    <div class="tabPubUserOption"><i class="icon-money-1"></i></div>
                </div>
            </form>

        </div>
        <div class="footerModal">
            <i class="icon-up-big colorPP volverInicio" ></i>
        </div>
    </div>

    <div class="modalPantallaCompleta" id="modalLogin">
        <div class="contenidoModal">
            <div class="tituloModal">
                <h2 class="colorPP">Login</h2>
                <div class="lineaModal"></div>
            </div>
            <form class="formModal" style="margin-top: 20px">
                <input type="text" class="inputGenerico " placeholder="Usuario / E-mail">
                <input type="password" class="inputGenerico " placeholder="Contraseña">
                <div class="boxes">
                    <input type="checkbox" id="box-1">
                    <label for="box-1">Recordar cuenta</label>
                </div>
                <div id="btnsLogin">
                    <div class="btnGenericoInline" id="btnOlvideCuenta">Olvide la contraseña</div>
                    <a class="btnGenericoInline" id="btnIniciarSesion" href="perfil.html">Login</a>
                </div>

            </form>

        </div>
        <div class="footerModal">
            <i class="icon-up-big colorPP volverInicio" ></i>
        </div>
    </div>

    <!-- Modal Cropper Avatar -->
    <div class="modal animated jackInTheBox fadeout" id="modalCropperAvatar" role="dialog">
      <div class="modal-dialog modal-login">
        <div class="modal-content">
          <div class="modal-body">
            <span class="close-btn" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
            <div class="log-box">
                <h4 class="modal-title">Imágen Perfil</h4>
            </div>
            <input type="file" name="image" id="image" onChange="readURL(this);" accept="image/jpeg">
            <div class="image_container">
                <center><img id="image-avatar" src="" style="max-width: 350px; max-height: 100%"></center>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-cust" id="crop_button">Seleccionar</button>
            <button type="button" class="btn btn-cust" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
    <!--// Modal Cropper Avatar -->
</content>
