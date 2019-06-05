<template>
    <div class="inner-container d-flex flex-center mt-5 flex-column">
        <h3 class="mb-3 text-center">Agregar Pago</h3>
        <form  @submit.prevent ref="formulario">
            <div class="body-general d-flex justify-content-center">
                <div class="contenedor-agregar w-50">
                    <div class="d-flex flex-row align-items-center">
                        <span class="col-3">Seleccionar Usuario:</span>
                        <select name="" v-model="usuarioSelected" class="form-control col-6 my-2" id="">
                            <option v-for="(usuario,i) in usuarios" :key="i" :value="usuario.phone">{{usuario.phone}}</option>
                        </select>
                    </div>
                    <div class="d-flex flex-row align-items-center my-2">
                        <span class="col-3">Ingresar Monto:</span>
                        <input type="number" name="amount" class="form-control col-6" id="">
                    </div>
                    <div class="text-center mt-4">
                        <div class="btn btn-success text-center" @click="guardarPago">
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
    name: 'AgregarPago',
    data() {
        return {
            usuarios: '',
            usuarioSelected: ''
        }
    },
    mounted () {
        this.getUsers();
    },
    methods: {
        guardarPago() {
            var datos = new FormData(this.$refs.formulario)
            datos.append('phone', this.usuarioSelected)
            Axios.post('/api/payment/store', datos)
            .then(response=> {
                alert('Se guardo el pago correctamente')
            })
            .catch((error)=> {
                alert('Error al guardar pago')
            })
        },
        getUsers() {
            Axios.get('/api/usuarios/')
            .then(response=> {
                this.usuarios = response.data
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
