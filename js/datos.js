var boton = document.getElementById('btnGuardar');
boton.addEventListener('click', EnviarFormulario);

function EnviarFormulario()
{
 alert("Hola")   ;
    var paterno = document.getElementById('apepater').val();
    alert(paterno);
    var materno = document.getElementById('apemater').val();
    var nombres = document.getElementById('nombres').val();
    var pais = document.getElementById('pais').val();
    var paterno = document.getElementById('numdni').val();
    var paterno = document.getElementById('fechaingresou').val();
    var paterno = document.getElementById('ley').val();
    var paterno = document.getElementById('gradoacademico').val();
    var paterno = document.getElementById('mencion').val();
    var paterno = document.getElementById('universidad').val();
    var paterno = document.getElementById('paisuniversidad').val();
    var paterno = document.getElementById('pregrado').val();
    var paterno = document.getElementById('maestria').val();
    var paterno = document.getElementById('doctorado').val();
    var paterno = document.getElementById('catdocente').val();
    var paterno = document.getElementById('regimen').val();
    var paterno = document.getElementById('clases').val();
    var paterno = document.getElementById('otras').val();
    var paterno = document.getElementById('total').val();
    var paterno = document.getElementById('investigador').val();
    var paterno = document.getElementById('dina').val();
    var paterno = document.getElementById('periodo').val();
    var paterno = document.getElementById('obs').val();

    var parametros = {
        "paterno": paterno,
        "materno": materno,
        "nombres": nombres,
        "nombres": nombres,
    }
    
}