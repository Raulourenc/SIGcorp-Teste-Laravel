<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Cadastrar Informações') }}
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
                    <form method="POST" action="{{ route('info.store') }}">
                        <input name="user_id" type="hidden" value="{{$id}}">
                        @csrf
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Nome</span>
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
                              <span class="text-gray-700">Sobrenome</span>
                              <input type="text" name="lastname"
                                  class="block w-full @error('lastname') border-red-500 @enderror mt-1 rounded-md"
                                  placeholder="" value="{{old('lastname')}}" />
                          </label>
                          @error('lastname')
                          <div class="text-sm text-red-600">{{ $message }}</div>
                          @enderror
                          </div>
                          <div class="mb-6">
                              <label class="block">
                                  <span class="text-gray-700">Idade</span>
                                  <input type="text" name="age"
                                      class="block w-full @error('age') border-red-500 @enderror mt-1 rounded-md"
                                      placeholder="" value="{{old('age')}}" />
                              </label>
                              @error('age')
                              <div class="text-sm text-red-600">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="mb-6">
                              <label class="block">
                                  <span class="text-gray-700">Email</span>
                                  <input type="email" name="email"
                                      class="block w-full @error('email') border-red-500 @enderror mt-1 rounded-md"
                                      placeholder="" value="{{old('email')}}" />
                              </label>
                              @error('email')
                              <div class="text-sm text-red-600">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Formação</span>
                                <input type="text" name="job"
                                    class="block w-full @error('job') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('job')}}" />
                            </label>
                            @error('job')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                          </div>
                          <button type="submit"
                            class="text-black bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>