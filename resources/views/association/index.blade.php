
@extends('layouts.app')

@section('content')
    
<div style=" background-image: url('{{ asset('images/dashboard/fontwork.jpg') }}');
background-repeat: no-repeat;
background-size: cover;
">
    
    <div class="flex justify-end">
        <p class="px-4 m-3 text-xl text-white bg-slate-600 rounded-full">
            {{  Auth::user()->name }}
        </p>
    </div>    

    <div class="flex flex-row items-center justify-center">
 
            <h1 class="pb-4 text-center text-4xl text-white m-6">Mes Asso</h1>
            <a href="{{ route('association.create') }}" class=" font-bold text-white ml-8 transition duration-300 ease-in-out hover:bg-slate-700 mr-6 px-3 rounded-full ">
                Ajouter une Association
            </a>
        </div>

      
        @if (session('succes') )
        <p class="pb-4 text-center text-4xl text-green-600">{{ session('succes')  }}</p>

        @endif

        <div class=" flex flex-row justify-center items-center flex-wrap">

                @foreach ($associations as $association )
                <a href="association/{{ $association->slug }}">

                <div class=" max-w-lg w-96 py-4 px-8 mx-3 bg-white shadow-lg rounded-lg my-4">

                    <div>
                        <h1 class="text-gray-800 text-3xl font-semibold">
                            {{ $association->nom }}
                        </h1>
                        <h1>
                            {{ $association->domaine }}
                        </h1>
                        <p class="mt-2 text-gray-600">
                            {!! $association->presentation !!}
                        </p>

                        @if ($association->user_id == Auth::user()->id)
                        <div class=" flex py-4 px-4 ">
                            <a href="association/{{ $association->slug }}" class="bg-green-500 rounded-full font-bold text-white mt-5 px-2 py-1 transition duration-300 ease-in-out hover:bg-green-600 mr-6">
                                Piloter
                            </a>
                            <a href="/association/{{ $association->slug }}/edit" class="bg-blue-500 rounded-full font-bold text-white mt-5 px-2 py-1 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                Modifier
                            </a>
                            
                            <form action="/association/{{ $association->slug }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Supprimer" class="bg-red-500 rounded-full font-bold text-white mt-5 px-2 py-1 transition duration-300 ease-in-out hover:bg-red-600 mr-6 cursor-pointer">

                            </form>
                        </div>
                        @endif

                       

                    </div>
                </div>
            </a>

            @endforeach
      
       
        </div>
</div>



@endsection