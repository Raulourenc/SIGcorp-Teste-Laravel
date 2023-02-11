<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Alterar Vagas') }}
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
                    @if(isset($job))
                    <form method="POST" action="{{ route('job.update',$job['id']) }}">
                        <input name="user_id" type="hidden" value="{{$id}}">
                        @csrf
                        @method('put')
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Nome</span>
                                <input type="text" name="name"
                                    class="block w-full @error('name') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('name',$job['name'])}}" />
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
                                    placeholder="" value="{{old('description',$job['description'])}}" />
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
                                    placeholder="" value="{{old('remuneration',$job['remuneration'])}}" />
                            </label>
                            @error('remuneration')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Contratação</span>
                                <input type="text" name="type"
                                    class="block w-full @error('type') border-red-500 @enderror mt-1 rounded-md"
                                    placeholder="" value="{{old('type',$job['type'])}}" />
                            </label>
                            @error('type')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input type="hidden" value="Ativo" name="status">
                            <input name="status" class="form-check-input" type="checkbox" value="Inativo" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Inativar
                            </label>
                        </div>
                        <button type="submit"
                            class="text-black bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>
                    </form>
                @else
                    <h5>Não há vagas cadastradas</h5>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>