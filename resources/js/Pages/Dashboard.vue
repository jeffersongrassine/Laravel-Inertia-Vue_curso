<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">LISTAGEM DE POSTAGENS - Olá {{ $page.props.user.name}}!</h2>
            <p>{{ $page.props.user.email }}</p>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- <Welcome /> -->
                    <div class="flex-shrink-0 p-4">
                        <Link :href="route('dashboard.create')">
                            <button
                                type="submit"
                                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Criar Post
                            </button>
                        </Link>

                        <div v-if="$page.props.flash.message" class="text-blue-600">
                            {{ $page.props.flash.message }}
                        </div>
                    </div>

                    <!-- Tabela -->
                    <div class="mt-8 flex flex-col">
                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div
                                    class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg"
                                >
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                >
                                                    #ID
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                >
                                                    Título
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                >
                                                    Descrição
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 pl-3 pr-4 sm:pr-6"
                                                >
                                                    Ações
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                            <tr v-for="post in posts" :key="post.id">
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6"
                                                >
                                                    {{ post.id }}
                                                </td>
                                                <td
                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                                >
                                                    {{ post.title }}
                                                </td>
                                                <td class="px-3 py-4 text-sm text-gray-500">
                                                    {{ post.content }}
                                                </td>

                                                <td>
                                                    <Link
                                                        :href="route('dashboard.edit', post.id)"
                                                        class="inline-flex items-center px-4 py-2 mr-4 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    >
                                                        Editar
                                                    </Link>
                                                </td>
                                                
                                                <td>
                                                    <button
                                                        @click="destroy(post.id)"
                                                        type="button"
                                                        class="inline-flex items-center px-4 py-2 mr-4 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    >
                                                        Apagar
                                                    </button>
                                                </td>
                                                
                                            </tr>

                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /Fim Tabela-->
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import Welcome from '@/Jetstream/Welcome.vue'
</script>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'


export default {
    props: {
        posts: Object
    },

    componets: {
        Link
    },

    data() {
        const destroy = (id) => {
            if(confirm('Tem certeza que deseja excluir?')) {
                Inertia.delete(route('dashboard.destroy', id))
            }
        }

        return {
            destroy
        }
    }
}
</script>
