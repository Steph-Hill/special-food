<h1>Détails</h1>

@extends("layouts.app")

@section("content")

<main class="w-full overflow-y-auto">
      
    <div class="px-10 mt-5">
      <span class="uppercase font-bold text-2xl text-white"
        >{{$food->title}}</span>
        
    </div>

    <!-- component -->
<style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>

<div class="min-w-screen min-h-screen bg-slate-200 flex items-center p-5 lg:p-10 overflow-hidden relative">
  
    <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
        <div class="md:flex items-center -mx-10">
            <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                <div class="relative">
                  <div class="bg-white rounded-lg mt-5">
                    <img
                      src={{$food->image}}
                      class="h-80 rounded-md"
                      alt=""
                    />
                  </div>
                    {{-- Border --}}
                </div>                    
                <div class="border-double border-8 border-yellow-700 absolute top-10 bottom-10 left-10 right-10 z-0"></div>

            </div>
            <div class="w-full md:w-1/2 px-10">
                <div class="mb-10">

                    <h1 class="font-bold uppercase text-2xl mb-5"><br>{{$food->title}} </h1>

                   <h2 class="font-bold uppercase text-2xl mb-5"><br>{{"Catégorie : ".$food->id}} </h2>

                    <p class="text-sm"> {{$food->content}}</p>
                </div>
                {{-- Price --}}
                <div>
                    <div class="inline-block align-bottom mr-5">

                        <span class="font-bold text-5xl leading-none align-baseline">{{$food->price." $" }}</span>
                       
                    </div>

                    {{-- Button --}}
                    <div class="inline-block align-bottom">

                        <button class="bg-yellow-300 opacity-75 hover:opacity-100 text-yellow-900 hover:text-gray-900 rounded-lg px-10 py-2 font-semibold"><i class="mdi mdi-cart -ml-2 mr-2"></i> Ajouter </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

</main>

    
@endsection
