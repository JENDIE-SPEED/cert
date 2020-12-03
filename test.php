
        <?php 
        $conn=New mysqli('localhost','root','','test');
        $resultS=$conn->query("SELECT serial FROM install");


        ?>
        
        <select id="technician" name="install" >
          

           <?php
           while($rows=$resultS->fetch_assoc()){

            $technician = $rows['technician'];
            echo "<option value='$technician'>$technician</option>";
           } 


           ?>
         
        </select>