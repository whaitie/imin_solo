    <div class="modal-loading"></div>
    <div class="menuInferior">
        <div class="btnMenuInf">
            <i class="icon-pencil"></i>
            <span>Publicar</span>
        </div>

        <div class="btnMenuInf">
            <i class="icon-home"></i>
            <span>Home</span>
        </div>

        <div class="btnMenuInf">
            <i class="icon-bell"></i>
            <span>Notificaciones</span>
        </div>

        <div class="btnMenuInf">
            <i class="icon-cog"></i>
            <span>Configuración</span>
        </div>

        <div class="btnMenuInf btnOpenMychat" id="toggleChatUser">
            <div class="userChat">
                <img src="img/perfil1.jpg" alt="">
                <div class="circulosChat conectado estadoChatMI"></div>
            </div>
        </div>
    </div>




    <div class="menuDesplegable">
        <div class="infoPerfil1">
            <div>
                <img src="img/perfil1.jpg" alt="" class="fotoPerfilMenu">
            </div>
            <h3>Stefanee cryff</h3>
            <div class="circulosChat conectado"></div>
        </div>
    </div>


    <div class="chatsDesplegables">
        <div class="userChat">
            <img src="img/perfil2.jpg" alt="">
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
                        <img src="img/perfil2.jpg" alt="">
                        <div class="circulosChat ocupado estadoChatcontacto"></div>
                    </div>
                    <div class="userChatInfo">
                        <p>Steven Prob</p>
                        <div class="tipoUser">Procurador</div>
                    </div>
                </div>

                <div class="contactoChat">
                    <div class="userChat">
                        <img src="img/perfil3.jpg" alt="">
                        <div class="circulosChat conectado estadoChatcontacto"></div>
                    </div>
                    <div class="userChatInfo">
                        <p>Charles Mickels</p>
                        <div class="tipoUser">Deportista</div>
                    </div>
                </div>

                <div class="contactoChat">
                    <div class="userChat">
                        <img src="img/perfil4.jpg" alt="">
                        <div class="circulosChat especial estadoChatcontacto"></div>
                    </div>
                    <div class="userChatInfo">
                        <p>Sebastian Vignolo</p>
                        <div class="tipoUser">Periodista</div>
                    </div>
                </div>

                <div class="contactoChat">
                    <div class="userChat">
                        <img src="img/perfil5.png" alt="">
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

    <!-- BASIC FUNCTIONS -->
    <script type="application/javascript" src="<?= base_url('js/functions.js') ?>"></script>

    <script type="application/javascript" src="<?= base_url('js/masonry.js') ?>"></script>

    <script type="text/javascript">
        var base_url = '<?= base_url() ?>';
        var $body = $("body");
        var logged = '<?= session()->ingresado ?>';
        var registroAbierto = false;
        var notificaciones_open = false;
        var chats_menu_open = false;
        var menu_open = false;

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

        function opcionesBuscador() {
            $('.buscdorMenu').on('click', function(){
                console.log("holaaaa");
                $('.especBuscador').css('top','50px');
            });

            $(document).mouseup(function(e)
            {
                var container = $(".buscdorMenu , .especBuscador");

                // if the target of the click isn't the container nor a descendant of the container
                if (!container.is(e.target) && container.has(e.target).length === 0)
                {
                    $('.especBuscador').css('top','0');
                }
            });
        }

        function cargar_seccion( _seccion ) {

            console.log('estas en la seccion ' + _seccion);
            cargar_contenido(_seccion);
            switch (_seccion){
                case 'home':
                    setTimeout(function(){
                        var datos = { url: base_url + 'deportes' };
                        ajax_call('cargar_inpu_deportes', datos);
                    }, 1000);

                    setTimeout(function(){
                        var datos = { url: base_url + 'paises' };
                        ajax_call('cargar_inpu_paises', datos);
                    }, 2000);

                    opcionesBuscador();

                    //Carrusel de patrocinadores
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

                    $('.btnRegistarCuenta').on('click', function () {
                        var _loc = $(this).attr('tipo');
                        $('#volverTipoRegistro').attr('loc', _loc);
                        $('.formModal').hide();
                        $('#headerReg').text('Metodos de pago');
                        $('.formasDePago').show(250);
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
                        $('.modalCentral').stop().removeClass('fadeOut').addClass('jackInTheBox fadeIn').show().one("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
                            $(this).css('display', 'block');
                        });;
                    });

                break;
                case 'register':

                break;
                case 'app':

                break;
                case 'perfil':
                    //slider
                    animarItemMouseEnter('.imgPerfilAnimated' , 'rubberBand');

                    ordenarGrid();

                    opcionesBuscador();


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

                    $('#downMenu').on('click', function(){
                        if($(this).hasClass('icon-menu')){
                            $(this).removeClass('icon-menu').addClass( 'icon-cancel-2');
                            $('.contenedor').css('filter', 'blur(10px) brightness(50%)');
                            $('.moverDer , .menuDesplegable').css('transform', 'translateX(300px)');
                        }
                        else{
                            $(this).removeClass('icon-cancel-2').addClass( 'icon-menu');
                            $('.moverDer , .menuDesplegable').css('transform', 'translateX(0)');
                            $('.contenedor').css('filter', 'blur(0) brightness(100%)');
                        }
                    });

                    var chatMenuAbierto = false;

                    $('#toggleChatUser').on('click', function(){
                        if(!chatMenuAbierto){
                            console.log("Abierto");
                            $('#contenedor_perfil , .perfilPP , .contenidoPerfil , .pubsUser').css('filter', 'blur(10px)');
                            $('.moverDer').css('transform', 'translateX(-300px)');
                            $('.menuChatDerecho').css('left','calc(100% - 300px)');
                            $('.coverNegro').css('display','block');
                            chatMenuAbierto = true;
                        }
                        else{
                            cerrarChat();
                        }
                    });

                    $('#cerrarChatDerecho').on('click', function(){cerrarChat();});

                function cerrarChat(){
                    $('.moverDer , .menuChatDerecho').css('transform', 'translateX(0)');
                    $('#contenedor_perfil  , .perfilPP , .contenidoPerfil, .pubsUser').css('filter', 'blur(0)');
                    $('.menuChatDerecho').css('left','calc(100% + 300px)');
                    $('.coverNegro').css('display','none');
                    chatMenuAbierto = false;
                }

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
                break;
                default:
                    console.log('se hace default');
            }
        }

        $(document).ready(function () {
            seccion_actual = '<?= $seccion ?>';
            menus_iniciales();
            cargar_seccion(seccion_actual);
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
