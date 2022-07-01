<template>
  <Head>
    <title>Home</title>
  </Head>

    <div>
        
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto mt-8">
      <h1 class="text-xl font-semibold text-gray-900">LISTAGEM DE POSTAGENS</h1>
    </div>
    <hr />
    <!-- Links -->
    <menu-layout />
    
    <!-- <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
      <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add user</button>
    </div> -->
  </div>
  <div class="mt-8 flex flex-col">
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">#ID</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Título</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Descrição</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
              <tr v-for="post in posts" :key="post.id">
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ post.id }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ post.title }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ post.content }}</td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import MenuLayout from '../Layouts/LayoutMenu.vue'


    export default {
            name: 'PageHome',

            components: {
                Link,
                Head,
                MenuLayout

            },

            props: {
                posts: Object
            },
        
    }
</script>

<style lang="scss" scoped>

</style>