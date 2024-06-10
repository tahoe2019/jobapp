

<h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">Choose Your favour company:</h3>
<ul class="grid w-full gap-6 md:grid-cols-3">


<?php $query = query(" SELECT *  FROM  cat limit 6");
                                    confirm($query);

                                    while($row = fetch_array($query)):

                                        $id = encryptor('encrypt', $row['cat_name']);


                                             ?>


    <li>

    <a href="cat_items.php?id=<?php echo $id; ?>">

   

        
       
        <label   for="react-option" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-600 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
            <div class="block">
                <img  src="<?php echo $row['cat_image']; ?>" class="mb-2 w-7 h-7 text-sky-500" fill="currentColor" aria-hidden="true"></img>
                <div class="w-full text-lg font-semibold"><?php echo $row['cat_name']; ?></div>
                <div class="w-full text-sm"><?php echo $row['cat_desc']; ?></div>
            </div>
        </label>
        
        </a>
    </li>

    <?php endwhile; ?>
   
</ul>






        
        

        

    

    

   
   

    

   

	

