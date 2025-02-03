<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <div class="w-full h-screen bg-gradient-to-r from-pink-200 to-purple-200 py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid -->
            <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
                <div>
                    <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight">
                        Find the Perfect Gift at <span class="text-purple-600">ClickGift</span>
                    </h1>
                    <p class="mt-3 text-lg text-gray-800">
                        Explore our wide range of unique and thoughtful gifts for every occasion. From personalized items to luxury hampers, we have something special for everyone.
                    </p>
    
                    <!-- Buttons -->
                    <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-purple-600 text-white hover:bg-purple-700 disabled:opacity-50 disabled:pointer-events-none" href="/shop">
                            Shop Now
                            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="/contact">
                            Contact Us
                        </a>
                    </div>
                    <!-- End Buttons -->
    
                    <!-- Review -->
                    <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5">
                        <!-- Review -->
                        <div class="py-5">
                            <div class="flex space-x-1">
                                <svg class="h-4 w-4 text-yellow-400" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="h-4 w-4 text-yellow-400" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="h-4 w-4 text-yellow-400" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="h-4 w-4 text-yellow-400" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                                <svg class="h-4 w-4 text-yellow-400" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z" fill="currentColor" />
                                </svg>
                            </div>
    
                            <p class="mt-3 text-sm text-gray-800">
                                <span class="font-bold">4.8</span> /5 - from 12k reviews
                            </p>
                        </div>
                        <!-- End Review -->
                    </div>
                    <!-- End Review -->
                </div>
                <!-- End Col -->
    
                <div class="relative ms-4">
                    <img class="w-full rounded-md" src="https://static.vecteezy.com/system/resources/previews/011/993/278/non_2x/3d-render-online-shopping-bag-using-credit-card-or-cash-for-future-use-credit-card-money-financial-security-on-mobile-3d-application-3d-shop-purchase-basket-retail-store-on-e-commerce-free-png.png" alt="Gift Shop Hero Image">
                    <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6"></div>
    
                    <!-- SVG-->
                    <div class="absolute bottom-0 start-0">
                        <svg class="w-2/3 ms-auto h-auto text-white" width="630" height="451" viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="531" y="352" width="99" height="99" fill="currentColor" />
                            <rect x="140" y="352" width="106" height="99" fill="currentColor" />
                            <rect x="482" y="402" width="64" height="49" fill="currentColor" />
                            <rect x="433" y="402" width="63" height="49" fill="currentColor" />
                            <rect x="384" y="352" width="49" height="50" fill="currentColor" />
                            <rect x="531" y="328" width="50" height="50" fill="currentColor" />
                            <rect x="99" y="303" width="49" height="58" fill="currentColor" />
                            <rect x="99" y="352" width="49" height="50" fill="currentColor" />
                            <rect x="99" y="392" width="49" height="59" fill="currentColor" />
                            <rect x="44" y="402" width="66" height="49" fill="currentColor" />
                            <rect x="234" y="402" width="62" height="49" fill="currentColor" />
                            <rect x="334" y="303" width="50" height="49" fill="currentColor" />
                            <rect x="581" width="49" height="49" fill="currentColor" />
                            <rect x="581" width="49" height="64" fill="currentColor" />
                            <rect x="482" y="123" width="49" height="49" fill="currentColor" />
                            <rect x="507" y="124" width="49" height="24" fill="currentColor" />
                            <rect x="531" y="49" width="99" height="99" fill="currentColor" />
                        </svg>
                    </div>
                    <!-- End SVG-->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
    </div>
    <section> <!-- categories section -->
        <div class="bg-orange-100 py-20"> 
            <div class="max-w-xl mx-auto">
                <div class="text-center">
                    <div class="relative flex flex-col items-center">
                        <h1 class="text-5xl font-bold">Browse <span class="text-purple-600">Gift Categories</span></h1> 
                        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                            <div class="flex-1 h-2 bg-purple-200"></div> 
                            <div class="flex-1 h-2 bg-purple-400"></div>
                            <div class="flex-1 h-2 bg-purple-600"></div>
                        </div>
                    </div>
                    <p class="mb-12 text-base text-center text-gray-600"> 
                        Explore our wide range of gift categories to find the perfect present for every occasion. Whether it's a birthday, anniversary, or just because, we have something special for everyone.
                    </p>
                </div>
            </div>
    
            <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">
                    @foreach ($categories as $category)
                    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition" href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->id }}">
                        <div class="p-4 md:p-5">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
                                    <div class="ms-3">
                                        <h3 class="group-hover:text-purple-600 font-semibold text-gray-800 dark-group-hover:text-gray-400">
                                            {{ $category->name }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <svg class="flex-shrink-0 w-5 h-5 text-purple-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> 
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

       <!-- Reviews Secton -->
      <section class="py-14 font-poppins">
       
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold">Customer <span class="text-blue-500">Reviews</span></h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-blue-200"></div>
                        <div class="flex-1 h-2 bg-blue-400"></div>
                        <div class="flex-1 h-2 bg-blue-600"></div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-gray-500">
                    Hear what our customers are saying about their experience with ClickGift. We take pride in delivering the best gifts for every occasion!
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Review 1 -->
            <div class="py-6 bg-white rounded-md shadow">
                <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b">
                    <div class="flex items-center px-6 mb-2 md:mb-0">
                        <div class="flex mr-2 rounded-full">
                            <img src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt="Customer 1" class="object-cover w-12 h-12 rounded-full">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Krishnika Selvakumar</h2>
                            <p class="text-xs text-gray-500">Happy Customer</p>
                        </div>
                    </div>
                    <p class="px-6 text-base font-medium text-gray-600">Joined 12, SEP, 2024</p>
                </div>
                <p class="px-6 mb-6 text-base text-gray-500">
                    I ordered a custom gift basket for my friend's birthday, and it was absolutely perfect! The packaging was beautiful, and everything arrived on time. Highly recommend ClickGift!
                </p>
                <div class="flex flex-wrap justify-between pt-4 border-t">
                    <div class="flex px-6 mb-2 md:mb-0">
                        <ul class="flex items-center justify-start mr-4">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <h2 class="text-sm text-gray-500">Rating: <span class="font-semibold text-gray-600">4.5</span></h2>
                    </div>
                    <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500">
                        <div class="flex items-center">
                            <div class="flex mr-3 text-sm text-gray-700">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"></path>
                                    </svg>
                                </a>
                                <span>12</span>
                            </div>
                            <div class="flex text-sm text-gray-700">
                                <a href="#" class="inline-flex hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"></path>
                                    </svg>
                                    Reply
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="py-6 bg-white rounded-md shadow">
                <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b">
                    <div class="flex items-center px-6 mb-2 md:mb-0">
                        <div class="flex mr-2 rounded-full">
                            <img src="https://i.postimg.cc/q7pv50zT/pexels-edmond-dant-s-4342352.jpg" alt="Customer 2" class="object-cover w-12 h-12 rounded-full">
                        </div>
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900">Tharunethu De Silva</h2>
                            <p class="text-xs text-gray-500">Frequent Shopper</p>
                        </div>
                    </div>
                    <p class="px-6 text-base font-medium text-gray-600">Joined 15, OCT, 2024</p>
                </div>
                <p class="px-6 mb-6 text-base text-gray-500">
                    ClickGift has become my go-to for all special occasions. The personalized gifts are unique, and the delivery is always on time. Love the quality and service!
                </p>
                <div class="flex flex-wrap justify-between pt-4 border-t">
                    <div class="flex px-6 mb-2 md:mb-0">
                        <ul class="flex items-center justify-start mr-4">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <h2 class="text-sm text-gray-500">Rating: <span class="font-semibold text-gray-600">5.0</span></h2>
                    </div>
                    <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500">
                        <div class="flex items-center">
                            <div class="flex mr-3 text-sm text-gray-700">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                        <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"></path>
                                    </svg>
                                </a>
                                <span>18</span>
                            </div>
                            <div class="flex text-sm text-gray-700">
                                <a href="#" class="inline-flex hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"></path>
                                    </svg>
                                    Reply
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="reviews"></div>

<script>
    axios.get('/api/reviews')
        .then(response => {
            let reviews = response.data;
            let reviewsHtml = '';
            reviews.forEach(review => {
                reviewsHtml += `<p>${review.user_name} (${review.rating} stars)</p>`;
                reviewsHtml += `<p>${review.review}</p>`;
            });
            document.getElementById('reviews').innerHTML = reviewsHtml;
        })
        .catch(error => {
            console.error(error);
        });
</script>
<form id="reviewForm">
    <input type="text" id="userName" placeholder="Your Name" required>
    <textarea id="reviewText" placeholder="Write a review" required></textarea>
    <input type="number" id="rating" min="1" max="5" placeholder="Rating (1-5)" required>
    <button type="submit">Submit Review</button>
</form>

<script>
    document.getElementById('reviewForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const review = {
            product_id: 1,  // Assuming you are reviewing product with id 1
            user_name: document.getElementById('userName').value,
            review: document.getElementById('reviewText').value,
            rating: document.getElementById('rating').value
        };

        axios.post('/api/reviews', review)
            .then(response => {
                console.log('Review Submitted:', response.data);
            })
            .catch(error => {
                console.error('Error submitting review:', error);
            });
    });
</script>
<button onclick="deleteReview(1)">Delete Review</button>

<script>
    function deleteReview(id) {
        axios.delete(`/api/reviews/${id}`)
            .then(response => {
                console.log('Review Deleted');
            })
            .catch(error => {
                console.error('Error deleting review:', error);
            });
    }
</script>
<section class="py-14 font-poppins">
    <div class="max-w-xl mx-auto text-center">
        <h1 class="text-5xl font-bold">Customer <span class="text-blue-500">Reviews</span></h1>
        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
            <div class="flex-1 h-2 bg-blue-200"></div>
            <div class="flex-1 h-2 bg-blue-400"></div>
            <div class="flex-1 h-2 bg-blue-600"></div>
        </div>
        <p class="mb-12 text-base text-gray-500">
            Hear what our customers are saying about their experience with ClickGift. We take pride in delivering the best gifts for every occasion!
        </p>
    </div>

    <!-- Dynamic Review Section -->
    <div id="review-section" class="grid grid-cols-1 gap-6 lg:grid-cols-2">
        <!-- Reviews will be inserted here dynamically -->
    </div>
</section>

<!-- Add Axios & Reviews.js -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/reviews.js') }}"></script>


</div>
