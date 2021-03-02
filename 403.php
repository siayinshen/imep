<?php
$page_vars = array(
  "title" => "Forbidden",
);
?>
<?php require "./header.php" ?>
  <style>
    .content{
      padding: 1vh 2vw;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-grow: 1;
    }
    .content-404-header{
      font-weight: bold;
      font-size: 2em;
    }
    .content-404-desc{
      font-size: 1.75em;
      color: #555;
    }
    .content-404-link{
      margin-top: 4vh;
      font-size: 1.75em;
    }
  </style>
  <div class="content noselect">
    <span class="content-404-header">You're not supposed to be here...</span>
    <span class="content-404-desc">ヽ(ಠل͜ಠ)ﾉ</span>
    <span class="content-404-link clickable interactive" onclick='window.history.back()'>Go back?</span>
  </div>
<?php require "./footer.php" ?>
