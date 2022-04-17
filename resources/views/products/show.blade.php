<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <div class="flexslider">
                    <ul class="slides">
                      @foreach ($product->images as $image)
                      <li data-thumb="{{ Storage::url($image->url) }} ">
                        <img src="{{ Storage::url($image->url) }} " />
                      </li>
                      @endforeach
                    </ul>
                  </div>
            </div>

            <div>
                <h1 class="text-xl font-bold text-gray-700">{{$product->name}} </h1>
                <div class="flex">
                    <p class="text-gray-700">Marca: <a class="underline capitalize hover:text-orange-500">{{$product->brand->name}} </a> </p>
                    <p class="text-gray-700 mx-6">5 <i class="fas fa-star text-sm text-yellow-400"></i> </p>
                    <a href="" class="text-orange-500 hover:text-orange-700 underline">39 reseñas</a>
                </div>

                <p class="text-2xl font-semibold text-gray-700">USD {{$product->price}} </p>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
    @endpush
</x-app-layout>