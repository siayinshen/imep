<?php
  require "../../config.php";
  $user_grants = [];
  if(isset($_COOKIE["Ucam-WebAuth-Session-S"])){
    $user = db_pack(explode("!",$_COOKIE["Ucam-WebAuth-Session-S"])[7]);
    $user_grants = mysqli_run_query($db_creds,"SELECT * FROM actors WHERE username='$user';");
  }
  $page_vars = array(
    "title" => "Actor Information",
  );
  require "../../header.php";
  if(count($user_grants)===0){
    echo "<div class='content'>You are not in the actors group.</div>";
    require "../../footer.php";
    exit();
  }
  $user_grants = $user_grants[0];
?>
<style>

</style>
<div class="content">
  <div class="em1 content-apart">
    <span>Welcome back <?php echo db_unpack($user_grants["name"]); ?></span>
    <a href="/logout">Logout</span></a>
  </div>
  <div class="content-between">
<?php
if($user_grants["trained"]==0){
  //$user_grants["certified"]="0";
  echo <<<HRD
    <div>According to our records, you have not yet completed your training.</div>
HRD;
}else{
  echo <<<HRD
    <div>You have completed your training with us.</div>
HRD;
}
echo "<br/>";
if($user_grants["certified"]==1){
  echo <<<HRD
    <div>You are eligible for a certificate. A hard copy of your certificate has been sent to your pigeonhole at the Sherwood Room. A copy of your certificate is available for download <a href="/volunteers/actors/certificate">here<a>.</div>
HRD;
}
?>

    <div class="infocard">

    </div>
  </div>
</div>
<?php require "../../footer.php" ?>
