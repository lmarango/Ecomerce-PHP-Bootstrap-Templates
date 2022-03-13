function iniciarMap(){
    var coord = {lat:2.4361542 ,lng: -76.6039572};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 12,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}

function limpiarCadena (texto){
  var cadena = texto;
  var str = document.getElementById(cadena).value;
  str=str.replace(/[$&#';"]/g,'');
  var str = document.getElementById(cadena).value = str;
  alert(str);
  document.login.form.submit();
}