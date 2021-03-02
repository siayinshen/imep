<?php
$page_vars = array(
  "title" => "For Students",
  "modules" => [
    array(
      "name" => "Module 1: Initiating the Conversation",
      "descr" => "This module aims to provide you with some tips and tricks about how to build a rapport with a patients and how to ask the most relevant questions.",
      "attachments" => [
        ["Pre-Session Handout","handout1.pdf"],
        ["Slides","slides1.pdf"],
        ["Zoom Link","https://zoom.us/j/9268316808?pwd=ZHRtSU0zekVEY2c5TkMwaldXWGFtQT09"],
      ]
    ),
  ]
);
?>
<?php require "../header.php" ?>
  <style>
    .content{
      padding: 0.5em 2vw;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }
    .module-root{
      align-self: center;
      background: #fee;
      padding: 0.5em;
      margin: 0.5em;
      border-radius: 0.5em;
      border: 2px solid #855;
      width: 80%;
      line-height:1.2;
      text-align: justify;
    }
    .module-title{
      font-weight: bold;
      font-size: 1.2em;
      line-height: 1.5;
    }
    .module-desc{
      font-size: 1.12em;
    }

    @media (orientation: portrait) {
      .module-root {
        width: 90%;
      }
    }
  </style>
  <div class="content">
    <p>We are currently unable to accept further student registrations for the initial pilot program. We expect to fully open registrations to any interested students around November 2021. Further details on how to register will be provided here.</p>
    <p>If you have been accepted for the pilot program - lessons are expected to commence in February, and will consist of 3 sessions over 3 weeks. The exact dates and times of the sessions will be provided here once they are finalised. We will also upload the session handouts below as we complete them.</p>
<?php
  foreach($page_vars["modules"] as $module){
    echo <<<HRD
    <div class="module-root">
      <div class="module-title">{$module["name"]}</div>
      <div class="module-desc">{$module["descr"]}</div>
HRD;
    foreach($module["attachments"] as $att){
      echo <<<HRD
        <div class="module-attach">
          <a class="clickable" href="/u/{$att[1]}">{$att[0]}</a>
        </div>
HRD;
    }
    echo <<<HRD
    </div>
HRD;
}
?>

  </div>
<?php require "../footer.php" ?>
