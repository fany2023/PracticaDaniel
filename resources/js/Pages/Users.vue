<template>
    <Navber />
    <h1>Hola desde Usuarios</h1>
    <div class="p-8 relative overflow-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            </thead>
            <tbody>
                <tr v-for="usuario in usuarios" :key="usuario.index" class="bg-white border-b dark-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium dark:text-white">
                        {{ 'usuario.name'}}
                    </th>
                    <td> class="px-6 py-4"
                        {{usuario.email}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import Navbar from '../shared/Navbar.vue';

export default {
    props: {
        usuarios: Object
    },
    components: {
        Navbar
    }
}
</script>

<style>

</style>
