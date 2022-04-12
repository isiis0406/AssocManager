@extends('layouts.app')

@section('content')
<div class="flex justify-end">
    <p class="px-4 m-3 text-xl text-white bg-slate-600 rounded-full">
        {{  Auth::user()->name }}
    </p>
</div>   

<div class="grid grid-cols-3">

    <a href="{{ $association->slug }}/membres">
        <div class="p-4 mx-4">
            <div
              class="
                c-card
                block
                bg-white
                shadow-md
                hover:shadow-xl
                rounded-lg
                overflow-hidden">
           
              <img
                class="
                  lg:h-60
                  xl:h-56
                  md:h-64
                  sm:h-72
                  xs:h-72
                  h-72
                  rounded
                  w-full
                  object-cover object-center
                  mb-4"
                src="{{ asset('images/dashboard/ManageTeam.jpg') }}"
                alt="Image Size 720x400"/>
              
                <div class="p-4">
                    <h1 class="text-gray-800 text-center text-3xl font-semibold">
                        Gestion des Membres
                    </h1>
    
                    <h2
                    class="
                        text-lg text-gray-900
                        text-center
                        font-medium
                        title-font
                        mb-4">
                        Gerer ici vos membres tout en consolidant vos équipes
                    </h2>   
                </div>
            </div>
          
        
        
        
        </div>
    </a>

    <a href="{{ $association->slug }}/evenement">
        <div class=" p-4 mx-4">
            <div
              class="
                c-card
                block
                bg-white
                shadow-md
                hover:shadow-xl
                rounded-lg
                overflow-hidden">
           
              <img
                class="
                  lg:h-60
                  xl:h-56
                  md:h-64
                  sm:h-72
                  xs:h-72
                  h-72
                  rounded
                  w-full
                  object-cover object-center
                  mb-4"
                src="{{ asset('images/dashboard/ManageEvent.jpg') }}"
                alt="Image Size 720x400"/>
              
                <div class="p-4">
                    <h1 class="text-gray-800 text-center text-3xl font-semibold">
                        Gestion d'Evênements
                    </h1>
    
                    <h2
                    class="
                        text-lg text-gray-900
                        text-center
                        font-medium
                        title-font
                        mb-4">
                    Administrer vos évênement sans aucune prise de tête
                    </h2>   
                </div>
            </div>
          
        
        
        
        </div>
    </a>

    <a href="">
        <div class=" p-4 mx-4">
            <div
              class="
                c-card
                block
                bg-white
                shadow-md
                hover:shadow-xl
                rounded-lg
                overflow-hidden">
           
              <img
                class="
                  lg:h-60
                  xl:h-56
                  md:h-64
                  sm:h-72
                  xs:h-72
                  h-72
                  rounded
                  w-full
                  object-cover object-center
                  mb-4"
                src="{{ asset('images/dashboard/ManagePayment.jpg') }}"
                alt="Image Size 720x400"/>
              
                <div class="p-4">
                    <h1 class="text-gray-800 text-center text-3xl font-semibold">
                        Gestion de paiement
                    </h1>
    
                    <h2
                    class="
                        text-lg text-gray-900
                        text-center
                        font-medium
                        title-font
                        mb-4">
                    Maîtriser vos échanges d'argent sur le bout des doigts
                    </h2>   
                </div>
            </div>
          
        
        
        
        </div>
    </a>
</div>


@endsection