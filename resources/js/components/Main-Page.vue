<template>
    <div>
        <div class="indice mt-3">
            <div class="d-flex justify-content-center flex-row">
                <router-link to="/agregarUsuario">
                    <div class="btn btn-success mx-2">
                        <span>Agregar Usuario</span>
                    </div>
                </router-link>
                <router-link to="/agregarPago">
                    <div class="btn btn-secondary mx-2">
                        <span>Agregar Pago</span>
                    </div>
                </router-link>
                <router-link to="/verUsuarios">
                    <div class="btn btn-primary mx-2">
                        <span>Ver Usuarios</span>
                    </div>
                </router-link>
            </div>
        </div>
        <router-view></router-view>
    </div>
</template>

<style lang="scss" scoped>



</style>
