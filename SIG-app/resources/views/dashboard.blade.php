<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{url('')}}">Home</a>
                    <br>
                    <br>
                    @if(auth()->user()->status === 'admin')
                    <a href="{{route('job.create')}}">Cadastrar Vaga</a>
                    <br>
                    <br>
                    <a href="{{route('job.index')}}">Consultar Vagas</a>
                    <br>
                    <br>
                    <a href="{{route('listInfo')}}">Consultar Candidatos</a>
                    <br>
                    <br>
                    @else
                    @if((session()->get('sign')) === null)
                    <a href="{{route('info.create')}}">Cadastrar Informações</a>
                    <br>
                    <br>
                    @endif
                    <a href="{{route('info.edit',$id)}}">Editar Informações</a>
                    <br>
                    <br>
                    <a href="{{route('info.show',$id)}}">Consultar Informações</a>
                    <br>
                    <br>
                    @if(!empty(session()->get('sign')))
                    <a href="{{route('job.index')}}">Consultar Vagas</a>
                    <br>
                    <br>
                    @endif
                    @if(!empty(session()->get('sign')))
                    <a href="{{route('listApplications')}}">Minhas Vagas</a>
                    <br>
                    <br>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
