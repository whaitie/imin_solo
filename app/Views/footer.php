    <div class="modal-loading"></div>
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

            $('.contenedor_general').unbind('click').click(function() {
                if(notificaciones_open || chats_menu_open || menu_open){
                    console.log('se van a ocultar los menus');
                    css_translate('.btnsUsuario' , '0px');
                    css_translate('.buscdorMenu' ,'0px');
                    css_blur( '.contenedor , .contenedor_superior', 0 );
                    menu_open, chats_menu_open , notificaciones_open = false;
                }
            });

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

        function cargar_seccion( _seccion ) {

            console.log('estas en la seccion ' + _seccion);
            cargar_contenido(_seccion);
            switch (_seccion){
                case 'home':
                    setTimeout(function(){
                        var datos = { url: base_url + '/deportes' };
                        ajax_call('cargar_inpu_deportes', datos);
                    }, 1000);

                    setTimeout(function(){
                        var datos = { url: base_url + '/paises' };
                        ajax_call('cargar_inpu_paises', datos);
                    }, 2000);

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

                break;
                case 'register':

                break;
                case 'app':

                break;
                case 'perfil':
                    //slider
                    animarItemMouseEnter('.imgPerfilAnimated' , 'rubberBand');
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
