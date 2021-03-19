<?php require_once './header.php' ;?>
<body>
<?php
if(isset($_POST['btn_post']))
{
    $tweet = $_POST['post_text'];

    if($tweet == '')
    {
        echo '<script> alert("Post is Empty"); </script>';
        echo '<script> location="./index.php" </script>';
    }
    else
    {
        $date = Date('D-d-Y h:m A');
        $query = "INSERT INTO posts (Post_Text,Posted_Date)values('$tweet',now())";
        $sql = mysqli_query($connect,$query);
    }
}
?>    

<div class="grid-container">

<?php require_once 'left-sidebar.php';?>

<div class="main">
    <a href="./index.php"><p class="page-title">Home</p></a>
    <div class="tweet__box tweet__add">
        <div class="tweet__left">
            <img src="./images/avatar.png" alt="User Profile Pic">
        </div>
        <div class="tweet__body">
            <form action="" method="post" enctype="multipart/form-data">
                <textarea name="post_text" cols="100%" rows="3" placeholder="What's Happening"></textarea>
            <div class="tweet__icons-wrapper">
                <div class="tweet__icons-add">
                    <i class="far fa-image"></i>
                    <i class="fa fa-chart-bar"></i>
                    <i class="far fa-smile"></i>
                    <i class="far fa-calendar-alt"></i>
                </div>
                <button type="submit" class="button__tweet" name="btn_post">Tweet</button>
            </div>
            </form>
        </div>
    </div>

    <?php require_once "tweet.php"; ?>

</div>


<?php
require_once 'right-sidebar.php';
if(isset($_GET['del']))
{
    $del_id = $_GET['del'];
    $del_query = "DELETE FROM posts Where ID = '$del_id'";
    $del_sql = mysqli_query($connect,$del_query);
    if($del_sql)
    {
        header('location: index.php');
    }
}


?>

</body>
</html>