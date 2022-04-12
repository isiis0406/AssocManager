@extends('layouts.app')

@section('content')
    <div class="container ">
        <h1 class="pb-4 text-center text-4xl font-bold text-slate-900 m-6">
        </h1>
        <h1 class="pb-1 text-center text-4xl text-slate-900 m-2">
        </h1>

        <h1 class="pb-4 text-center text-2xl text-slate-900 m-1">
        Evènements à venir
        </h1>
        

      @if (session('succes') )
      <p class="pb-4 text-center text-4xl text-green-600">
          {{ session('succes')  }}
        </p>

      @endif

      
      <div class=" flex py-4 px-4 ">
       
        <a href="" class="  text-xl font-light text-slate-900 float-right ml-8 transition duration-300 ease-in-out hover:bg-slate-500 mr-6 px-3 rounded-lg ">
            Creer un évènement 
            </a>
      </div>
    
       <div class=" flex flex-row justify-center items-center flex-wrap">

                @foreach ($evenements as $evenement )
                <a href="association/{{ $evenement->association->slug }}">

                <div class=" max-w-lg w-96 py-4 px-8 mx-3 bg-white shadow-lg rounded-lg my-4">

                    <div>
                        <h1 class="text-gray-800 text-3xl font-semibold">
                            {{ $evenement->association->nom}}
                        </h1>
                        <h1>
                            {{ $evenement->association->domaine }}
                        </h1>
                        <p class="mt-2 text-gray-600">
                        </p>

                        @if ($association->user_id == Auth::user()->id)
                        <div class=" flex py-4 px-4 ">
                            <a href="association/{{ $evenement->association->slug }}" class="bg-green-500 rounded-full font-bold text-white mt-5 px-2 py-1 transition duration-300 ease-in-out hover:bg-green-600 mr-6">
                                Piloter
                            </a>
                            <a href="/association/{{ $evenement->association->slug }}/edit" class="bg-blue-500 rounded-full font-bold text-white mt-5 px-2 py-1 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                Modifier
                            </a>
                            
                            <form action="/association/{{ $evenement->association->slug }}" method="POST">
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