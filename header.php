<?php
$site_vars = array(
  "shared_title" => "Cambridge International CCS",
  "menu" => [
    ["students","For Students"],
    ["volunteers","For Volunteers"],
    ["universities", "For Universities"]
  ]
);

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?php echo "{$site_vars['shared_title']} | {$page_vars['title']}";?></title>
<style>
@font-face {
    font-family: "D-DIN";
    src: url("/fonts/D-DIN.woff2") format("woff2"),
         url("/fonts/D-DIN.woff") format("woff"),
         url("/fonts/D-DIN.ttf") format("truetype"),
         url("/fonts/D-DIN.otf") format("opentype");
    font-style: normal;
    font-weight: 400;
}
@font-face {
    font-family: "D-DIN";
    src: url("/fonts/D-DIN-Bold.woff2") format("woff2"),
         url("/fonts/D-DIN-Bold.woff") format("woff"),
         url("/fonts/D-DIN-Bold.ttf") format("truetype"),
         url("/fonts/D-DIN-Bold.otf") format("opentype");
    font-style: normal;
    font-weight: 700;
}
@font-face {
    font-family: "D-DIN";
    src: url("/fonts/D-DIN-Italic.woff2") format("woff2"),
         url("/fonts/D-DIN-Italic.woff") format("woff"),
         url("/fonts/D-DIN-Italic.ttf") format("truetype"),
         url("/fonts/D-DIN-Italic.otf") format("opentype");
    font-style: italic;
    font-weight: 400;
}
  html,body{
    font-family: D-DIN, 'Helvetica', sans-serif;
    padding: 0;
    margin: 0;
    font-size: max(10px, min(24px, calc(0.8vh + 1.07vw)));
  }
  a{
    text-decoration: inherit;
    color: inherit;
    font-weight: bold;
  }
  .header,.footer,.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Old versions of Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none;
  }
  .button, .interactive, .clickable{
    cursor: pointer;
  }
  .interactive:hover{
    text-shadow: 0 0 4px #888;
  }
  .clickable{
    color: #66e !important;
  }
  .clickable:hover{
    text-shadow: 0 0 0.05em #66e;
  }
  .em1{
    font-size: 1.4em;
    font-weight: bold;
  }
  .em2{
    font-size: 1.2em;
    font-weight: bold;
  }
  .sm1{
    font-size: 0.9em;
  }
  .sm2{
    font-size: 0.8em;
  }

  .body-box{
    display: flex;
    flex-grow: grow;
    flex-direction: column;
    min-height: 100vh;
  }
  .header{
    background: linear-gradient(#fffefe,#fee);
    padding: 1vh 2vw;
    height: 6em;
    display: flex;
    justify-content: flex-end;
    flex-direction: column;
    font-weight: bold;
  }
  .header-title{
    font-size: 2em;
    padding: 1vh 0;
  }
  .input, .button {
    font-family: inherit;
    border: 2px solid #855;
    border-radius: 0.5em;
    font-size: 1em;
    padding: 0.4em;
    margin: 0.25em;
  }
  .button{
    color: #855;
    background: #ebb;
    font-size: 1em;
  }
  .input:disabled, .button:disabled{
    color: #777 !important;
    border: 2px solid #777 !important;
    background: #eee !important;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
    cursor: revert !important;
  }
  .button:hover{
    background: #daa;
  }
  .button:hover,.shadow:hover{
    -webkit-box-shadow: 0 0 2px 1px #855;
    -moz-box-shadow: 0 0 2px 1px #855;
    box-shadow: 0 0 2px 1px #855;
  }
  .menu{
    font-size: 1.5em;
    font-weight: normal;
  }
  .menu-item{
    transition: border 0.4s;
    padding: 0.75vh 1vw;
    padding-left: 0;
    margin-right: 1vw;
    border-bottom: 2px solid #fee;
    font-weight: normal;
  }
  .menu-item:hover{
    border-bottom: 2px solid #855;
  }
  .content{
    padding: 0.5em 2vw;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }
  .content-apart{
    display: flex;
    justify-content: space-between;
    width: 100%;
  }
  @media (orientation: portrait) {
    body {
      font-size:min(24px, calc(1.5vh + 1.2vw));
    }
    .header{
      text-align: center;
      height: max-content;
    }
    .menu{
      font-size: min(5vw, 1em);
    }
    .menu-item{
      white-space: nowrap;
      width: max-content;
      padding-left: 2vw;
      margin: 0;
    }
  }
</style>
</head>
<body>
 <div class="body-box">
  <div class="header">
    <span class="header-title"><a href="/">Cambridge International Clinical Communication Society</a></span>
    <div class="menu">
<?php
  foreach($site_vars["menu"] as $menu){
    echo <<<HRD
<a class="menu-item" href="/{$menu[0]}">{$menu[1]}</a>
HRD;
  };
// for($i=0;$i<100;$i++){
//  echo "<p>Paragraph $i</p>";
// };
?>
    </div>
  </div>
