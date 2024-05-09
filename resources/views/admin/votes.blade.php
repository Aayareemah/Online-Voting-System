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
                    <svg class="w-7 h-7 mr-2 text-gray-500  transition duration-75 group-hover:text-sky-900 shadow-gray-500 rounded p-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white; transform: ;msFilter:;">
                        <path d="M8 12.052c1.995 0 3.5-1.505 3.5-3.5s-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5 1.505 3.5 3.5 3.5zM9 13H7c-2.757 0-5 2.243-5 5v1h12v-1c0-2.757-2.243-5-5-5zm11.294-4.708-4.3 4.292-1.292-1.292-1.414 1.414 2.706 2.704 5.712-5.702z">
                            
                        </path>
                    </svg>
                    Votes
                </a>
            </li>

        </ol>
    </nav>

    
<div class="">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    
<div class="float-right mb-4">
    <form action="" class="max-w-md mx-auto">
        <div class="flex">
            <input type="text" placeholder="Search" class="h-10 px-3 w-full text-sm border rounded-lg border-gray-500 mr-2">
            <button class="bg-blue-500 px-4 py-2 text-white rounded-lg">Search</button>
        </div>
    </form>
</div>

<div class="float-left mb-4">
    <form action="" class="max-w-md mx-auto">
        <div class="flex">
            <button class="bg-yellow-500 ml-2 mt-2 px-5 py-2 text-white rounded-lg">reset</button>
        </div>
    </form>
</div>



    <table class="w-full mt-5 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-blue-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Position
                </th>
                <th scope="col" class="px-6 py-3">
                    Candidate
                </th>
                <th scope="col" class="px-6 py-3">
                    Voter
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    President
                </th>
                <td class="px-6 py-4">
                    Abdul
                </td>
                <td class="px-6 py-4">
                    Voter 1
                </td>
                <td class="px-6 py-4 text-left">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Governor
                </th>
                <td class="px-6 py-4">
                    Aayareemah
                </td>
                <td class="px-6 py-4">
                    Voter 2
                </td>
                <td class="px-6 py-4 text-left">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>

</div>