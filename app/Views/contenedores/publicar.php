<content class="contenedor hidden" id="contenedor_publicar">
    <form class="contCrearPublicacion">
        <div class="agregarIMGpub">
            <span>Click aqui y elige una imagen o video</span>
        </div>
        <input name="img_publicar" type="file" multiple class="hidden"/>
        <textarea name="txt_publicar" placeholder="Escribe un estado" id="txt_publicar"></textarea>
        <div class="hashTagContainers">
            <div class="hashtagFinales">

            </div>
            <div class="hashtagMaker">
                <input type="text" class="inputTxtPublicar">
                <div class="btnHashtagMaker" id="crearHashtag">
                    <span>Agregar Hashtag</span>
                </div>
                <div class="btnHashtagMaker" id="borrarHagtag">
                    <i class="icon-cancel"></i>
                </div>
            </div>
            <h3 style="color: #58b0d2;">Quienes pueden ver el post</h3>
            <div class="quienPuedeVerPub">
                <div class="boxes">
                    <input type="checkbox" id="ver_deportistas" checked>
                    <label for="ver_deportistas">Deportistas</label>
                </div>
                <div class="boxes">
                    <input type="checkbox" id="ver_procurador" checked>
                    <label for="ver_procurador">Procurador</label>
                </div>
                <div class="boxes">
                    <input type="checkbox" id="ver_periodista" checked>
                    <label for="ver_periodista">Periodista</label>
                </div>
                <div class="boxes">
                    <input type="checkbox" id="ver_club" checked>
                    <label for="ver_club">Club</label>
                </div>
                <div class="boxes">
                    <input type="checkbox" id="ver_empresa" checked>
                    <label for="ver_empresa">Empresa</label>
                </div>
            </div>
            <h3 style="color: #58b0d2;">La publicación es para</h3>
            <div class="quienPuedeVerPub">
                <div class="boxes">
                    <input type="checkbox" id="para_social" checked>
                    <label for="para_social">Social</label>
                </div>
                <div class="boxes">
                    <input type="checkbox" id="para_habilidad" checked>
                    <label for="para_habilidad">Muestra de habilidad</label>
                </div>
                <span class="aclaracionNuevoPub">Los sociales son aquellos post que pueden ver todos los tipos de usuarios permitidos, pero si no esta marcada como muestra de habilidad, el procurador filtrara en la mayoria de los casos por muestras de habilidad.</span>
            </div>

        </div>
        <div class="btnOAm ">Publicar</div>
    </form>
</content>