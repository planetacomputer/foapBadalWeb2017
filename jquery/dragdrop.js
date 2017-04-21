
var fuente1, soltar;
function iniciar(){
  fuente1 = document.getElementById('imagen');
  fuente1.addEventListener('dragstart', arrastrado);
 
  soltar = document.getElementById('cajaobjetivo');
  soltar.addEventListener('dragenter', function(e){ e.preventDefault(); console.log("dragenter")});
  soltar.addEventListener('dragover', function(e){
   e.preventDefault(); 
   fuente1.style.width = "40px";
   console.log("dragover");
  });
  soltar.addEventListener('dragleave', function(e){ e.preventDefault(); console.log("dragleave")});
  soltar.addEventListener('drop', soltado);
}
function arrastrado(e){
  console.log("Dragstart arrastrado");
  var codigo = fuente1.getAttribute('id');
  e.dataTransfer.setData('Text', codigo);
}
function soltado(e){
  e.preventDefault();

  //soltar.innerHTML = e.dataTransfer.getData('Text');
  var data = e.dataTransfer.getData("Text");
  soltar.innerHTML = "";
  soltar.appendChild(document.getElementById(data));
}
addEventListener('load', iniciar);