<?php 
    require("db.php");

    if (isset($_POST['action']) && $_POST['action'] == 'select') {
        $query = $conn->query("SELECT * FROM categories");
        $output =   '<select id="category" class="form-control">
                    <option value="" disabled selected>--Select catgory--</option>';

        if ($query->num_rows > 0) {

            while ($row = $query->fetch_assoc()){
                $output .= '<option value="'.$row['cat_id'].'">'.$row['cat_title'].'</option>';
            }
        }

        $output .= '
        </select>';

        echo $output;
    }


    if (isset($_POST['catId'])) {
       $id = $_POST['catId'];
       
        $query = $conn->query("SELECT * FROM cat_list WHERE cat_id = $id ORDER BY list_name");
        if ($query->num_rows > 0){
            $data = '<select id="cat_list" class="form-control">
                       <option value="" disabled selected> --Select list--</option>';

            while ($row = $query->fetch_assoc()){
                $data .= '<option value="'.$row['id'].'">'.$row['list_name'].'</option>';
            }

            $data .= '
            </select>';
    
            echo $data;

        }

    }
 
        // $id = $_POST['cat_id'];

        // $query = $conn->query("SELECT * FROM cat_list WHERE id = $id");
        // $cat_list =   '<select id="cat_list" class="form-control">
        //                 <option value="" disabled selected> --Select list--</option>';

        // if ($query->num_rows > 0) {

            
        // }

        
  



?>