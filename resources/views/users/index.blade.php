<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mb-4 sm:mb-0">
        <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Users ✨</h1>
    </div>
    <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

        <x-url-button href="{{route('dashboard.users.create')}}">Create user</x-url-button>

    </div>
    <div class="bg-white shadow-lg rounded-sm border border-slate-200 mb-8">
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <!-- Table header -->
                <thead class="text-xs font-semibold uppercase text-slate-500 bg-slate-50 border-t border-b border-slate-200">
                <tr>

                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                        <div class="font-semibold text-left">User Name</div>
                    </th>
                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                        <div class="font-semibold text-left">email</div>
                    </th>

                    <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                        <div class="font-semibold text-left">Actions</div>
                    </th>
                </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-slate-200">
               @foreach($users as $user)
                   <tr>

                       <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                           <div class="font-medium ">{{$user->name}}</div>
                       </td>
                       <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                           <div class="font-medium ">{{$user->email}}</div>
                       </td>


                       <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                           <div class="space-x-1">
                               <button class="text-slate-400 hover:text-slate-500 rounded-full">
                                   <span class="sr-only">Edit</span>
                                   <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                       <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z" />
                                   </svg>
                               </button>
                               <button class="text-slate-400 hover:text-slate-500 rounded-full">
                                   <span class="sr-only">Download</span>
                                   <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                       <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z" />
                                   </svg>
                               </button>
                               <button class="text-rose-500 hover:text-rose-600 rounded-full">
                                   <span class="sr-only">Delete</span>
                                   <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                       <path d="M13 15h2v6h-2zM17 15h2v6h-2z" />
                                       <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z" />
                                   </svg>
                               </button>
                           </div>
                       </td>
                   </tr>
               @endforeach


                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>