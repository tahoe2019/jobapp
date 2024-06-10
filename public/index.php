<?php require_once("../Resources/config.php"); ?>



<?php modal(); ?>


<?php include(TEMPLATE_FRONT . DS . "navbar.php"); ?>



<?php include(TEMPLATE_FRONT . DS . "postsidebar.php"); ?> 

<!-- her is the category on the page  -->
<!-- <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-20 ">
    <div class="bg-white shadow-xl rounded-lg p-4 sm:p-6 xl:p-8 stroke-fuchsia-900 ">
        <div class="flex items-center">
        <img class="w-16 md:w-16 lg:w-16 rounded-full p-2" src="https://yt3.googleusercontent.com/ytc/AIf8zZQKCG8w7wVznj9sHhrHge3cKYVuUblDUuOaUp_psQ=s900-c-k-c0x00ffffff-no-rj">
            <div class="flex-shrink-0">
                <span class="text-2xl sm:text-xl leading-none font-bold text-gray-900">Netflix</span>
                <h3 class="text-base font-small text-gray-500">New products this week</h3>
            </div>
            <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                14.6%
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>

    <div class="bg-white shadow-2xl rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
        <img class="w-16 md:w-16 lg:w-16 rounded-full p-2" src="https://yt3.googleusercontent.com/ytc/AIf8zZQKCG8w7wVznj9sHhrHge3cKYVuUblDUuOaUp_psQ=s900-c-k-c0x00ffffff-no-rj">
            <div class="flex-shrink-0">
                <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">2,340</span>
                <h3 class="text-base font-normal text-gray-500">New products this week</h3>
            </div>
            <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                14.6%
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>



    <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">5,355</span>
                <h3 class="text-base font-normal text-gray-500">Visitors this week</h3>
            </div>
            <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                32.9%
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">385</span>
                <h3 class="text-base font-normal text-gray-500">User signups this week</h3>
            </div>
            <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                -2.7%
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>
</div> -->



 <!-- section of post jobs with thier images -->

 


 
<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 ">
<h3 class="text-3xl font-bold mb-1">Latest Organization Jobs</h3>
</br>
    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
    <?php gridbarpost(); ?>
        
    </div>
</div>

    


<?php include(TEMPLATE_FRONT . DS . "popup.php"); ?> 

                 

                    

                    

                    
                </div>

                <div class="flex items-center justify-center">
                    <button class="px-7 py-5 font-semibold bg-gray-100 text-gray-900 rounded-2xl hover:bg-gray-300 hover:text-gray-600 transition ease-in-out duration-500">See More</button>
                </div>

            </div> <!-- container.// -->

        </section>


        <!-- Modal toggle -->







        <?php include(TEMPLATE_FRONT . DS . "login.php"); ?> 

        <?php include(TEMPLATE_FRONT . DS . "postjob.php"); ?> 






<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>