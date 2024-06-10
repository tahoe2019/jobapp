
<div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row ">


   
    

    <main class="md:w-2/3 lg:w-3/4 w-full py-1 min-h-screen  "> 
        
    

        <?php include(TEMPLATE_FRONT . DS . "category.php"); ?>

 
  

        <div class="p-2 md:p-4 ">       
        

            <!-- content -->
            <div>

                
            <h2 class="text-sm font-bold mb-4 ">Today</h2>

                <?php postsidebar(); ?>

                

            </div>

        </div>
    </main>
    
    <aside class="hidden md:w-3/3 lg:w-1/2 py-10 md:block">
        <div class=" top-12 flex flex-col gap-2 p-2 border rounded-xl">

        <?php include(TEMPLATE_FRONT . DS . "postItemDetail.php");  ?>

    <?php include(TEMPLATE_FRONT . DS . "sidebar.php");  ?>

</aside>

    



</div>