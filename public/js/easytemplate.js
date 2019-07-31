
var seccion_actual = 'home';
var desarrollo = true;

function render(props) {
    return function(tok, i) {
        return (i % 2) ? props[tok] : tok;
    };
}

function iterar_y_rendireziar(_data , _template , _hijo){
    var item = _data;
    var contenedor = 'contenedor_' + _template;
    var templates = '#' + _template;
    var template_hijo =  _template + '_' + _hijo;
    var atributos = _hijo;

    $.each( item , function (index , value) {
        //console.log(template_html(item[index][atributos] ,  template_hijo));
        if(isArray(item[index][atributos]) ){
            var html = '';
            html += template_html(item[index][atributos] ,template_hijo);
            item[index][atributos] = html;
        }
        else{
            var html = '';
            html += template_html(item[atributos] ,template_hijo);
            item[atributos] = html;
        }
    });

    renderizar(item , _template , templates);
}

function template_html(_data , _template) {
    console.log(_data);
    var itemTpl = $('#' +  _template).text().split(/\$\{(.+?)\}/g);

    var html = _data.map(function(item) {
        return itemTpl.map(render(item)).join('');
    });
    return html;
}

function renderizar(_data , _template) {
    var padre = '#contenedor_' + _template;
    var template = '#' + _template;
    var itemTpl = $(template).text().split(/\$\{(.+?)\}/g);

    var html = _data.map(function(item) {
        return itemTpl.map(render(item)).join('');
    });

    console.log(padre);
    $(padre).append(html);
    ajax_link();
}

function renderizar_padre(_data , _padre , _template, _order) {
    var padre = '#contenedor_' + _padre;
    var template = '#' + _template;
    var itemTpl = $(template).text().split(/\$\{(.+?)\}/g);

    var html = _data.map(function(item) {
        return itemTpl.map(render(item)).join('');
    });

    if( _order )
        $(padre).prepend(html);
    else
        $(padre).append(html);

    ajax_link();
}

function remplazar_y_renderizar(_data , _template){
    $('#contenedor_' + _template).html('');
    renderizar(_data , _template);
}

function remplazar_y_renderizar_padre(_data , _padre , _template){
    $('#contenedor_' + _padre).html('');
    renderizar_padre(_data , _padre , _template);
}

function renderizar_ultimo(_data , _template){
    var last = [_data[_data.length -1]];
    renderizar(last ,  _template);
}

function renderizar_especifico(_data , _index , _template){
    var item = [_data[_index]];
    renderizar(item , _template);
}

function ajax_link() {
    $('.link_asinc').off('click').on('click', function (event) {
        event.preventDefault();
        var html = $(this).attr("href");
        history.pushState({}, '', html);
        window.location.target = html;
        seccion_actual = $(this).attr('seccion');
        cargar_seccion(seccion_actual);
    });
}

function cargar_contenido(_seccion){
    $('body, html').animate({scrollTop: '0px'}, 300);
    $('.contenedor').hide();
    $('#contenedor_' + _seccion).attr('class','contenedor base_translate');
    $('#contenedor_' + _seccion).show();
}

function ajax_call(_nombre_metodo , _argumentos) {
    var data = {};
    var url = '';
    console.log(_argumentos);

    if (typeof _argumentos.form !== 'undefined') {
        data = _argumentos.form;
    }
    else if(typeof _argumentos.data !== 'undefined'){
        data = _argumentos.data;
    }
    else{
        msj_desarrollo('Advertencia: El form del JSON esta vacio, se pasa sin parametros via POST.');
    }


    if (typeof _argumentos.url == 'undefined') {
        return debug_msj(true , 'La URL esta vacia');
    }
    else{
        if(url_valida(_argumentos.url)){
            url = _argumentos.url;
        }
        else{
            return debug_msj(true , 'La URL no es valida');
        }
    }
    //console.log(data);
    $.ajax({
        type: 'POST',
        url: url ,
        data: data ,
        cache: false,
        dataType: 'json',
        error: function(msj) {
            console.log(msj);
        },
        complete: function (msj) {
            console.log(msj);
            window[_nombre_metodo](msj);
        }
    });
}

function css_translate(_item , _cantidad){
    $(_item).css('-webkit-transform', 'translate(' + _cantidad +')');
    $(_item).css('-moz-transform',  'translate(' + _cantidad +')');
    $(_item).css('-o-transform',  'translate(' + _cantidad +')');
    $(_item).css('transform',  'translate(' + _cantidad +')');
}

function css_blur(_item , _cantidad){
    $(_item).css('filter', 'blur(' + _cantidad +'px)');
    $(_item).css('-webkit-filter', 'blur(' + _cantidad +'px)');
    $(_item).css('-moz-filter', 'blur(' + _cantidad +'px)');
    $(_item).css('-o-filter', 'blur(' + _cantidad +'px)');
    $(_item).css('-ms-filter' , 'blur(' + _cantidad +'px)');
}

function url_valida(str) {
    var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
    return pattern.test(str);
}

function animarItem( _selector, _animacion ){
    if(   !$(_selector).hasClass('animated')  ){
        $(_selector).addClass('animated');
    }
    $(_selector).addClass(_animacion);
    $(_selector).on("animationend", function(){
        $(this).removeClass(_animacion);
    });
}

function animarItemMouseEnter( _selector, _animacion ){

    if(_selector.hover != null && _selector.objetivo != null){
        if(   !$(_selector.objetivo).hasClass('animated')  ){
            $(_selector.objetivo).addClass('animated');
        }
        $(_selector.hover).unbind('mouseenter').mouseenter(function(){
            $(_selector.objetivo).addClass(_animacion);
            $(_selector.objetivo).on("animationend", function(){
                $(_selector.objetivo).removeClass(_animacion);
            });
        });
    }
    else{
        if(   !$(_selector).hasClass('animated')  ){
            $(_selector).addClass('animated');
        }
        $(_selector).unbind('mouseenter').mouseenter(function(){
            $(this).addClass(_animacion);
            $(this).on("animationend", function(){
                $(this).removeClass(_animacion);
            });
        });
    }

}


function debug_msj(_error , _mensaje) {
    var data = {error: _error, mensaje: _mensaje};
    return data;
}

function msj_desarrollo(_msj) {
    if(desarrollo){
        console.log(_msj);
    }
}

function isArray(what) {
    return Object.prototype.toString.call(what) === '[object Array]';
}


function anguloObjeto(obj) {
    var matrix = obj.css("-webkit-transform") ||
        obj.css("-moz-transform")    ||
        obj.css("-ms-transform")     ||
        obj.css("-o-transform")      ||
        obj.css("transform");
    if(matrix !== 'none') {
        var values = matrix.split('(')[1].split(')')[0].split(',');
        var a = values[0];
        var b = values[1];
        var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
    } else { var angle = 0; }
    return angle;
}

$(document).ready(function () {
    ajax_link();
});

function tooltip(_id , _ubicacion){
    tippy(_id , {
        placement: _ubicacion,
        animation: 'shift-away',
        inertia: true,
        duration: 500,
        arrow: true
    });
}
