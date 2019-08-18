function Recomendacion() {
    alert("Responda con la mayor veracidad, \nsolo así podremos ayudarlo a escoger una carrera profesional.\n\nPor favor solo responda en función a lo que a Ud.realmente   le interesa\n y no en base a lo que otros (padres, familiares, amigos) podrían opinar.");

}
function SaveCarrera() {
    var carrera = document.getElementById('carrera');
    var value = carrera.options[carrera.selectedIndex].text;
    localStorage.carrerainicial = value;
}
function cargarStorage()
{
    localStorage.clear();
a=0;
b=0;
c=0;
d=0;
e=0;
f=0;
g=0;
h=0;
i=0;
j=0;
localStorage.GEN = a;
localStorage.SIS = b;
localStorage.CIV = c;
localStorage.ELE = d;
localStorage.IND = e;
localStorage.MIN = f;
localStorage.AMB = g;
localStorage.OTR = h;
localStorage.VER = i;
localStorage.CON = j;
localStorage.NUMPREGUNTA=0;
localStorage.UrlPreguntaRegresa=0;
}

function TemporalTest(respuestaPreg, codPreg) {
   a = parseInt(localStorage.GEN);
   b = parseInt(localStorage.SIS);
   c = parseInt(localStorage.CIV);
   d = parseInt(localStorage.ELE);
   e= parseInt(localStorage.IND);
    f=parseInt(localStorage.MIN);
    g=parseInt(localStorage.AMB);
    h=parseInt(localStorage.OTR);
    i=parseInt(localStorage.VER);
    j=parseInt(localStorage.CON);

    var respPreg = respuestaPreg;
    var codPreg = codPreg;
    if (codPreg == "GEN"){
        if (respPreg=='Si')
        {
        var a= a+1;
        localStorage.GEN = a;}
        if (respPreg=='No')
        {
            var a= a+0;
            localStorage.GEN = a;
        }
    }
    if (codPreg == "SIS"){b=b+1;
        localStorage.SIS = b;}
    if (codPreg == "CIV"){c=c+1;
        localStorage.CIV = c;}
    if (codPreg == "ELE"){d=d+1;
        localStorage.ELE = D;}
    if (codPreg == "IND"){e=e+1;
        localStorage.IND = e;}
    if (codPreg == "MIN"){f=f+1;
        localStorage.MIN = f;}
    if (codPreg == "AMB"){g=g+1;
        localStorage.AMB = g;}
    if (codPreg == "OTR"){h=h+1;
        localStorage.OTR = h;}
    if (codPreg == "VER"){i=i+1;
        localStorage.VER = i;}
    if (codPreg == "CON"){j=j+1;
        localStorage.CON = j;}



}
function EntregaVariable() {
    var URLactual = window.location;
    localStorage.UrlPreguntaRegresa = URLactual;
}
function Redireccion() {
    document.getElementById("redireccionar").href = localStorage.UrlPreguntaRegresa;
}
function PregAnt(){
    let numPregunta = document.getElementsByName('numpreg')[0].value;
    localStorage.NUMPREGUNTA = parseInt(numPregunta) -1;
}
function valorRadio() {
    let numPregunta = document.getElementsByName('numpreg')[0].value;
    localStorage.NUMPREGUNTA = parseInt(numPregunta) +1;
    let codPregunTest = document.getElementsByName('codPreg')[0].value;
    let respTest = document.getElementsByName('respuesta');
    for(i=0; i<respTest.length; i++) {
        if (respTest[i].checked) {
            var resp = respTest[i].value;
            if (resp=='Si'){
            TemporalTest(resp, codPregunTest);}
        }
    }
}

