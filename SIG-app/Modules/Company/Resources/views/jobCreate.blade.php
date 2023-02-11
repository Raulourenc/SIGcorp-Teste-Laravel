<x-app-layout>
  <x-slot name="header">
      <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Cadastrar Vagas') }}
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
                  <form method="POST" action="{{ route('job.store') }}">
                    <input name="user_id" type="hidden" value="{{$id}}">
                      @csrf
                      <div class="mb-6">
                          <label class="block">
                              <span class="text-gray-700">Nome da vaga</span>
                              <input type="text" name="name"
                                  class="block w-full @error('name') border-red-500 @enderror mt-1 rounded-md"
                                  placeholder="" value="{{old('name')}}" />
                          </label>
                          @error('name')
                          <div class="text-sm text-red-600">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Descrição</span>
                            <input type="text" name="description"
                                class="block w-full @error('description') border-red-500 @enderror mt-1 rounded-md"
                                placeholder="" value="{{old('description')}}" />
                        </label>
                        @error('description')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Remuneração</span>
                                <input type="text" name="remuneration"
                                    class="block w-full @error('remuneration') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('remuneration')}}" />
                            </label>
                            @error('remuneration')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <span class="text-gray-700">Contratação</span>
                            <select name='type' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="CLT">CLT</option>
                            <option value="Freelancer">Freelancer</option>
                            <option value="Pessoa Jurídica">Pessoa Jurídica</option>
                            </select>
                        </div>
                        <br>
                        <input type="hidden" value="Ativo" name="status">
                        <button type="submit"
                          class="text-black bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>