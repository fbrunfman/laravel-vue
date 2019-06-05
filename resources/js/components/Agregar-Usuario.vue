<template>
    <div class="inner-container d-flex flex-center mt-5 flex-column">
        <h3 class="mb-3 text-center">Agregar Usuario</h3>
        <form  @submit.prevent ref="formulario">
            <div class="body-general d-flex justify-content-center">
                <div class="contenedor-agregar w-50">
                    <div class="d-flex flex-row align-items-center my-2">
                        <span class="col-3">Ingresar Teléfono:</span>
                        <input type="text" name="phone" class="form-control col-6" id="">
                    </div>
                    <div class="d-flex flex-row align-items-center my-2">
                        <span class="col-3">Ingresar Sitio:</span>
                        <input type="text" name="site" class="form-control col-6" id="">
                    </div>
                    <div class="d-flex flex-row align-items-center my-2">
                        <span class="col-3">Ingresar Contraseña:</span>
                        <input type="password" name="password" class="form-control col-6" id="">
                    </div>
                    <div class="text-center mt-4">
                        <div class="btn btn-success text-center" @click="guardarUsuario">
                            <span>Guardar</span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import Axios from "axios";
export default {
    name: 'AgregarUsuario',
    methods: {
        guardarUsuario() {
            var datos = new FormData(this.$refs.formulario)
            Axios.post('/api/usuarios/store', datos)
            .then(response=> {
                alert('Se ingreso al usuario correctamente')
            })
            .catch((error)=> {
                alert('Error al guardar usuario')
            })
        }
    }

}
</script>



<style lang="scss" scoped>

.body-general {
     padding:0;
    margin:0;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    position: relative;
}
</style>
