<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Informações') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-1 mb-4">
                        <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
                            href="{{ route('job.create') }}">{{ __('Add Job') }}</a>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                @if(!empty($info['name']))
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Nome</strong>
                                        </th>
                                        <td>
                                            {{$info['name']}}
                                        </td>
                                        <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Sobrenome</strong>
                                        </th>
                                        <td>
                                            {{$info['lastname']}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Idade</strong>
                                        </th>
                                        <td>
                                            {{$info['age']}}
                                        </td>
                                        <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Email</strong>
                                        </th>
                                        <td>
                                            {{$info['email']}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Formação</strong>
                                        </th>
                                        <td>
                                            {{$info['job']}}
                                        </td>
                                    </tr>
                                @else
                                    <h5>Não há Informações Cadastradas</h5>
                                @endif
                            </tbody>
                        </table>
                    </div>
  
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>