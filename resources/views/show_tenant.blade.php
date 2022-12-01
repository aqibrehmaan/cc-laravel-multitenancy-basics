






                            <x-guest-layout>

                                    <x-slot name="logo">
                                        <a href="/">
                                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                        </a>
                                    </x-slot>

                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />





                            {{-- <td>
                                @foreach ($tenants as $data)
                                    Nombre: <b>{{ $data['name'] }}</b> Correo: {{ $data['email'] }}<br />
                                @endforeach
                                {{$tenants}}
                            </td> --}}

                            <div class="flex flex-col mt-8">
                                <div class="py-2">
                                    <div
                                        class="min-w-full border-b border-gray-200 shadow">
                                        <table class="min-w-full">
                                            <thead>
                                                <tr>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Id
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Nombre
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Email
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Dominio
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Compañia
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Base de datos
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Edit
                                                    </th>
                                                    <th class="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50">
                                                        Delete
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody class="bg-white">
                                                @foreach($tenants as $tenant)
                                                <tr>
                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="flex items-center">
                                                            <div class="ml-4">
                                                                <div class="text-sm text-gray-900">
                                                                    {{ $tenant->id }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->name }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->email }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->domain }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->company }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $tenant->tenancy_db_name }}
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 border-b border-gray-200">
                                                        <button wire:click="edit({{ $tenant->id }})" class="px-4 py-2 text-white bg-blue-600">
                                                            Edit
                                                        </button>
                                                    </td>

                                                    <td class="px-6 py-4 text-sm text-gray-500 border-b border-gray-200">
                                                        <button wire:click="destroy({{ $tenant->id }})"
                                                            class="px-4 py-2 text-white bg-red-600">
                                                            Delete
                                                        </button>
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>




                            </x-guest-layout>
