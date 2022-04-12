@extends('layouts.app')

@section('content')
    <div class="container ">
        <h1 class="pb-4 text-center text-4xl font-bold text-slate-900 m-6">
            {{ $association->nom }}
        </h1>
        <h1 class="pb-1 text-center text-4xl text-slate-900 m-2">
        </h1>

        <h1 class="pb-4 text-center text-2xl text-slate-900 m-1">
        Liste des membres
        </h1>
        

      @if (session('succes') )
      <p class="pb-4 text-center text-4xl text-green-600">
          {{ session('succes')  }}
        </p>

      @endif

      
      <div class=" flex py-4 px-4 ">
       
        <a href="{{ route('association.membres.create',$association->slug) }}" class="  text-2xl font-bold text-slate-900 ml-8 transition duration-300 ease-in-out hover:bg-slate-500 mr-6 px-3 rounded-lg ">
            Ajouter un membre
            </a>
      </div>
    

    
        <table class="text-left w-full ">
            <thead class="bg-black flex text-white w-full">
                <tr class="flex w-full mb-4">
                    <th class="p-4 w-1/4">Nom</th>
                    <th class="p-4 w-1/4">Prenom</th>
                    <th class="p-4 w-1/4">Adresse</th>
                    <th class="p-4 w-1/4">Date de naissance</th>
                    <th class="p-4 w-1/4">Téléphone</th>
                    <th class="p-4 w-1/4">Proféssion</th>
                    <th class="p-4 w-1/4">Mail</th>
                    <th class="p-4 w-1/4">Modifier</th>
                    <th class="p-4 w-1/4">Supprimer</th>

                </tr>
            </thead>
            <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
               
                @foreach ($association->membres as $membre )
                
                 
            
                <tr class="flex w-full mb-1">
                    <td class="p-4 w-1/4">{{  $membre->nom }}</td>
                    <td class="p-4 w-1/4">{{  $membre->prenom }}</td>
                    <td class="p-4 w-1/4">{{  $membre->adresse }}</td>
                    <td class="p-4 w-1/4">{{  $membre->dateNaissance }}</td>
                    <td class="p-4 w-1/4">{{  $membre->telephone }}</td>
                    <td class="p-4 w-1/4">{{  $membre->profession }}</td>
                    <td class="p-4 w-1/4">{{  $membre->email }}</td>
                    <td class="p-4 w-1/4 ">
                        <a href="/association/{{ $association->slug }}/membres/{{ $membre->id }}/edit">
                            <span class="rounded-full bg-blue-800 text-white px-2 py-1 cursor-pointer">Editer</span>
                        </a>
                    </td>
                    <a href="">
                        <td class="p-4 w-1/4 ">
                            <form action="/association/{{ $membre->association->slug }}/membres/{{ $membre->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="rounded-full bg-red-600 text-white px-2 py-1 cursor-pointer" value="Supprimer">
                            </form>
                        </td>
                    </a>
                </tr>
  
                @endforeach
         
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection