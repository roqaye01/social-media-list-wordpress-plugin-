<!DOCTYPE html>
<html lang="en">
<head>


 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>                                                         
 </head>
 <body>





<?php 

/*
Plugin Name: social media list
Plugin URI: https://github.com/roqaye01/social-media-list-wordpress-plugin-
Description: social media list 
Author: roqayye abarian 
Version: 1.0 
Author URI: https://github.com/roqaye01/


*/


//add_action("init", "add_test_menu");   // all pagese
add_action("admin_menu", "add_test_menu");
add_action("admin_menu",'addmeno' );
function addmeno()
{
    add_menu_page("plugin test page" , "social-media" , "manage_options", __FILE__ , "3");
    add_submenu_page(__FILE__ , "sub meno social-media-list", "edit", "manage_options", "socialmedia", "form");
   
}
?>
<?php
function form(){
  ?>
 
      <section class="panel">
       
          <div class="panel-body">
              <div class=" form">


              <?php
              $con=mysqli_connect("localhost","root","","wpf"); 
              mysqli_query($con,"SET NAMES utf8");
              $socsql=" SELECT * FROM  `social` ";
              $socquery=mysqli_query($con,$socsql);
              if($socquery){
                  $socftch=mysqli_fetch_assoc($socquery);
              ?>
                  <form class="cmxform form-horizontal tasi-form"style="margin: 5% 10%" id="commentForm" method="post" action="#">
                      
                      <div class="form-group ">  
                          <label for="cname" class="control-label col-lg-2">telegram</label>
                          <div class="col-lg-6">
                              <input class=" form-control" id="cname" name="telegram" minlength="2"value=<?php echo $socftch["telegram"] ?> type="url" required />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="curl" class="control-label col-lg-2">twiter </label>
                          <div class="col-lg-6">
                              <input class="form-control " value=<?php echo $socftch["twiter"] ?> type="url" name="twiter" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="curl" class="control-label col-lg-2"> whatsapp </label>
                          <div class="col-lg-6">
                              <input class="form-control " value=<?php echo $socftch["whatsapp"] ?> type="text" name="whatsapp" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="curl" class="control-label col-lg-2"> instagram</label>
                          <div class="col-lg-6">
                              <input class="form-control " value=<?php echo $socftch["instagram"] ?> type="text" name="instagram" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="curl" class="control-label col-lg-2">google </label>
                          <div class="col-lg-6">
                              <input class="form-control " value=<?php echo $socftch["google"] ?> type="text" name="google" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="curl" class="control-label col-lg-2">pinterest </label>
                          <div class="col-lg-6">
                              <input class="form-control " value=<?php echo $socftch["pinterest"] ?> type="text" name="pinterest" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="curl" class="control-label col-lg-2">github </label>
                          <div class="col-lg-6">
                              <input class="form-control " value=<?php echo $socftch["github"] ?> type="text" name="github" />
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-6">
                              
                              <input value="ویرایش" type="submit"class="btn btn-warning"name="upsoc">
                          </div>
                      </div>
                  </form>
              <?php
              }
              ?>
              </div>

          </div>
      </section>
      <?php
      if(isset($_POST["upsoc"]))
      {
        $con=mysqli_connect("localhost","root","","wpf"); 
        mysqli_query($con,"SET NAMES utf8");
        
          $sql="UPDATE `social` SET `telegram`='".$_POST['telegram']."',`twiter`='".$_POST['twiter']."',`whatsapp`='".$_POST['whatsapp']."',`instagram`='".$_POST['instagram']."',`google`='".$_POST['google']."',`pinterest`='".$_POST['pinterest']."',`github`='".$_POST['github']."' ";
         //$ssql="UPDATE `social` SET `telegram`='".$_POST['telegram']."',`twiter`=[value-2],`whatsapp`=[value-3],`instagram`=[value-4],`google`=[value-5],`pinterest`=[value-6],`github`=[value-7] WHERE 1";

        $result=mysqli_query($con,$sql);
        
      }
}
?>

<?php
function add_test_menu()
{
?>
<?php
        $con=mysqli_connect("localhost","root","","wpf"); 
        mysqli_query($con,"SET NAMES utf8");
        $socsql=" SELECT * FROM  `social` ";
        $socquery=mysqli_query($con,$socsql);
        if($socquery){
            $socfetch=mysqli_fetch_assoc( $socquery);
 ?>
        <div class="main_block" style="margin:15% 40% ;font-size:19px;float: inherit;">
                <a href="<?php echo $socfetch["telegram"] ?>"type="text" target="_blank"class="fa fa-telegram"class="item"style="color:#3498db" >&nbsp;Telegram</a>
                <br>
                <a href="<?php echo $socfetch["twiter"] ?>" target="_blank"class="fa fa-twitter"class="item"style="color:#2ecc71">&nbsp; twiter</a>
                <br>
                <a href="<?php echo $socfetch["whatsapp"] ?>"target="_blank" class="fa fa-whatsapp"class="item"style="color:red">&nbsp; whatsapp</span></a>
                <br>
                <a href="<?php echo $socfetch["instagram"] ?>"target="_blank"class="fa fa-instagram" class="item"style="color:#2ekc71">&nbsp; instagram</a>
                <br>
                <a href="<?php echo $socfetch["google"] ?>" target="_blank"class="fa fa-google"class="item"style="color:white">&nbsp; google</a>
                <br>
                <a href="<?php echo $socfetch["pinterest"] ?>"target="_blank"class="fa fa-pinterest" class="item"style="color:#2ekc71">&nbsp; pinterest</a>
                <br>
                <a href="<?php echo $socfetch["github"] ?>" target="_blank"class="fa fa-github"class="item"style="color:white">&nbsp; Github</a>
          
             
             
               
    </div>
    <?php
        }
    }
    ?>

<?php  ?>
<style>
    .main_block{
        background-color:#000000;
        float: left;
        padding: 30px; 
        margin:500px;
      
        position: fixed;
        z-index: 1000; 
        border-radius: 2px;

    }
</style>




    
</body>
</html>
  