<!-- BOTON HAMBURGUESA -->
<button class="hamburger" onclick="abrirMenu()">
☰
</button>


<!-- MENU -->

<h2>
BIENESTAR
</h2>


<a href="/BIENESTAR/dashboard.php">
Dashboard
</a>


<a href="/BIENESTAR/pacientes/index.php">
Pacientes
</a>


<a href="/BIENESTAR/medicamentos/index.php">
Medicamentos
</a>


<a href="/BIENESTAR/reportes/index.php">
Reportes
</a>


<a href="/BIENESTAR/logouth.php">
Cerrar Sesión
</a>


</nav>


<div id="fondo"
onclick="cerrarMenu()"></div>



<script>


function abrirMenu(){


document.getElementById("sidebar")
.classList.add("activo");


document.getElementById("fondo")
.classList.add("activo");


}



function cerrarMenu(){


document.getElementById("sidebar")
.classList.remove("activo");


document.getElementById("fondo")
.classList.remove("activo");


}


</script>