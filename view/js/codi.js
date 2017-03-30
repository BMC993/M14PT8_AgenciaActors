$(document).ready(function () {

    $("#formDirector").submit(function(event){
        var valid = validarDirector();
//        alert(valid);
        return valid;
//        event.preventDefault();
    });

});

function validarDirector() {
    var nom = $("#nomDirector").val();
    var cognom = $("#cognomDirector").val();
    var dni = $("#dniDirector").val();
    var valid = false;
    
    $.ajax({
//        url: "?ctl=validacions",
        url: "view/validacions/validacions.php",
        type: "POST",
        async: false,
        data: { "validar": "director", "nom": nom, "cognom": cognom, "dni": dni },
        dataType: "html",
        success: function (data) {
            alert(data);
            if (data == 1) {
                valid = true;
            } else {
                valid = false;
            }
        }
    }).fail(function(){alert("jajajaja");});
    
    return valid;
    
}



//Variables utilitzades per mostrar el botó. A cada comprovació d'errors
//de qualsevol camp, tant si troba com si no troba errors, cridarà a la funció mostrarAmagarBoto()
//var nomDirector = false;
//var cognomDirector = false;
//var dniDirector = false;






////Idioma
//function canviarIdioma() {
//    //S'agafa el valor de l'idioma (actualment: ca, es, en)
//    var idioma = $("#idioma").val();
//    
//    //Se li passa al php l'idioma. Segons l'idioma, actualitzarà els títols
//    $.getJSON("php/idiomes.php?idioma=" + idioma, function (traduccio) {
//
//        $("label[for='idioma']").html(traduccio.idioma + ": ");
//        $("label[for='nickname']").html(traduccio.nickname + ": ");
//        $("label[for='nom']").html(traduccio.nom + ": ");
//        $("label[for='dni']").html(traduccio.dni + ": ");
//        $("label[for='provincia']").html(traduccio.provincia + ": ");
//        $("label[for='municipi']").html(traduccio.municipi + ": ");
//        $("label[for='domicili']").html(traduccio.domicili + ": ");
//        $("#ubicacio").html(traduccio.ubicacio + ": ");
//        $("label[for='ruta']").html(traduccio.ruta + ": ");
//
//    }).fail(function () {
//        alert("Error Idiomes")
//    });
//}
//
////Nicknames
//function mostrarNicks() {
//    mostrarLoading("nicksExistents");
//    var nickname2 = $("#nickname").val();
//    
//    //Petició per comprovar el nickname
//    $.ajax({
//        url: "php/llistaNicknames.php",
//        type: "POST",
//        data: {"nickname": nickname2},
//        dataType: "html",
//        success: function (data) {
//            
//            //Si el value del nickname està buit, error
//            if (nickname2.trim() == "") {
//                mostrarError("nicksExistents", "Nick erroni.");
//                nickname = false;
//                mostrarAmagarBoto();
//            
//            //Si rep un 1, significa que ja existeix el nickname
//            } else if (data == 1) {
//                mostrarError("nicksExistents", "El nickname ja existeix");
//                nickname = false;
//                mostrarAmagarBoto();
//            
//            //Si rep un 2, significa que no hi ha cap nickname igual
//            } else if (data == 2) {
//                mostrarOk("nicksExistents", "No hi ha nicknames que coincideixin.");
//                nickname = true;
//                mostrarAmagarBoto();
//            
//            //Si el nickname introduït s'assembla a algún dels existents, mostra el llistat dels quals s'hi assembla
//            } else {
//                mostrarOk("nicksExistents", "Nicknames ja existents: " + data);
//                nickname = true;
//                mostrarAmagarBoto();
//            }
//        }
//    });
//}

//Nom

