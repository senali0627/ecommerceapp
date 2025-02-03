<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="py-10 bg-gray-50 font-poppins rounded-lg">
      <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
        <div class="flex flex-wrap mb-24 -mx-3">
          <div class="w-full pr-2 lg:w-1/4 lg:block">
            <div class="p-4 mb-5 bg-white border border-gray-200">
              <h2 class="text-2xl font-bold"> Categories</h2>
              <div class="w-16 pb-2 mb-6 border-b border-rose-600"></div>
              <ul>
                
                @foreach($categories as $category)
                <li class="mb-4" wire:key="{{ $category->id }}">
                  <label for="{{ $category->slug }}" class="flex items-center">
                    <input type="checkbox" wire:model.live="selected_categories" id="{{ $category->slug }}" value="{{ $category->id }}"
                class="w-4 h-4 mr-2">
                <span class="text-lg">{{ $category->name }}</span>
                  </label>
                </li>
                @endforeach
              </ul>
  
            </div>
          </div>
          <div class="w-full px-3 lg:w-3/4">
            <div class="px-3 mb-4">
              <div class="items-center justify-between hidden px-3 py-2 bg-gray-100 md:flex ">
                <div class="flex items-center justify-between">
                  <select name="" id="" class="block w-40 text-base bg-gray-100 cursor-pointer">
                    <option value="">Sort by latest</option>
                    <option value="">Sort by Price</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap items-center ">
  
              
              @foreach($products as $product)
              <div class="w-full px-3 mb-6 sm:w-1/2 md:w-1/3" wire:key="{{ $product->id }}">
                <div class="border border-gray-300">
                  <div class="relative bg-gray-200">
                    <a href="/products/{{ $product->slug }}" class="">
                      <img src="{{ url('storage/' . $product->images[0]) }}" alt="{{ $product->name }}" class="object-cover w-full h-56 mx-auto ">
                    </a>
                  </div>
                  <div class="p-3 ">
                    <div class="flex items-center justify-between gap-2 mb-2">
                      <h3 class="text-xl font-medium">
                        {{ $product->name }}
                      </h3>
                    </div>
                    <p class="text-lg ">
                      <span class="text-green-600">
                        {{ number_format($product->price, 2) }} LKR
                      </span>
                    </p>
                  </div>
                  <div class="flex justify-center p-4 border-t border-gray-300">
  
                    <a wire:click.prevent='addToCart({{ $product->id }})' href="#" class="text-gray-500 flex items-center space-x-2 hover:text-red-500">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 bi bi-cart3 " viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                      </svg><span wire:loading.remove wire:target="addToCart({{ $product->id }})">Add to Cart</span>
                      <span wire:loading wire:target="addToCart({{ $product->id }})">Adding...</span>
                    </a>
              
  
                  </div>
                </div>
              </div>
              @endforeach       
 
  
            </div>
            
          </div>
        </div>
      </div>
    </section>
  
  </div>
