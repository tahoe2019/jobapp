<?php require_once("../Resources/config.php"); ?>

<!DOCTYPE html>
<html lang="en">




    <head>
       <link rel="icon" type="https://lh3.googleusercontent.com/a/ACg8ocIi8x31XAmDik09iAwbIXDRP5F-YuSATBbm1nj2g-nAdfI=s360-c-no" href="image/x-icon">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Abdifatah Portfolio</title>
        <link rel="stylesheet" href="assets/css/tailwind.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> 
    </head>



    



    <body class="font-body">

        <!-- home section -->
        <section class="bg-white py-4 md:mb-4 pb-4">

            <div class="container max-w-screen-xl mx-auto px-4 ">
                
                <nav class="flex-wrap lg:flex items-center " x-data="{navbarOpen:false}">
                    <div class="flex items-center  lg:mb-0">
                        <img class="w-16 h-16 rounded-full" src="https://lh3.googleusercontent.com/a/ACg8ocIi8x31XAmDik09iAwbIXDRP5F-YuSATBbm1nj2g-nAdfI=s360-c-no" alt="Logo">

                        <button class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center border border-blue-500 text-blue-500 rounded-md" @click="navbarOpen = !navbarOpen">
                            <i data-feather="menu"></i>
                        </button>
                    </div>

                    <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-14" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                        <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="#">Home</a>
                        </li>
                        <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="#">Company</a>
                        </li>
                        <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="#">Find Your Career</a>
                        </li>
                        <li class="font-semibold text-gray-900 hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                           <?php if(empty($_SESSION['username'])){

                                echo "";

                           }elseif(isset($_SESSION['username'])){

                            echo $_SESSION['username'];

                            echo '&nbsp;&nbsp;&nbsp;<button  data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="px-4 py-4 bg-blue-500 text-white font-normal text-sm rounded-xl hover:bg-blue-700 transition ease-in-out duration-500 mb-1 md:mb-0">Dashboard</button>';



                           }
                           ?>
                           
                        </li>
                        
                    </ul>



                    <div class="lg:flex flex-col md:flex-row md:items-center text-center md:space-x-6" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                    
                    
                       
                        <?php 

                        
                        
                        if(empty($_SESSION['username'])){
                            echo '<button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" href="#" class="px-6 py-4 bg-blue-500 text-white font-semibold text-sm rounded-xl hover:bg-blue-700 transition ease-in-out duration-500 mb-5 md:mb-0">seeking for job</button>';
                            
                        }elseif(isset($_SESSION['username'])){

                            echo '<button  data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="px-6 py-4 bg-blue-500 text-white font-semibold text-sm rounded-xl hover:bg-blue-700 transition ease-in-out duration-500 mb-5 md:mb-0">logout</button>';

                           


                        }

                          
                        
                        ?>

                



                          <div>
                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="px-6 py-4 border-2 border-blue-500 text-blue-500 font-semibold text-sm rounded-xl hover:bg-blue-700 hover:text-white transition ease-linear duration-500">Post a job</button>
                          </div>
                    </div>
                </nav>

                <div class="flex flex-col lg:flex-row justify-between space-x-20 ">
                    <div class="text-center lg:text-left mt-40">
                        <h1 class="font-semibold text-gray-900 text-3xl md:text-5xl leading-normal mb-6">Abdifatah Sulub<br> This web is for <br>Demo & portfolio</h1>

                        <?php include(TEMPLATE_FRONT . DS . "searchbox.php"); ?>
                    </div>

                    <div class="mt-24">
                        <img class="rounded-full shadow-xl transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-none duration-300" src="https://www.shutterstock.com/image-photo/group-smiling-people-different-jobs-600nw-128885864.jpg" alt="Image">
                    </div>
                </div>

            </div> <!-- container.// -->


            


    


        </section>

</br>






<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to logout ?</h3>
                <button id="myButton" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Yes, I'm sure
                </button>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
        </div>
    </div>
</div>


<!---- here is the job post section ---->










<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "logout.php";
    };
</script>





        