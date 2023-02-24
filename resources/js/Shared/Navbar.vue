<template>
    <nav class="bg-indigo-400 flex justify-evenly p-4">
        <div class="">
            <Link href="" class="text-xl text-white">
                <img src="" alt="">
            </Link>
        </div>
        <div>
            <Link href="/chat" class="text-xl mr-6 text-white hover:bg-white hover:text-indigo">
                Chat
            </Link>
            <Link href="/contacto" class="text-xl text-white hover:text-indigo-400 px-4 py-2 rounded-3x1">
                Contacto
            </Link>
            <Link href="/usuarios" class="text-xl text-white hover:text-indigo-400 px-4 py-2 rounded-3x1">
                Usuarios
            </Link>
        </div>
    </nav>
</template>

<script>

import {Link} from "@inertiajs/vue3"
export default {
    components:{
        Link,
    }
}

</script>

<style>

</style>