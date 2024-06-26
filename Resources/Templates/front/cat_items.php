

<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">








    <div class="border-b mb-5 flex justify-between text-sm">
        <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">
            
            <a href="#" class="font-semibold inline-block">chose company</a>
        </div>
        <a href="#">See All</a>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

    <?php 
    
    


    $id = $_GET['id'];

    
    $id = encryptor('decrypt',$id);

    

   


    $query1 = query(" SELECT *  FROM job_post_tbl WHERE company_nm = '$id' limit 6");
            confirm($query1);

            while($row = fetch_array($query1)):


?>

        <!-- CARD 1 -->
        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            <a href="#"></a>
            <div class="relative"><a href="#">
                    <img class="h-48 w-96"
                    src="<?php echo $row['post_image']; ?>"
                        alt="">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
                <a href="#!">
                    <div
                        class="text-xs absolute top-0 right-0 bg-blue-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-blue-600 transition duration-500 ease-in-out">
                        <?php echo $row['company_nm']; ?>
                    </div>
                </a>
            </div>
            <div class="px-6 py-4 mb-auto">
                <a href="#"
                    class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2"><?php echo $row['post_title']; ?>
                    </a>
                <p class="text-gray-500 text-sm truncate">
                <?php echo $row['post_info']; ?>
                </p>
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <svg height="13px" width="13px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="ml-1"><?php echo $row['published_posted']; ?></span>
                </span>

                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    <span class="ml-1"><?php echo $row['company_nm']; ?></span>
                </span>
            </div>
            
        </div>

        <?php endwhile; ?>



       
    </div>

 

</div>


   

      