function VerResultado() {
    var lis = [];
    var name= [];
    var mayor=0;
    var mayorcarrerar =0;
    var carreras = [];
    var countCarrera=[];
    var countCarreraAsig=[];
    var cadecaC="";
    a = parseInt(localStorage.GEN);
    b = parseInt(localStorage.SIS);
    c = parseInt(localStorage.CIV);
    d = parseInt(localStorage.ELE);
    e= parseInt(localStorage.IND);
    f=parseInt(localStorage.MIN);
    g=parseInt(localStorage.AMB);
    h=parseInt(localStorage.OTR);
    i=parseInt(localStorage.VER);
    j=parseInt(localStorage.CON);

    name[0]="GEN";
    name[1]="SIS";
    name[2]="CIV";
    name[3]="ELE";
    name[4]="IND";
    name[5]="MIN";
    name[6]="AMB";
    name[7]="OTR";
    name[8]="VER";
    name[9]="CON";


    carreras[0] = parseInt(localStorage.SIS);
    carreras[1] = parseInt(localStorage.CIV);
    carreras[2] = parseInt(localStorage.ELE);
    carreras[3] = parseInt(localStorage.IND);
    carreras[4] = parseInt(localStorage.MIN);
    carreras[5] = parseInt(localStorage.AMB);
    carreras[6] = parseInt(localStorage.OTR);

    countCarrera[0]="INGENIERIA DE SISTEMAS E INFORMATICA";
    countCarrera[1]="INGENIERIAS CIVIL";
    countCarrera[2]="INGENIERIAS ELECTRICA";
    countCarrera[3]="INGENIERIAS INDUSTRIAL";
    countCarrera[4]="INGENIERIAS MINAS";
    countCarrera[5]="INGENIERIAS AMBIENTAL";
    countCarrera[6]="OTR";

    var iden=0;
    var idenCarrera=0;
    lis[0] = a;
    lis[1] = b;
    lis[2] = c;
    lis[3] = d;
    lis[4] = e;
    lis[5] = f;
    lis[6] = g;
    lis[7] = h;
    lis[8] = i;
    lis[9] = j;

    for(i = 0; i < lis.length; i++){
        if (lis[i] > mayor)
        {
            mayor = lis[i];
            iden=i;
        }
    }

    for(i = 0; i < carreras.length; i++){
        if (carreras[i] > mayorcarrerar)
        {
            mayorcarrerar = carreras[i];
            idenCarrera=i;
        }
    }


    countCarreraAsig[0]= carreras[0]+a;
    countCarreraAsig[1]= carreras[1]+a;
    countCarreraAsig[2]= carreras[2]+a;
    countCarreraAsig[3]= carreras[3]+a;
    countCarreraAsig[4]= carreras[4]+a;
    countCarreraAsig[5]= carreras[5]+a;
    /* VERIFICACION DE VERDAD*/
    if (lis[8]>4){
        alert("LO SENTIMOS NO TENEMOS UN RESULTADO CERTERO CON SUS RESPUESTAS\nLe recomendamos repetir el test y Responder con la VERDAD.")
        localStorage.Estado = 'Invalidado';
        localStorage.carreraFinal = 'Ninguna';
    }
    else {
        /* VERIFICACION DE CONSISTENCIA*/
            if (lis[9]>=5){

                if (lis[7]>=19){
                    alert("LO SENTIMOS, SEGUN A SUS RESPUESTAS ES NO APTO PARA LAS CARRERAS DE INGENIERIAS\nLe recomendamos repetir el test y Responder Cosistentemente.")
                    localStorage.Estado = 'Invalidado';
                    localStorage.carreraFinal = 'Ninguna';
                }
                else
                {

                    var carreraInicial = localStorage.carrerainicial;

                  /*  if (countCarreraAsig[0]  >=13  ){
                        cadecaC +="\n-> "+countCarrera[0];
                    }
                    if (countCarreraAsig[1]  >=12  ){
                        cadecaC +="\n-> "+countCarrera[1];
                    }
                    if (countCarreraAsig[2]  >=13  ){
                        cadecaC +="\n-> "+countCarrera[2];
                    }
                    if (countCarreraAsig[3]  >=13  ){
                        cadecaC +="\n-> "+countCarrera[3];
                    }
                    if (countCarreraAsig[4]  >=12  ){
                        cadecaC +="\n-> "+countCarrera[4];
                    }
                    if (countCarreraAsig[5]  >=14  ){
                        cadecaC +="\n-> "+countCarrera[5];
                    }*/

                      if (countCarreraAsig[0]  >=13  ){
                          cadecaC =countCarrera[0];
                      }
                      else{
                          if (countCarreraAsig[1]  >=12  ){
                              cadecaC =countCarrera[1];
                          }
                          else{
                              if (countCarreraAsig[2]  >=13  ){
                                  cadecaC =countCarrera[2];
                              }
                              else
                              {
                                  if (countCarreraAsig[3]  >=13  ){
                                      cadecaC =countCarrera[3];
                                  }
                                  else
                                  {
                                      if (countCarreraAsig[4]  >=12  ){
                                          cadecaC =countCarrera[4];
                                      }
                                      else{
                                          if (countCarreraAsig[5]  >=14  ){
                                              cadecaC =countCarrera[5];
                                          }
                                      }

                                  }

                              }

                          }

                      }


                    localStorage.carreraFinal = cadecaC;
                    localStorage.Estado = 'validado';
                }

            }
            else{
                alert("LO SENTIMOS NO TENEMOS UN RESULTADO CERTERO CON SUS RESPUESTAS\nLe recomendamos repetir el test.");
                localStorage.Estado = 'Invalidado';
                localStorage.carreraFinal = 'Ninguna';
            }

        }
}
function Imprime() {

    document.getElementById("carreraini").style.display='block';
    document.getElementById("carrerafin").style.display='block';
    document.getElementById("estado").style.display='block';
    document.getElementById("carreraini").value = localStorage.carrerainicial;
    document.getElementById("carrerafin").value = localStorage.carreraFinal;
    document.getElementById("estado").value = localStorage.Estado;
    document.getElementById("btnRegistrar").style.display = 'block';
    document.getElementById("btnRegistrar").style.display = 'inline';
}