//
////DNI
//function validarDNI() {
//    mostrarLoading("dniError");
//    var dni2 = document.getElementById("dni").value;
//            
//    //Petició per validar el dni
//    //Format DNI vàlid: [8 números] + [lletraMajúscula]
//    //Exemple: 73547889F
//    $.ajax({
//        url: "php/dni.php",
//        type: "POST",
//        data: {"dni": dni2},
//        dataType: "html",
//        success: function (data) {
//            
//            //Si la resposta està buida, significa que l'ha validat correctament
//            if (data == "") {
//                mostrarOk("dniError", "");
//                dni = true;
//                mostrarAmagarBoto();
//            
//            //Sinó, significa que el dni està mal escrit, i mostra l'error que dóna el php
//            } else {
//                mostrarError("dniError", data);
//                dni = false;
//                mostrarAmagarBoto();
//            }
//        }
//    });
//}
//
////Domicili
//function validarDomicili() {
//    mostrarLoading("domiciliError");
//    var domicili2 = $("#domicili").val();
//            
//    //Petició per validar el domicili
//    $.ajax({
//        url: "php/domicili.php",
//        type: "POST",
//        data: {"domicili": domicili2},
//        dataType: "html",
//        success: function (data) {
//            
//            //Si la resposta està buida, significa que l'ha validat correctament
//            if (data == "") {
//                mostrarOk("domiciliError", "");
//                domicili = true;
//                mostrarAmagarBoto();
//            
//            //Sinó, significa que el camp està buit, i mostra l'error que dóna el php
//            } else {
//                mostrarError("domiciliError", data);
//                domicili = false;
//                mostrarAmagarBoto();
//            }
//        }
//    });
//}
//
////Provincies
//function carregarProvincies() {
//    $.getJSON("php/cargaProvinciasJSON.php", function (provincies) {
//        var p = afegirProvincies(provincies);
//        $("#provincia").html(p);
//    });
//}
//function afegirProvincies(provincies) {
//    var txt = "";
//    for (var i in provincies) {
//        txt += "<option value='" + i + "'>" + provincies[i] + "</option>";
//    }
//    txt = "<option>- selecciona -<\/option>" + txt;
//    return txt;
//}
//
////Municipis
//function carregarMunicipis() {
//    //S'elimina el 'selecciona' del primer option de les provincies (un cop se n'ha seleccionat una)
//    var primer = $("#provincia option:first").val();
//    if (primer == "- selecciona -") {
//        $("#provincia option:first").remove();
//        provincia = true;
//        mostrarAmagarBoto();
//    }
//    var valor = $("#provincia").val();
//    $.getJSON("php/cargaMunicipisJSON.php?provincia=" + valor, function (municipis) {
//        var m = afegirMunicipis(municipis);
//        $("#municipi").html(m);
//    });
//
//    mostrarOk("provinciaError", "");
//    mostrarOk("municipiError", "");
//}
//function afegirMunicipis(municipis) {
//    var txt = "";
//    for (var i in municipis) {
//        txt += "<option value='" + i + "'>" + municipis[i] + "</option>";
//    }
//    return txt;
//}
//
////Mostrar/Amagar botó
//function mostrarAmagarBoto() {
//    //Si totes les variables globals són true (està tot validat), es mostra el
//    //botó per mostrar la informació final
//    if (nickname && nom && dni && provincia && domicili) {
//        $("#informacio").css('visibility', 'visible');
//        
//    //Sinó, s'amaga
//    } else {
//        $("#informacio").css('visibility', 'hidden');
//    }
//}
//
////Mostrar informació al clicar el botó
//function mostrarInfo() {
//
//    //Es crea una ruta al php de mostrarInformació passant-li les dades seleccionades/introduïdes
//    var ruta = "php/mostrarInformacio.php?idioma=" + $("#idioma option:selected").html();
//    ruta += "&nickname=" + $("#nickname").val();
//    ruta += "&nom=" + $("#nom").val();
//    ruta += "&dni=" + $("#dni").val();
//    ruta += "&provincia=" + $("#provincia option:selected").html();
//    ruta += "&municipi=" + $("#municipi option:selected").html();
//    ruta += "&domicili=" + $("#domicili").val();
//
//    //Se li envia la ruta per recuperar la informació en format JSON
//    $.getJSON(ruta, function (info) {
//
//        //Es crea un string en html agafant els títols dels camps (aprofitant que
//        //ja estan traduits) i amb la resposta del JSON apropiada
//        var infoSencera = "<h3>Informaci&oacute; final</h3>";
//        infoSencera += "<strong>" + $("label[for='idioma']").html() + "</strong>" + info.idioma + "</br>";
//        infoSencera += "<strong>" + $("label[for='nickname']").html() + "</strong>" + info.nickname + "</br>";
//        infoSencera += "<strong>" + $("label[for='nom']").html() + "</strong>" + info.nom + "</br>";
//        infoSencera += "<strong>" + $("label[for='dni']").html() + "</strong>" + info.dni + "</br>";
//        infoSencera += "<strong>" + $("label[for='provincia']").html() + "</strong>" + info.provincia + "</br>";
//        infoSencera += "<strong>" + $("label[for='municipi']").html() + "</strong>" + info.municipi + "</br>";
//        infoSencera += "<strong>" + $("label[for='domicili']").html() + "</strong>" + info.domicili + "</br>";
//
//        //Es mostra la string a l'html
//        $("#resultats").html(infoSencera);
//
//    });
//}
//
////Missatges
////Mostrar la icona (gif) de loading
//function mostrarLoading(id) {
//    $("#" + id).html("<img height='15' src='img/ajax_wait.gif' />");
//}
////Mostrar un missatge correcte
//function mostrarOk(id, missatge) {
//    $("#" + id).html("<img height='15' src='img/ok.png' /> " + missatge).css("color", "green");
//}
////Mostrar un missatge d'error
//function mostrarError(id, missatge) {
//    $("#" + id).html("<img height='15' src='img/error.png' /> " + missatge).css("color", "red");
//}
//
////Ubicacio
//var lat = '';
//var lng = '';
//var latVallbona = 41.6006675;
//var lngVallbona = 2.2830082000000402;
//var map = null;
//var geocoder = null;
//var marker = null;
//var directionsDisplay = new google.maps.DirectionsRenderer();
//var directionsService = new google.maps.DirectionsService();
//
//function initialize() {
//
//    geocoder = new google.maps.Geocoder();
//
//    if (lat != '' && lng != '') {
//        var latLng = new google.maps.LatLng(lat, lng);
//    } else {
//        var latLng = new google.maps.LatLng(latVallbona, lngVallbona);
//    }
//    var myOptions = {
//        center: latLng,
//        zoom: 15,
//        mapTypeId: google.maps.MapTypeId.ROADMAP
//    };
//    map = new google.maps.Map(document.getElementById("mapaUbicacio"), myOptions);
//    directionsDisplay.setPanel(document.getElementById("ruta"));
//
//    marker = new google.maps.Marker({
//        map: map,
//        position: latLng,
//        draggable: true
//    });
//    updatePosition(latLng);
//}
//
//function mostrarUbicacio() {
//
//    var address = $("#municipi option:selected").html();
//
//    geocoder.geocode({'address': address}, function (results, status) {
//
//        if (status == google.maps.GeocoderStatus.OK) {
//            map.setCenter(results[0].geometry.location);
//            marker.setPosition(results[0].geometry.location);
//            updatePosition(results[0].geometry.location);
//
//            google.maps.event.addListener(marker, 'dragend', function () {
//                updatePosition(marker.getPosition());
//            });
//        } else {
//            alert("No podemos encontrar la direcci&oacute;n, error: " + status);
//        }
//    });
//}
//
//function updatePosition(latLng) {
//    lat = latLng.lat();
//    lng = latLng.lng();
//}
//
////Ruta
//function calcularRuta() {
//    //La ruta comença al [domicili] , [municipi] , [provincia]
//    var start = $("#domicili").val() + ", " + $("#municipi option:selected").html() + ", " + $("#provincia option:selected").html();
//    //Acaba sempre a IES Carles Vallbona
//    var end = "Camp de les Moreres, 14, 08401 Granollers, Barcelona";
//    var request = {
//        origin: start,
//        destination: end,
//        travelMode: google.maps.DirectionsTravelMode.DRIVING,
//        unitSystem: google.maps.DirectionsUnitSystem.METRIC,
//        region: "es"
//    };
//    directionsService.route(request, function (response, status) {
//        if (status == google.maps.DirectionsStatus.OK) {
//            directionsDisplay.setDirections(response);
//        }
//    });
//}