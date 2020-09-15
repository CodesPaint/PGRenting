
<?php
    if($flg==1&&$act=='reply'){
        $replyby=-1;
        if(isset($_SESSION['cempname']) and isset($_SESSION['cempid'])){
         $replyby=$_SESSION['cempid'];
        }
        date_default_timezone_set('Asia/Kolkata');
        $cdate=date('Y-m-d', strtotime(str_replace('-', '/', date("m/d/Y"))));
        $ctime=date('H:i:s', strtotime("now"));
        $reply=$_POST['reply'];
        $queryid=$_POST['queryid'];

        include_once '../DBConnect.php';
        $database = new dbConnect();

        $db = $database->openConnection();
                    
        $sql = "update query set eid='$replyby',reply='$reply',rdate='$cdate',rtime='$ctime' where qid='$queryid'";
        $db->exec($sql);

        
        $message_body = "<b>Question:</b> " .$query."<br/><br/> <b>Reply: </b> ".$reply;
        $subject="Reply of Your Enquiry";

         require_once '../sendmail.php';
        $result=sendMsg($email,$message_body,$subject);

        echo "<script>alert('Record Updated & mail sent.');</script>";
    }

?>


<div class="table-responsive bg-light">
            <form name="form1" action="empdashboard.php?op=queries&act=reply" method="post">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Query</th>
                    <th>Date</th>
                    <th>Reply</th>
                    <th></th>
                </tr>
                <?php 
                    include_once '../DBConnect.php';
                    
                    $database = new dbConnect();

                    $db = $database->openConnection();
                    
                    $sql = "select * from query";
                    $enquiry = $db->query($sql);
                    $result = $enquiry->fetchAll(PDO::FETCH_ASSOC);
                    if (!empty($result)) {
                        foreach($result as $row){
                            
                            echo "<tr>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['message']."</td>";
                            echo "<td>".$row['qdate']."</td>";
                            echo "<input type=hidden id='email' name='email' value='".$row['email']."'/>";
                            echo "<input type=hidden id='queryid' name='queryid' value='".$row['qid']."'/>";
                            echo "<input type=hidden id='query' name='query' value='".$row['message']."'/>";

                            if($row['reply']==""){
                                echo "<td><textarea rows=3 cols=50 name='reply' id='reply'></textarea></td>";
                                echo "<td><input type='submit' class='btn btn-primary' name='btnreply' value='Reply'/></td>";
                            }else{
                                echo "<td><textarea rows=3 cols=50 name='reply' id='reply'>".$row['reply']."</textarea></td>";
                                echo "<td></td>";
                            }
                            
                            echo "</tr>";
                        }
                    } 
                    $database->closeConnection();

                 ?>

            </table>
        </form>

        </div>


