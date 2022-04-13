@extends("layouts.app")

    @section("content")

        <main class="w-full overflow-y-auto">
            <div class="px-10 mt-5">
            <span class="uppercase font-bold text-2xl text-white"
                >special food</span>
            </div>

            {{-- Content start --}}

            <div class="px-10 grid grid-cols-4 gap-4">

                {{-- Food Card --}}
                <div
                class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col items-center"
              >
                <div class="bg-white rounded-lg mt-5">
                  <img
                    src="https://source.unsplash.com/MNtag_eXMKw/1600x900"
                    class="h-40 rounded-md"
                    alt=""
                  />
                </div>
                <div class="bg-white shadow-lg rounded-lg -mt-4 w-64">
                  <div class="py-5 px-5">
                    <span class="font-bold text-gray-800 text-lg">Geek Pizza</span>
                    <div class="flex items-center justify-between">
                      <div class="text-sm text-gray-600 font-light">
                        Size : Regular
                      </div>
                      <div class="text-2xl text-red-600 font-bold">
                        $ 8.00
                      </div>
                    </div>
                  </div>
                </div>
              </div>





            </div>

            {{-- Content end --}}



        </main>    
        
    @endsection