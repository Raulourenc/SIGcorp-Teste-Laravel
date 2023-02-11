<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Candidatos') }}
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
                            href="{{ route('info.create') }}">{{ __('Add info') }}</a>
                    </div>
                    @if(isset($info))
                    <form action="{{ route('listInfo') }}" method="GET">
                      @csrf
                      <div class="relative w-full">
                          <input type="text" name="search"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pesquisar por Nome" >
                          <br>
                          <div>
                          <select name='filter' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option value="id" selected>Filtrar</option>
                          <option value="name">Nome</option>
                          <option value="lastname">Sobrenome</option>
                          <option value="age">Idade</option>
                          <option value="email">Email</option>
                          <option value="job">Profissão</option>
                          </select>
                      </div>
                      <br>
                      <div class="relative w-full">
                          <select name='paginate' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option value="4" selected>Paginação</option>
                          <option value="2">2</option>
                          <option value="4">4</option>
                          <option value="6">6</option>
                          <option value="12">12</option>
                          <option value="20">20</option>
                          </select>
                      </div>
                      <br>
                      <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-black bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>Pesquisar
                      </button>
                    </form>
                      <br>
                      <br>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nome 
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Sobrenome
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Idade
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                      Profissão
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($info as $i)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{$i->id}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$i->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$i->lastname}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$i->age}}
                                    </td>
                                    <td class="px-6 py-4">
                                       {{$i->email}}
                                    </td>
                                    <td class="px-6 py-4">
                                      {{$i->job}}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                  <h5>Não há candidatos disponíveis</h5>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <br>
                    @if(isset($info))
                    {{ $info->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>