var fuente1, soltar;
function iniciar(){
  fuente1 = document.getElementById('imagen');
  fuente1.addEventListener('dragstart', arrastrando);
  fuente1.addEventListener('dragend', finalizando);
  soltar = document.getElementById('cajaobjetivo');

  soltar.addEventListener('dragenter', function(e){
    e.preventDefault();
    soltar.style.background = 'rgba(0, 150, 0, .2)';

  });


  soltar.addEventListener('dragleave', saliendo);
  soltar.addEventListener('dragover', function(e){ e.preventDefault(); });
  soltar.addEventListener('drop', soltado);
}

function saliendo(e){
  e.preventDefault();
  soltar.style.background = '#FFFFFF';
}
function finalizando(e){
  elem = e.target;
  elem.style.visibility = 'hidden';
  console.log("Dragend amb exit o no");
}
function arrastrando(e){
  var codigo = '<img src="' + fuente1.getAttribute('src') + '">';
  e.dataTransfer.setData('Text', codigo);
}
function soltado(e){
  e.preventDefault();
  soltar.style.background = '#FFFFFF';
  soltar.innerHTML = e.dataTransfer.getData('Text');
   console.log("Has deixat en lobjectiu");
}
addEventListener('load', iniciar);