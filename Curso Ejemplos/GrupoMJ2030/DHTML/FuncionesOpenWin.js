/* DEFINICION DE FUNCIONES PARA OPEN WIN */
    
function SetBox(idBox,idBtn) {
    // cargar estado de la box
    var estado = document.getElementById(idBox).style.display;
    // evaluar estado
    if (estado=='block') {
        // cerrar box
        document.getElementById(idBox).style.display='none';
        document.getElementById(idBtn).src          ='images/more.gif';
        document.getElementById(idBtn).title        ='click para expandir';
        document.getElementById(idBtn).alt          ='click para expandir';                
    } else {
        // abrir box
        document.getElementById(idBox).style.display= 'block';
        // cambiar imagen y textos
        document.getElementById(idBtn).src  ='images/less.gif';
        document.getElementById(idBtn).title='click para comprimir';
        document.getElementById(idBtn).alt  ='click para comprimir';                
    } // endif
} // end function

function OpenWin(url) {
    // abrir una ventana con determinadas características
    // mostrando el contenido de la url
    window.open(url,'view','top=100,left=300,width=400,height=300');
} // end function

function cargarCont(id) {
            // inicializar Objeto AJAX
            var xhr;
            if (window.XMLHttpRequest) {
                // crear objeto para chrome, fx, opera, safari, ie7+
                xhr = new XMLHttpRequest;
            } else {
                // crear objeto para IE5,IE6
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            } // endif
            
            // realizar petición
            xhr.open("POST","Noticia01",true);
            xhr.send(null);
            
            // controlar petición
            xhr.onreadystatechange = function() {
                // window.alert(xhr.readyState);
                if (xhr.readyState==4 && xhr.status==200) {
                    document.getElementById(id).innerHTML = xhr.responseText;
                } // endif
            } // end function
        } // end function     