<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Minhas vagas') }}
        </h2>
    </x-slot>
    @if(session('message'))
          <div class="alert alert-success">
              {!! session('message') !!}
          </div>
    @endif                           
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-1 mb-4">
                        <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
                            href="{{ route('job.create') }}">{{ __('Add Job') }}</a>
                    </div>
                    @if(empty($list))
                    <h5>Você não tem vagas cadastradas!</h5>
                    @endif
                    @foreach ($list as $i)
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">      
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Nome</strong>
                                        </th>
                                        <td>
                                            {{$i[0]['name']}}
                                        </td>
                                        <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Descrição</strong>
                                        </th>
                                        <td>
                                            {{$i[0]['description']}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Remuneração</strong>
                                        </th>
                                        <td>
                                            {{$i[0]['remuneration']}}
                                        </td>
                                        <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Contrato</strong>
                                        </th>
                                        <td>
                                            {{$i[0]['type']}}
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            <strong>Status</strong>
                                        </th>
                                        <td>
                                            {{$i[0]['status']}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </x-app-layout>