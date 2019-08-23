<div class="contenedor_superior">
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
                    <img src="img/no-profile.png" alt="" id="imagenAvatar">
                    <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
                </div>
                <div class="campoModal">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Nombres" name="nombre">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Apellidos" name="apellido">
                    <input type="text" class="inputGenerico" placeholder="DNI" name="dni">
                    <input type="date" class="inputGenerico" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
                    <select class="selectGenerico" name="genero">
                        <option value="" SELECTED>Sexo</option>
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
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Calle" name="calle">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Número" name="numero">
                    <input type="text" class="inputGenerico " placeholder="E-mail" name="email">
                    <input type="text" class="inputGenerico " placeholder="Usuario" name="usuario">
                    <input type="password" class="inputGenerico " placeholder="Contraseña" name="password">
                    <input type="password" class="inputGenerico " placeholder="Repite Contraseña" name="confirm_password">
                    <div class="btnsHome btnRegistarCuenta" tipo="Deportista" >Registrarse</div>
                </div>
            </form>

            <form class="formModal formRegistro" id="registroPeriodista">
                <div class="campoModal" id="fotoUsuario">
                        <img src="img/no-profile.png" alt="" id="imagenAvatar">
                        <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
                </div>
                <div class="campoModal">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Nombres" name="nombre">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Apellidos" name="apellido">
                    <input type="text" class="inputGenerico" placeholder="DNI" name="dni">
                    <input type="date" class="inputGenerico" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
                    <select class="selectGenerico" name="genero">
                        <option value="" SELECTED>Sexo</option>
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
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Calle" name="calle">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Número" name="numero">
                    <input type="text" class="inputGenerico " placeholder="E-mail" name="email">
                    <input type="text" class="inputGenerico " placeholder="Usuario" name="usuario">
                    <input type="password" class="inputGenerico " placeholder="Contraseña" name="password">
                    <input type="password" class="inputGenerico " placeholder="Repite Contraseña" name="confirm_password">
                    <div class="btnsHome btnRegistarCuenta" tipo="Deportista" >Registrarse</div>
                </div>
            </form>

            <form class="formModal formRegistro" id="registroProcurador">
                <div class="campoModal" id="fotoUsuario">
                    <img src="img/no-profile.png" alt="" id="imagenAvatar">
                    <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
                </div>
                <div class="campoModal">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Nombres" name="nombre">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Apellidos" name="apellido">
                    <input type="text" class="inputGenerico" placeholder="DNI" name="dni">
                    <input type="date" class="inputGenerico" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
                    <select class="selectGenerico" name="genero">
                        <option value="" SELECTED>Sexo</option>
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
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Calle" name="calle">
                    <input type="text" class="inputGenerico inputTextDoble" placeholder="Número" name="numero">
                    <input type="text" class="inputGenerico " placeholder="E-mail" name="email">
                    <input type="text" class="inputGenerico " placeholder="Usuario" name="usuario">
                    <input type="password" class="inputGenerico " placeholder="Contraseña" name="password">
                    <input type="password" class="inputGenerico " placeholder="Repite Contraseña" name="confirm_password">
                    <div class="btnsHome btnRegistarCuenta" tipo="Deportista" >Registrarse</div>
                </div>
            </form>

            <form class="formModal formRegistro" id="registroClub">
                <div class="campoModal" id="fotoUsuario">
                        <img src="img/no-profile.png" alt="" id="imagenAvatar">
                        <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
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
                        <img src="img/no-profile.png" alt="" id="imagenAvatar">
                        <i class="icon-plus-circled-1 colorPP" id="cambiarFotoRegistro"></i>
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

            <div class="formModal formasDePago">
                <div class="tabsPubUser tabsMetodos">
                    <div class="tabPubUserOption tabPubUserOptionSelected" target="Tarjeta"><i class="icon-credit-card-alt"></i></div>
                    <div class="tabPubUserOption" target="Paypal"><i class="icon-paypal"></i></div>
                    <div class="tabPubUserOption" target="Dinero"><i class="icon-money-1"></i></div>
                </div>
                <div class="suscripcionEleccion">
                    <span class="labelTarjeta">Plan: </span>
                    <select class="selectGenerico" id="planDePago">
                        <option value="1" selected>1 mes</option>
                        <option value="3" >3 meses</option>
                        <option value="6" >6 meses</option>
                        <option value="12" >12 meses</option>
                        <option value="24" >24 meses</option>
                        <option value="100" >Permanente</option>
                    </select>
                    <div class="montoBox">
                        <div class="montoApagar">
                            $0,00
                        </div>
                    </div>
                </div>
                <form class="formTarjeta formaDePago" id="pagoConTarjeta">
                    <input type="text" class="inputGenerico" placeholder="Numero de la tarjeta" name="num_tarjeta">
                    <input type="text" class="inputGenerico" placeholder="Nombre completo en tarjeta" name="nombre_tarjeta">
                    <span class="labelTarjeta">Vencimiento: </span>
                    <input type="number" class="numGenerico-2 txtCenter focusGenerico" placeholder="mm"><input type="number" class="numGenerico-2 txtCenter focusGenerico" placeholder="YY">
                    <br>
                    <span class="labelTarjeta">CCV: </span>
                    <input type="number" class="numGenerico-4 txtCenter focusGenerico" placeholder="xxx">
                    <div class="btnsHome " id="confirmarTarjeta">Pagar suscripción</div>
                </form>

                <div class="formaDePago" id="pagoConPaypal">
                    <div class="btnPaypal">
                        Pagar con paypal
                    </div>
                </div>

                <div class="formaDePago" id="pagoConDinero">
                    <h3 class="tituloPD">Pagos por caja</h3>
                    <a href="https://google.com.ar" class="pagoPorCaja">
                        <img src="<?=base_url('img/metodosdepago/pagofacil.png') ?>" alt="">
                    </a>
                    <a href="https://google.com.ar" class="pagoPorCaja">
                        <img src="<?=base_url('img/metodosdepago/rapipago.png') ?>" alt="">
                    </a>
                    <a href="https://google.com.ar" class="pagoPorCaja">
                        <img src="<?=base_url('img/metodosdepago/wester.png') ?>" alt="">
                    </a>
                    <h3 class="tituloPD">Metodos especiales</h3>
                    <a href="https://google.com.ar" class="pagoPorCaja">
                        <img src="<?=base_url('img/metodosdepago/mercadopago.png') ?>" alt="">
                    </a>
                </div>
            </div>

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
            <form class="formLogin" style="margin-top: 20px">
                <input type="text" class="inputGenerico " placeholder="Usuario / E-mail">
                <input type="password" class="inputGenerico " placeholder="Contraseña">
                <div class="boxes">
                    <input type="checkbox" id="box-1">
                    <label for="box-1">Recordar cuenta</label>
                </div>
                <div id="btnsLogin">
                    <div class="btnGenericoInline" id="btnOlvideCuenta">Olvide la contraseña</div>
                    <a class="btnGenericoInline" id="btnIniciarSesion" href="perfil">Login</a>
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

    <div class="modalCentral animated jackInTheBox fadeIn">
        <div class="simbolo">
            <i class="icon-ok-circled modalC-ok"></i>
        </div>
        <p>Soy un texto de prueba</p>
        <div class="btnModalCentral" id="btnCerrarModal">Ok</div>
    </div>
    <!--// Modal Cropper Avatar -->
</content>
