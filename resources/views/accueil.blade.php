@extends("layouts.app")

    @section("content")

    <main class="w-full overflow-y-auto">
      
          <div class="px-10 mt-5">
            <span class="uppercase font-bold text-2xl text-white">special food</span>
          </div>

         {{--  {{dd($foods)}} --}} 
          

          <div class="px-10 grid grid-cols-4 gap-4">

            @foreach ($foods as $food)
            
            <x-food-card :food="$food"/>

            @endforeach

            {{$foods->links()}}

        </main>    
        
    @endsection
    
   