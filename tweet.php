<?php
$query__data = "SELECT * FROM posts ORDER BY ID Desc";
$data__run = mysqli_query($connect,$query__data);
$data_rows = mysqli_num_rows($data__run);
while($data_fetch = mysqli_fetch_assoc($data__run))
{
    $posts = $data_fetch['Post_Text'];
    $date = $data_fetch['Posted_Date'];
    ?>

<div class="tweet__box">
    <div class="tweet__left">
        <img src="./images/avatar.png" alt="Profile Pic">
    </div>
    <div class="tweet__body">
        <div class="tweet__header">
            <p class="tweet_name">M Owais <i class="fa fa-circle-check"></i></p>
            <p class="tweet__username">@mowais28</p>
            <p class="tweet__date"><?php echo $date = date ('M d');?></p>
        </div>

        <p class="tweet__text"><?php echo $posts ;?></p>

        <div class="tweet__icons">
            <a href=""><i class="far fa-comment"></i></a>
            <a href=""><i class="fa fa-reply"></i></a>
            <a href=""><i class="far fa-heart"></i></a>
            <a href=""><i class="fa fa-upload"></i></a>
            <a href=""><i class="far fa-chart-bar"></i></a>
        </div>
    </div>

    <div class="tweet__del">
        <div class="dropdown">
            <button class="dropbtn"><span class="fa fa-ellipsis-h"></span></button>
            <div class="dropdown-content">
                <a href="index.php?del=<?php echo $data_fetch['ID'];?>"><i class="far fa-trash-alt"></i> <span>Delete</span></a>
            </div>
        </div>
    </div>
</div>


<?Php
}
?>