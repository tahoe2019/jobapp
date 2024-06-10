<?php 




function set_message($msg){

if(!empty($msg)) {

$_SESSION['message'] = $msg;

} else {

$msg = "";


    }


}


function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }



}





function redirect($location){
header("Location: $location");
}



function last_id(){

global $connection;

return mysqli_insert_id($connection);


}




function query($sql){

global $connection;

return mysqli_query($connection,$sql);

}


function confirm($result){

global $connection;

if(!$result){

die("Query FAILED" . mysqli_error($connection));

}
}




function escape_string($string){

global $connection;

return mysqli_real_escape_string($connection,$string);

}

function fetch_array($result){

return mysqli_fetch_array($result);

}


//transaction of lacag la bixid







//postsidebar

function postsidebar(){



$query = query("SELECT *  FROM job_post_tbl ORDER BY  published_posted DESC LIMIT 9 ; ");
confirm($query);

while($row = fetch_array($query)){    
    

    $id = encryptor('encrypt', $row['jobs_id']);

$postsidebar = <<<DELIMETER



      <ul href="index.php?id=$id" class="space-y-10 rounded-lg shadow border-solid border border-blue-600 mb-8 transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-none duration-300">
                    <li class="flex items-center space-x-4 ">
                        <img src="{$row['post_image']}" alt="Product 1"
                            class="w-16 h-16 rounded-full p-2">
                        <div>
                        <a href="index.php?id=$id">
                            <h3 href="#" class="text-base font-semibold">{$row['post_title']}</h3>
                            <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </a>
                <div class=" gap-x-2 flex flex-row items-center">
                  <span href="#"
                    class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row justify-between items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="blue" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>

                    <span class="ml-1">{$row['location_nm']}</span></span>
                

                 
                  <span href="#"
                    class="py-1 ps-8 text-sm font-regular text-gray-900 mr-1 flex flex-row justify-between items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="blue" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                    <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                    </svg>
                    <span class="ml-1">{$row['company_nm']}</span></span>


                    <span href="#"
                    class="py-1 ps-8 text-sm font-regular text-gray-900 mr-1 flex flex-row justify-between items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="blue" class="w-6 h-6">
                    <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                    <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-1">{$row['published_posted']}</span></span>

                    <span href="#"
                    class="py-1 ps-8 text-sm font-regular text-gray-900 mr-1 flex flex-row justify-between items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="blue" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z" clip-rule="evenodd" />
                    </svg>

                    <span class="ml-1">{$row['job_type']}</span></span>





                 </div>

                 </br>



                        </div>

                    </li>
                    
                </ul>



 
   
      
        
       
    
DELIMETER;

echo $postsidebar;
    


}

}






//postsidebar

function gridbarpost(){



    $query = query("SELECT *  FROM job_post_tbl ORDER BY  published_posted DESC LIMIT 9 ; ");
    confirm($query);
    
    while($row = fetch_array($query)){    
        
    
    $gridbarpost = <<<DELIMETER
    <div class="rounded overflow-hidden shadow-lg transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-none duration-300">
    <a href="#"></a>
    <div class="relative">
        <a href="#">
            <img class="w-full h-48 object-contain "
                src="{$row['post_image']}"
                alt="Company">
            <div
                class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-10">
            </div>
        </a>
        <a href="#!">
            <div
                class="absolute bottom-0 left-0 bg-indigo-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                {$row['company_nm']}
            </div>
        </a>

        <a href="!#">
            <div
                class="text-sm absolute top-0 right-0 bg-indigo-600 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                <span class="font-bold"></span>
                <small>{$row['location_nm']}</small>
            </div>
        </a>

        
    </div>
    <div class="px-6 py-4">

        <a href="#"
            class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">{$row['post_title']}</a>
        <p class="text-gray-500 text-sm line-clamp-1">
        {$row['post_info']}
        </p>
    </div>
    <div class="px-6 py-4 flex flex-row items-center">
        <span href="#" class="py-1 text-sm font-regular text-black-900 mr-1 flex flex-row items-center">
            <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
    c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
    c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                    </g>
                </g>
            </svg>
            <span class="ml-1">{$row['published_posted']}</span></span>
    </div>          
    </div>
    
     
       
          
            
           
        
    DELIMETER;
    
    echo $gridbarpost;
        
    
    
    }


  



    
    }



    //cat_grid

function cat_grid(){



     
           
        
   
    
        
    
    
    }


  



    
   



    function login(){



        if(isset($_POST['submit'])){
        
        $username = escape_string($_POST['email']);
        $password = escape_string($_POST['password']);
        
        $query = query("SELECT * FROM users_tbl WHERE user_Name = '{$username}' AND password = '{$password }' ");
        confirm($query);
        $present = mysqli_num_rows($query);
        
        if(mysqli_num_rows($query) == 0) {

            echo '
            <script>

  var txt;
  if (confirm("wrong email or password")) {
    
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = ;

</script>';
        
       

        
       
        
        
        } else {
        
        confirm($query);
        $row=mysqli_fetch_array($query);
        $_SESSION['ID'] = $row['user_ID'];
        $_SESSION['type'] = $row['type'];
        
        
        $_SESSION['username'] = $username;
        
        redirect("index.php?id=1");
        
        
        
        
        
        }
        
        }
        
        }
        

        function postjobfuntion(){



            if(isset($_POST['add_payment'])){
              //$payment_name = escape_string($_POST['payment_name']);
              /*$image_icon = escape_string($_POST['payment_image']);*/
              
            
              
              $postt_title = escape_string($_POST['post_title']);  
              $company_name = escape_string($_POST['company_name']);

              
              $location = escape_string($_POST['location']);  
              $job_type = escape_string($_POST['job_type']);

              
              $published_post = escape_string($_POST['published_post']);  
              $post_info = escape_string($_POST['post_info']);

              $post_overview = escape_string($_POST['post_overview']);  
              $post_benifits = escape_string($_POST['post_benifits']);


              $post_image = escape_string($_POST['post_image']);  
              

              //$date = escape_string($_POST['date']);   
              //$koonto = escape_string($_POST['koonto']);  
              $ID = $_SESSION['ID'];


              $randomNumber = rand();
                          print_r($randomNumber);
                          print_r("\n");
                     
                          // Generating a random number in a
                          // Specified range.
                          $randomNumber = rand(6000,150000);



              $sql = query(" INSERT INTO lacag_dhigasho_table (user_ID,payment_name, phone_user, deposit_amount, deposit_date,image_icon,transcation_id,approve)
              VALUES ('{$randomNumber}','{$postt_title}','{$company_name}','{$location}','{$job_type}','{$published_post}','{$post_info}','{$post_overview}','{$post_benifits}','{$post_image}')");

              confirm($sql);

            }

            }


    function modal(){


        
echo '


<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
        </div>
    </div>
</div>';



    }

















































?>
