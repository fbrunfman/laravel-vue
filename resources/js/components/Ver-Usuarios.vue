<template>
    <div class="tabla-usuarios d-flex justify-content-center mt-5">
        <div class="w-50 border">
            <div class="header d-flex flex-row py-4 bg-secondary text-white">
                <div class="col-6 text-center">
                    <span class="h5">Teléfono</span>
                </div>
                <div class="col-6 text-center">
                    <span  class="h5">Sitio</span>
                </div>
            </div>
            <div class="body-listado d-flex flex-row border" v-for="usuario in usuarios" :key="usuario">
                <div class="col-6 text-center my-2">
                    <span>{{usuario.phone}}</span>
                </div>
                <div class="col-6 text-center">
                    <span>{{usuario.site}}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from "axios";
export default {
    name: 'VerUsuarios',
    data() {
        return {
            usuarios: ''
        }
    },
    mounted () {
        this.getUsers();
    },
    methods: {
        getUsers() {
             Axios.get('/api/usuarios/')
            .then(response=> {
                this.usuarios = response.data
            })
        }
    }

}
</script>
