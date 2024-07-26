<div x-data="{ open: false }" class="fixed w-full z-10">
    {{-- 1st Navbar --}}
    <div class="bg-pink-400 hidden lg:block">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-end items-center py-1">
            <a href="#" class="hover:text-gray-300 flex items-center space-x-1 mr-4">
                <i class="fa fa-question-circle" aria-hidden="true"></i>
                <span>Help</span>
            </a>
            <a href="#" class="hover:text-gray-300 flex items-center space-x-1 mr-4">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <span>Notifications</span>
            </a>
            <a href="#" class="hover:text-gray-300 flex items-center space-x-1">
                <span>Dashboard</span>
            </a>
        </div>
    </div>
    {{-- 2nd Navbar --}}
    <div class="dark:bg-slate-900 ">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center space-x-4">
                    <a href="#">
                        <img src="{{ asset('images/SPAS_logo.png') }}" alt="San Pedro Animal Shelter" class="h-20">
                    </a>
                    <h1 class="text-xl font-bold hidden lg:block">San Pedro Animal Shelter</h1>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button @click="open = !open" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <a href="{{url('/')}}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Home</a>
                    <a href="{{url('/about')}}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">About Us</a>
                    <a href="{{url('/adopt')}}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Adopt</a>
                    <a href="{{url('/donate')}}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Donate</a>
                    <a href="{{url('/volunteer')}}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Volunteer</a>
                    <a href="{{url('/appointment')}}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Appointments</a>
                    <a href="{{url('/contact')}}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Contact Us</a>
                </nav>
            </div>
        </div>
    </div>

    <div :class="{ 'block': open, 'hidden': !open }" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{url('/')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Home</a>
            <a href="{{url('/about')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">About
                Us</a>
            <a href="{{url('/adopt')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Adopt</a>
            <a href="{{url('/donate')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Donate</a>
            <a href="{{url('/volunteer')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Volunteer</a>
            <a href="{{url('/appointment')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Appointments</a>
            <a href="{{url('/contact')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Contact
                Us</a>
            <a href="{{url('/help')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Help</a>
            <a href="{{url('/notifications')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Notifications</a>
            <a href="{{url('/dashboard')}}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Dashboard</a>
        </div>
    </div>
</div>