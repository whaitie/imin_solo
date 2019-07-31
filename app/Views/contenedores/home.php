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
                <h2 class="colorPP">Registar Cuenta</h2>
                <div class="lineaModal"></div>
            </div>

            <form class="formModal" id="registerForm">
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
                    <select class="selectGenerico" name="tipo_cuenta">
                        <option value="" SELECTED>Tipo cuenta</option>
                        <option value="1">Deportista</option>
                        <option value="2">Club</option>
                        <option value="3">Periodista</option>
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
                    <div class="btnsHome" id="btnRegistarCuenta">Registrarse</div>
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
