<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0"
    aria-label="Sidenav"
    id="drawer-navigation"
  >
    <div class="overflow-y-auto py-5 px-3 h-full bg-white">
      <form action="#" method="GET" class="md:hidden mb-2">
        <label for="sidebar-search" class="sr-only">Search</label>
        <div class="relative">
          <div
            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
          >
            <svg
              class="w-5 h-5 text-gray-500"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
              ></path>
            </svg>
          </div>
          <input
            type="text"
            name="search"
            id="sidebar-search"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
            placeholder="Search"
          />
        </div>
      </form>
      <ul class="space-y-2">
        <li>
          <Link
            :href="route('admin.courts')"
            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group"
          >
            <svg
              class="w-6 h-6 text-green-700 gray:text-white group-hover:text-green-900"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                fill-rule="evenodd"
                d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Zm2 8v-2h7v2H4Zm0 2v2h7v-2H4Zm9 2h7v-2h-7v2Zm7-4v-2h-7v2h7Z"
                clip-rule="evenodd"
              />
            </svg>

            <span class="ml-3">Courts</span>
          </Link>
        </li>
        <li>
          <Link
          :href="route('admin.users')"
            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group"
          >
            <svg
              class="w-6 h-6 text-green-700 gray:text-white group-hover:text-green-900"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                fill-rule="evenodd"
                d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                clip-rule="evenodd"
              />
            </svg>

            <span class="ml-3">Users</span>
          </Link>
        </li>
        <li>
          <Link
            :href="route('admin.dashboard')"
            class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group"
          >
            <svg
              aria-hidden="true"
              class="w-6 h-6 text-green-700 transition duration-75 group-hover:text-green-900"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
            </svg>
            <span class="ml-3">Dashboard</span>
          </Link>
        </li>
      </ul>
    </div>
  </aside>
</template>
