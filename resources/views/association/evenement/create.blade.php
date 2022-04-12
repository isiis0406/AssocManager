@extends('layouts.app')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

@section('content')
    



<h1 class="text-center text-2xl font-bold  mt-10">Creer un Événement</h1>


  <form method="POST" action="{{ route('association.evenement.store',$association->slug) }}" enctype="multipart/form-data" >

    @csrf
    


  <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
    <div class=" bg-slate-700 rounded-md px-6 py-10 max-w-2xl mx-auto">

    
      <div class="space-y-4">
        {{-- nom  ville type--}}
        <div>
          
          <label for="nom" class="text-lx text-white font-serif">Nom</label>
          <input type="text" name="nom" id="nom"  value="{{ old('nom') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        
          @error('nom')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>               
           
          @enderror

        </div>
        <div>
          
          <label for="ville" class="text-lx text-white font-serif">Ville</label>
          <input type="text" name="ville" id="ville"  value="{{ old('ville') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        
          @error('ville')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>               
           
          @enderror

        </div>
        <div>
          
          <label for="Type" class="text-lx text-white font-serif">Type d'évènement</label>
          <input type="text" name="Type" id="Type"  value="{{ old('Type') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
        
          @error('Type')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>               
           
          @enderror

        </div>

         {{-- Date  --}}
         <div>
          <label for="date" class="text-lx text-white font-serif">Date</label>
          <input type="date" name="date" id="date"  value="{{ old('date') }}"class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
 
          @error('date')
          <p class="pb-4 text-red-600">
            {{ $message }}
          </p>                  
          @enderror
        </div>

        {{-- tarif --}}
        <div>
          
            <label for="tarif" class="text-lx text-white font-serif">Tarif (€)</label>
            <input type="number" name="tarif" id="tarif"  value="{{ old('tarif') }}" min ="0" step="0.0" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          
            @error('tarif')
            <p class="pb-4 text-red-600">
              {{ $message }}
            </p>               
             
            @enderror
  
        </div>
        {{-- affiche
        <div>
          
            <label for="affiche" class="text-lx text-white font-serif">Affiche</label>
            <input type="file" name="affiche" id="affiche"  min ="0" step="0.0" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md" />
          
            @error('affiche')
            <p class="pb-4 text-red-600">
              {{ $message }}
            </p>               
             
            @enderror
  
        </div>
  --}}
     
     
        {{-- submit button --}}
        <button class=" px-6 py-2 mx-auto block rounded-xl text-lg font-semibold text-indigo-100 bg-gray-400 hover:bg-gray-900 transition duration-300 ease-out  cursor-pointer  ">Creer</button>
      </div>
    </div>
  </div>
</form>


@endsection
    
