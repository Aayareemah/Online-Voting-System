@include('admin.header')

@include('admin.topnav')

@include('admin.sidenav')

<div class="p-2 sm:ml-64 mb-14">
<nav class="md:max-w-max flex px-5 py-2 mt-20 mx-2 text-white border rounded-lg bg-blue-950 border-blue-900"
        aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-white">
                    <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Dashboard
                </a>
            </li>

        </ol>
    </nav>
    <div class="p-2 rounded-lg border-gray-700">

        <h3 class="text-gray-400 text-sm">Analytics</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4 mt-2">

            <div>
                <a href="#"
                    class="flex items-center justify-evenly p-4 rounded bg-blue-50 h-full bg-blue-950/80 shadow-blue-950 shadow-lg">
                    <div class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z">
                            </path>
                            <path
                                d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z">
                            </path>
                        </svg>
                        <span class="font-bold text-lg text-white">Candidates</span>

                    </div>
                    <p class="font-bold text-2xl text-white">
                        300
                    </p>

                </a>
            </div>
            <div>
                <a href="#"
                    class="flex items-center justify-evenly p-4 rounded bg-blue-50 h-full bg-blue-950/80 shadow-blue-950 shadow-lg">
                    <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-gray-500 transition duration-75 group-hover:text-sky-900 shadow-gray-500 rounded p-1" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;">
                        <path d="M12 4v3l4-4-4-4v3c-4.418 0-8 3.582-8 8 0 2.24.916 4.261 2.386 5.719l-1.57 3.141 3.137-1.57c1.461 1.471 3.486 2.379 5.787 2.379 4.418 0 8-3.582 8-8s-3.582-8-8-8zm4 8c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4z"/>
                    </svg>
                        <span class="font-bold text-lg text-white">Positions</span>
                    </div>
                    <p class="font-bold text-2xl text-white">
                        200
                    </p>

                </a>
            </div>
            <div>
                <a href="#"
                    class="flex items-center justify-evenly p-4 rounded bg-blue-50 h-full bg-blue-950/80 shadow-blue-950 shadow-lg">
                    <div class="flex flex-col items-center">
                    <svg class="w-20 h-20 text-gray-500  transition duration-75 group-hover:text-sky-900 shadow-gray-500 rounded p-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;">
                        <path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path><path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm1.5 7H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1c0-3.309-2.691-6-6-6z">
                        </path>
                    </svg>
                        <span class="font-bold text-lg text-white">Voters</span>
                    </div>
                    <p class="font-bold text-2xl text-white">
                        200
                    </p>

                </a>
            </div>
            <div>
                <a href="#"
                    class="flex items-center justify-evenly p-4 rounded bg-blue-50 h-full bg-blue-950/80 shadow-blue-950 shadow-lg">
                    <div class="flex flex-col items-center">
                    <svg class="w-20 h-20 mr-2 text-gray-500  transition duration-75 group-hover:text-sky-900 shadow-gray-500 rounded p-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white; transform: ;msFilter:;">
                        <path d="M8 12.052c1.995 0 3.5-1.505 3.5-3.5s-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5 1.505 3.5 3.5 3.5zM9 13H7c-2.757 0-5 2.243-5 5v1h12v-1c0-2.757-2.243-5-5-5zm11.294-4.708-4.3 4.292-1.292-1.292-1.414 1.414 2.706 2.704 5.712-5.702z">
                            
                        </path>
                    </svg>
                        <span class="font-bold text-lg text-white">Votes</span>
                    </div>
                    <p class="font-bold text-2xl text-white">
                        400
                    </p>

                </a>
            </div>
        </div>

        <h3 class="text-gray-600 pt-4 text-sm">Votes Tally</h3>

        


        

    </div>
</div>
