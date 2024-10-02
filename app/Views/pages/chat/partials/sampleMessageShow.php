<?php
    $mysession = $_SESSION['user_id'];
    $count = count($data);
    for($i = 0; $i < $count; $i++){
        if($data[$i]['chat_from_id'] == $mysession){
        ?>
            <div id="receiver_msg_container">
                <div id="receiver_msg">
                        <p class="m-0" id="receiver_ptag"><?php echo $data[$i]['chat_message'];?>
                          <br><small><?= date('d M, Y h:ia', strtotime($data[$i]['created_at'])) ?></small>
                        </p>
                </div>
                <div id="receiver_image" style="background-size: 100% 100%; background-image:url('<?php echo "/assets/images/users/".$_SESSION['avatar'];?>')"></div>
            </div>
        <?php
        }else{
        ?><div id="sender_msg_container">
                <div id="sender_image" style="background-size: 100% 100%; background-image:url('<?php echo $image;?>')"></div>
                <div id="sender_msg">
                        <p class="m-0" id="receiver_ptag"><?php echo $data[$i]['chat_message'];?>
                          <br><small><?= date('d M, Y h:ia', strtotime($data[$i]['created_at'])) ?></small>
                        </p>
                </div>
            </div>
        <?php
        }
    }
?>

