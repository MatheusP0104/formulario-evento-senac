/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
    return document.getElementById( el );
}
window.onload = function(){
    id('telefone').onkeyup = function(){
        mascara( this, mtel );
    }
}


function ConsisteNumerico(tam, fld, e) {

    var key = '';

    var i = 0;

    var len = 0;

    var strCheck = '0123456789';

    var aux = '';

    var whichCode = (window.Event) ? e.which : e.keyCode;

    if (whichCode == 13 || whichCode == 8 || whichCode == 0)

        return true;  // Enter

    key = String.fromCharCode(whichCode);  // Get key value from key code

    if (strCheck.indexOf(key) == -1)

        return false;  // Not a valid key

    len = tam -1;

    aux = '';

    for(; i < len; i++)

        if (strCheck.indexOf(fld.value.charAt(i))!=-1)

            aux += fld.value.charAt(i);

    aux += key;

    fld.value = '';

    fld.value += aux;

    return false;

}


function marcaDesmarca(caller) {
    var checks = document.querySelectorAll('input[type="checkbox"]');
    for(let i = 0; i < checks.length; i++) {
      checks[i].checked = checks[i] == caller;
    }
  }





// 
  function checkInputs(inputs) {

    var filled = true;
    
    inputs.forEach(function(input) {
    
      if(input.value === "") {
          filled = false;
      }
    
    });
    
    return filled;
    }
    
    var inputs = document.querySelectorAll("input");
    var button = document.querySelector("button");
    var pass1 = document.querySelector("#muie")
    var pass2 = document.querySelector("#masculino")
    var desactive = true


    


    inputs.forEach(function(input) {
    
    input.addEventListener("keyup", function() {
    
      if(checkInputs(inputs)){

        desactive = false;
      } else {
        desactive  = true;
      }
    
    });
    });



    function actived(){
        if (desactive == false && (pass1.checked || pass2.checked)) {
            button.disabled = false;
        }
    }
    function ShowModal(){
        var moon = document.getElementById("modal");
        moon.classList.add("show-modal");
    }

function gerarPDF() {
    var doc = document.getElementById('username').value;
    var win = window.open('', '','_blank')
    win.document.write('<html><head>');
    win.document.write('<style>')
    win.document.write('h1{font-size:40px; text-align: center;}')
    win.document.write('p{font-size:30px; text-align:center;}')
    win.document.write('</style>')
    win.document.write('</head>');
    win.document.write('<body>');
    win.document.write('<h1>Comprovante de Presença</h1>');
    win.document.write('<p>Comprovamos que o(a) aluno(a) ', doc, ', compareceu ao Evento de empreendedorismo na instituição do Senac Minas Pouso Alegre no dia 28/09/2022  e preencheu o formulário desenvolvido pelos alunos do curso técnico de Desenvolvimento de Sistemas no turno da tarde.');
    win.document.write('Foi uma honra receber o(a) aluno(a) ', doc, ', esperamos que tenha gostado!');
    win.document.write('A equipe Senac Minas Pouso Alegre agradece pela sua presença.</p>');
    win.document.write('</body></html>');
    win.document.close;
    win.print();
    }