
        <!-- Blog post with featured image -->
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

     <?php

            
            $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


            switch ($actual_link){

               

                case "https://localhost/jobapp/mercy/public/":
                    
                    //bilaw();
                    
                    break;
                

                default:                

                 labad();


            }

     ?>

    

     <?php 

     function bilaw(){

        $currentDate = date('d-m-Y');    
        echo $currentDate;  
    
    
     
            $query = query(" SELECT *  FROM job_post_tbl WHERE published_posted ='$currentDate' limit 1");
            confirm($query); 
            while($row = fetch_array($query)):

            
            ?>

    <div class="max-w-3xl mx-auto">
    
        <!-- Blog post header -->
        <div class="py-4">
        
       
     
            <h1 class="text-3xl font-bold mb-1"><?php echo $row['post_title']; ?></h1>
            <p class="text-blue-500 text-sm ">Published on <?php echo $row['published_posted']; ?></time></p>
        </div>

        <!-- Featured image -->
        <img class="w-48 h-48 rounded-full ml-20 items-center" src="<?php echo $row['post_image']; ?>" alt="Featured image" class="w-full h-auto mb-8">

        <!-- Blog post content -->
        <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
        <?php echo $row['post_profile']; ?>

              
        </div>
        
      </div>
      <div class="place-self-center">
          <button type="button" class=" mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply now</button>

      </div>
    </div>

    <?php endwhile; }?>
    
    <?php 
    
    function labad(){


        $id = $_GET['id'];
        $id = encryptor('decrypt',$id);


        $query1 = query(" SELECT *  FROM job_post_tbl WHERE jobs_id = " . escape_string($id) . " limit 1");
                confirm($query1);

                while($row = fetch_array($query1)):
    
    
    ?>


<div class="max-w-3xl mx-auto">
    
    <!-- Blog post header -->
    <div class="py-4">
    
   
 
        <h1 class="text-3xl font-bold mb-1"><?php echo $row['post_title']; ?></h1>
        <p class="text-blue-500 text-sm ">Published on <?php echo $row['published_posted']; ?></time></p>
    </div>

    <!-- Featured image -->
    <img class="w-48 h-48 rounded-full ml-20 items-center" src="<?php echo $row['post_image']; ?>" alt="Featured image" class="w-full h-auto mb-8">

    <!-- Blog post content -->
    <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
    <?php echo $row['post_profile']; ?>

          
    </div>
    
  </div>
  <div class="place-self-center">
      <button type="button" class=" mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply now</button>

  </div>
</div>


<?php endwhile; }?>


            
    </div>






