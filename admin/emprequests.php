
<?php


    if($flg==1&&$act=='update'){
        $permitby=-1;
        if(isset($_SESSION['cempname']) and isset($_SESSION['cempid'])){
         $permitby=$_SESSION['cempid'];
        }
        include_once '../DBConnect.php';
        $database = new dbConnect();

        $db = $database->openConnection();
                    
        $sql = "update vendorgetintouch set status='$status', permittedby='$permitby' where vendorid='$vendorid'";
        $db->exec($sql);

        // create folder for vendor
        $dirname="pg".$vendorid;
        if(!is_dir("../vendor/media/pghouse/".$dirname)) {
            mkdir("../vendor/media/pghouse/".$dirname);
        }


        $setlink="http://localhost/Project/admin/setpassword.php?id=".$vendorid;
        $message_body = "One Time Password Set Link is:<br/><br/>" . $setlink;
        $subject="Set Password";

         require_once '../sendmail.php';
        $result=sendMsg($email,$message_body,$subject);

        echo "<script>alert('Record Updated & mail sent.');</script>";
    }
   
?>
<script type="text/javascript">
</script>

<div class="table-responsive bg-light">
            <form name="form1" action="empdashboard.php?op=requests&act=update" method="post">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Status</th>
                </tr>
                <?php 
                    include_once '../DBConnect.php';
                    
                    include_once '../EncodeDecode.php';

                    $database = new dbConnect();
                    $enc=new EncodeDecode();

                    $db = $database->openConnection();
                    
                    // $sql = "select * from vendorgetintouch where status='Pending'";

                    $sql = "select * from vendorgetintouch";

                    $vendor = $db->query($sql);
                    $result = $vendor->fetchAll(PDO::FETCH_ASSOC);
                    if (!empty($result)) {
                        foreach($result as $row){
                            
                            echo "<tr>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['company']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['type']."</td>";
                            
                            echo "<td><select id='status' name='status'>";

                            echo '<option value="Accepted" '.(($row['status']=='Accepted')?'selected="selected"':"").'>Accept</option>';
                            echo '<option value="Rejected" '.(($row['status']=='Rejected')?'selected="selected"':"").'>Reject</option>';
                            echo '<option value="Pending" '.(($row['status']=='Pending')?'selected="selected"':"").'>Pending</option>';

                            echo "</select></td>";
                            $encemail=$enc->encode($row['email']);
                            echo "<input type=hidden id='email' name='email' value='".$row['email']."'/>";
                            echo "<input type=hidden id='encemail' name='encemail' value='".$encemail."'/>";     

                            echo "<input type=hidden id='vendorid' name='vendorid' value='".$row['vendorid']."'/>";
                            
                            echo "<td><input type='submit' class='btn btn-primary' name='apply' value='Update'></td>";
                            echo "</tr>";
                        }
                    } 
                    $database->closeConnection();

                 ?>

            </table>
        </form>

        </div>


