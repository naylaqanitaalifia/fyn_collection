<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">
    <header class="p-8">
        <nav class="z-10 w-full absolute">
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-4 md:gap-0 relative">
                    <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer">
                    <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0">
                        <a href="#home" aria-label="logo" class="flex space-x-2 items-center">
                            <div aria-hidden="true" class="flex space-x-1">
                                {{-- <div class="h-4 w-4 rounded-full bg-gray-900 dark:bg-white"></div> --}}
                                <div class="h-6 w-2 bg-blue-500"></div> 
                            </div>
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">FYN_COLLECTION</span>
                        </a>
                        
                        <div class="relative flex items-center lg:hidden max-h-10">
                            <label role="button" for="toggle_nav" aria-label="hamburger" id="hamburger" class="relative  p-6 -mr-6">
                                <div aria-hidden="true" id="line" class="m-auto h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                                <div aria-hidden="true" id="line2" class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                                <div aria-hidden="true" id="line2" class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 dark:bg-gray-300 transition duration-300"></div>
                            </label>
                        </div>
                    </div>

                    <div aria-hidden="true" class="fixed z-10 inset-0 h-screen w-screen bg-white/70 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70"></div>
                    <div class="flex-col z-20 flex-wrap gap-6 p-8 rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 justify-end w-full invisible opacity-0 translate-y-1  absolute top-full left-0 transition-all duration-300 scale-95 origin-top lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none dark:shadow-none">
                       
                        <div class="text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0">
                            <ul class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0">
                                <li>
                                    <a href="#service" class="block md:px-4 transition hover:text-blue-500"> 
                                        <span>Service</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#outfitInspiration" class="block md:px-4 transition hover:text-blue-500"> 
                                        <span>Outfit Inspiration</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-12 lg:mt-0">
                            <a
                                href="#"
                                class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-blue-500 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max"
                                > <!-- Ganti before:bg-primary -->
                                <span class="relative text-sm font-semibold text-white"
                                    >Get Started</span
                                >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="landing">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 my-24">
            <div class="space-y-6 justify-between text-gray-600 md:flex flex-row md:gap-6 md:space-y-0 lg:gap-12 lg:items-center">
                <div class="md:w-1/2 lg:w-1/2 md:order-2">
                    <img
                        src="{{ asset('assets/images/landing.png') }}"
                        alt="image"
                        loading="lazy"
                        width="150"
                        height="150"
                        class="w-full"
                    />
                </div>
                <div class="md:w-1/2 lg:w-1/2 md:order-1">
                    <h2 class="text-3xl font-bold text-gray-900 md:text-4xl dark:text-white">
                        Sew Your Dreams with Us
                    </h2>
                    <p class="my-8 text-gray-600 dark:text-gray-300">
                        Welcome to <b>FYN COLLECTION</b>, where creativity meets sewing expertise. We create perfect clothing tailored to your style. From custom designs to bulk orders, every stitch is made with love. Join us to bring your dream outfit to life!
                    </p>
                </div>
            </div>
        </div>
        
    </div>

    {{-- <div id="services"> --}}
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
          <div class="md:w-2/3 lg:w-1/2">            
            <h2 class="my-8 mt-24 text-2xl font-bold text-gray-700 dark:text-white md:text-4xl">
              Service
            </h2>
            <p class="text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, reprehenderit.</p>
          </div>
          <div
            class="mt-12 grid divide-x divide-y divide-gray-100 dark:divide-gray-700 overflow-hidden rounded-3xl border border-gray-100 text-gray-600 dark:border-gray-700 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4"
          >
                @foreach ($services as $index => $item)
                <div class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                    <div class="relative space-y-8 py-12 p-8">
                    <img
                        src="https://cdn-icons-png.flaticon.com/512/4341/4341139.png"
                        class="w-12"
                        width="512"
                        height="512"
                        alt="burger illustration"
                    />
            
                    <div class="space-y-2">
                        <h5
                        class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary"
                        >
                        {{ $item['service_name'] }}
                        </h5>
                        <p class="text-gray-600 dark:text-gray-300">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                    <a href="#" id="readMoreBtn" class="flex items-center justify-between group-hover:text-secondary">
                        <span class="text-sm" id="readMoreBtn">Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                            <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>                
                    </a>

                    <!-- Main modal -->
                    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $item['service_name'] }}</h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $item['desc'] }}
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <a href="{{ route('order.create', $item['id']) }}" data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Order Now</a>
                                    <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        // Event listener for Read More button
                        document.getElementById('readMoreBtn').addEventListener('click', function(e) {
                            e.preventDefault(); // Mencegah tindakan default
                            document.getElementById('static-modal').classList.remove('hidden'); // Menampilkan modal
                        });
                    
                        // Menutup modal saat klik di luar modal
                        window.onclick = function(event) {
                            const modal = document.getElementById('static-modal');
                            if (event.target == modal) {
                                modal.classList.add('hidden'); // Menyembunyikan modal
                            }
                        }
                    
                        // Menutup modal saat tombol close diklik
                        document.querySelector('[data-modal-hide="static-modal"]').addEventListener('click', function() {
                            document.getElementById('static-modal').classList.add('hidden');
                        });
                    </script>
                    
                    

                    </div>
                </div>
                @endforeach
            </div>

        {{-- outftit inspiration --}}
         

                <div id="outfits">
                    <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div class="md:w-2/3 lg:w-1/2">            
                            <h2 class="my-8 mt-24 text-2xl font-bold text-gray-700 dark:text-white md:text-4xl">
                              Outfit Inspiration
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, reprehenderit.</p>
                        </div>
                        {{-- <div
                            class="mt-12 grid divide-x divide-y divide-gray-100 dark:divide-gray-700 overflow-hidden rounded-3xl border border-gray-100 text-gray-600 dark:border-gray-700 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4"
                        > --}}
                            @foreach ($outfits as $index => $item)
                                <div class="group p-6 sm:p-8 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                                    <div class="relative overflow-hidden rounded-xl">
                                        <img src="https://images.unsplash.com/photo-1661749711934-492cd19a25c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1674&q=80"
                                            alt="art cover" loading="lazy" width="1000" height="667" class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
                                    </div>
                                    <div class="mt-6 relative">
                                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">
                                            {{ $item['title'] }}
                                        </h3>
                                        <p class="mt-6 mb-8 text-gray-600 dark:text-gray-300">
                                            {{ $item['status'] }}
                                        </p>
                                        <p class="mt-6 mb-8 text-gray-600 dark:text-gray-300">
                                            {{ $item['desc'] }}
                                        </p>
                                        <a class="inline-block" id="readMoreBtn{{ $index }}" href="#">
                                            <span class="text-info dark:text-blue-300">Read more</span>
                                        </a>

                                        <!-- Main modal -->
                                        <div id="static-modal-{{ $index }}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center">
                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            {{ $item['title'] }}
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal-{{ $index }}">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-4 md:p-5 space-y-4">
                                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                            {{ $item['status'] }}
                                                        </p>
                                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                            {{ $item['desc'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            // Event listener for the new Read More button
                                            document.getElementById('readMoreBtn{{ $index }}').addEventListener('click', function (e) {
                                                e.preventDefault(); // Mencegah tindakan default
                                                document.getElementById('static-modal-{{ $index }}').classList.remove('hidden'); // Menampilkan modal
                                            });

                                            // Menutup modal saat klik di luar modal
                                            window.onclick = function (event) {
                                                const modal = document.getElementById('static-modal-{{ $index }}');
                                                if (event.target == modal) {
                                                    modal.classList.add('hidden'); // Menyembunyikan modal
                                                }
                                            }

                                            // Menutup modal saat tombol close diklik
                                            document.querySelector('[data-modal-hide="static-modal-{{ $index }}"]').addEventListener('click', function () {
                                                document.getElementById('static-modal-{{ $index }}').classList.add('hidden');
                                            });
                                        </script>
                                    </div>
                                </div>
                            @endforeach
                        {{-- </div> --}}
                    </div>

                </div>


                {{-- footer --}}
                <footer class="py-20 md:py-40">
                    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                      <div class="m-auto md:w-10/12 lg:w-8/12 xl:w-6/12">
                        <div class="flex flex-wrap items-center justify-between md:flex-nowrap">
                          <div
                            class="flex w-full justify-center space-x-12 text-gray-600 dark:text-gray-300 sm:w-7/12 md:justify-start"
                          >
                            <ul role="list" class="space-y-8">
                              <li>
                                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    class="w-5"
                                    viewBox="0 0 16 16"
                                  >
                                    <path
                                      d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"
                                    />
                                  </svg>
                                  <span>Github</span>
                                </a>
                              </li>
                              
                              <li>
                                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    class="w-5"
                                    viewBox="0 0 16 16"
                                  >
                                    <path
                                      d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
                                    />
                                  </svg>
                                  <span>YouTube</span>
                                </a>
                              </li>
                  
                              <li>
                                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor"
                                    class="w-5"
                                    viewBox="0 0 16 16"
                                  >
                                    <path
                                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                                    />
                                  </svg>
                                  <span>Instagram</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div
                            class="m-auto mt-16 w-10/12 space-y-6 text-center sm:mt-auto sm:w-5/12 sm:text-left"
                          >
                            <span class="block text-gray-500 dark:text-gray-400"
                              >Bringing sewing skills to your fingertips.</span
                            >
                  
                            <span class="block text-gray-500 dark:text-gray-400">Copyright &copy; <span id="year"></span> 2024 || Nayla Qanita Alifia</span>
                          </div>
                        </div>
                      </div>
                    </div>
                </footer>
            </div>
</body>

</html>
