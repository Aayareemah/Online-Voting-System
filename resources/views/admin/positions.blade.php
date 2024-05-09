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
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-gray-500 transition duration-75 group-hover:text-sky-900 shadow-gray-500 rounded p-1" width="24" height="24" viewBox="0 0 24 24" style="fill: white;transform: ;msFilter:;">
                        <path d="M12 4v3l4-4-4-4v3c-4.418 0-8 3.582-8 8 0 2.24.916 4.261 2.386 5.719l-1.57 3.141 3.137-1.57c1.461 1.471 3.486 2.379 5.787 2.379 4.418 0 8-3.582 8-8s-3.582-8-8-8zm4 8c0 2.206-1.794 4-4 4s-4-1.794-4-4 1.794-4 4-4 4 1.794 4 4z"/>
                    </svg>
                    Positions
                </a>
            </li>

        </ol>
    </nav>
    <div class="">    
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
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="mt-2 ml-2 block text-white mt- bg-green-800 hover:bg-green-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium px-4 py-2 text-center " type="button">
                    <strong>+ </strong>Add New
                </button>
            </div>
        </form>
    </div> 

    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="bg-gray-700/50 hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="flex justify-center items-center w-full h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add New Position
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="#">
                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">description</label>
                            <input type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required />
                        </div>
                        <div>
                            <label for="maxvote" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Max vote</label>
                            <input type="number" name="maxvote" id="maxvote" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
                        </div>
                        <div class="">
                            <button class="rounded bg-green-500 py-1 px-2 text-white">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
    <table class="w-full mt-5 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-blue-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Maximum vote
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    President
                </th>
                <td class="px-6 py-4 text-center">
                    1
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="#" class="font-medium text-white p-2 dark:text-white-500 bg-green-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-white p-2 dark:text-white-500 bg-red-500 hover:underline">Delete</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Vice President
                </th>
                <td class="px-6 py-4 text-center">
                    1
                </td>
                <td class="px-6 py-4 text-center">
                    <a href="#" class="font-medium text-white p-2 dark:text-white-500 bg-green-500 hover:underline">Edit</a>
                    <a href="#" class="font-medium text-white p-2 dark:text-white-500 bg-red-500 hover:underline">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalToggleButtons = document.querySelectorAll('[data-modal-toggle]');
        const modalHideButtons = document.querySelectorAll('[data-modal-hide]');
        modalToggleButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetId = this.getAttribute('data-modal-target');
                const targetModal = document.getElementById(targetId);
                if (targetModal) {
                    targetModal.classList.toggle('hidden');
                    targetModal.setAttribute('aria-hidden', targetModal.classList.contains('hidden'));
                }
            });
        });
        modalHideButtons.forEach(button => {
            button.addEventListener('click', function () {
                const targetId = this.getAttribute('data-modal-hide');
                const targetModal = document.getElementById(targetId);
                if (targetModal) {
                    targetModal.classList.add('hidden');
                    targetModal.setAttribute('aria-hidden', true);
                }
            });
        });
    });
</script>