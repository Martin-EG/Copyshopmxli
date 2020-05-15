<script>
        document.querySelector(".texto-header h1").textContent = "Cotizacion";
    </script>
<div class="contenedor contenedor-cotizacion">
        <div class="cotizador" id="cotizador">
            <div class="botonesC">
                <a class='boton boton-suma' id='add'><i class="fas fa-plus"></i> Agregar</a>
                <a class='boton' id='calcular'><i class="fas fa-equals"></i> Calcular</a>

                <a class='boton boton-suma' id='reset'><i class="fas fa-trash-alt"></i> Reset</a>
            </div>
    
        </div>
        <!-- Cotizador-->
        <div class="resultado">
            <div class="resumen" id="resumen">
                <p>Descripcion:</p>
                <ul id="descripcion">

                </ul>
            </div>
            <!-- Descripcion -->
            <div class="total" id="total">
                <p>Total: </p>
                <span><p class="suma"></p></span>
            </div>
            <!-- Total -->
        </div>
        <!--- Resultado --->

    </div>
    <script src="js/contacto.js"></script>