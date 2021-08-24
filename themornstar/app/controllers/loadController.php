<?php

class  LoadController extends Controller
{
    public function index()
    { 
        if(isset($_POST["group_no"])){
            $group_number = filter_var($_POST["group_no"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
                $items_per_group = 5 ; 
                $uniqueMasterAudience = "Public" ;
                $position = $group_number * $items_per_group;
                $db = Database::getInstance()->getConnection();
                $stmt = $db->prepare("SELECT * FROM `uniquemaster` where
                 uniqueMasterAudience = :uniqueMasterAudience 
                  order by `uniqueMasterId`  LIMIT :position OFFSET  :items_per_group ");
                 $stmt->execute([
                     ":uniqueMasterAudience"=> $uniqueMasterAudience ,
                     ":position"=> $position ,
                     ":items_per_group"=> $items_per_group ,
                 ]);
    
                $Count = $stmt->rowCount();
                if ($Count  > 0){
                    while($data= $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<div style='height:200px;width:100%'>";
                    ?>    <a  title="<?=$data['uniqueMaster']?>" style="color:white;font-size:72px;" href="<?=ROOT?><?=$data['uniqueMaster']?>/">
                        <?=$data['uniqueMaster']?>
                        </a>
                        <?php 
                if($data['uniqueMasterType'] == "Article"){
    
                }      
                ?>

                

                <?php
                echo "</div>";
                    }
        
                }
    
        /*
                function getTotalNumberOfRecordsCount(){
                    $items_per_group = 5 ;
                        $db = Database::getInstance();
                        $stmt = $db::$conn->prepare('SELECT count(*) as `total_count` FROM `uniqueMaster`');
                        $stmt->execute();
                        $Count = $stmt->rowCount(); 
                        if ($Count  > 0){
                            $data=$stmt->fetch(PDO::FETCH_ASSOC) ;
                            $total_groups = ceil($data['total_count']/$items_per_group);
                            return $total_groups;
                        }
                }
        */


        }
        
    }
}