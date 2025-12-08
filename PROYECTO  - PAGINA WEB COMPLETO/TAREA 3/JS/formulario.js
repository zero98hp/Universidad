document.addEventListener('DOMContentLoaded', function(){ /*se espera que la paguina este cargada*/
  const form = document.getElementById('form'); 
  if(!form) return;
  form.addEventListener('submit', function(e){ /*Detecta cuando das clic en Enviar*/
    e.preventDefault(); /*evita que se envie automaticamente*/
    const nombre = document.getElementById('nombre').value.trim();
    const correo = document.getElementById('correo').value.trim();
    if(nombre.length < 3){ alert('Ingrese un nombre válido (mín 3 caracteres)'); return; }
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!re.test(correo)){ alert('Ingrese un correo válido'); return; }
    alert('Formulario enviado (simulado). Gracias, ' + nombre + '!');
    form.reset();
  });
});


