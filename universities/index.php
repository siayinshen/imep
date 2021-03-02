<?php
$page_vars = array(
  "title" => "For Universities",
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
    .interest-form{
      display: flex;
      flex-wrap: wrap;
      align-self: center;
      justify-content: space-between;
      background: #fee;
      padding: 0 1em;
      margin: 0.5em;
      padding-top: 1em;
      width: min-content;
      border-radius: 0.5em;
      border: 2px solid #855;
    }
    .interest-input,.interest-textarea,.interest-button{
      margin-top: 0em;
      margin-bottom: 1em;
    }
    .interest-input,.interest-textarea{
      width: 50vw;
    }
    .interest-textarea{
      max-height: 10em;
      min-height: 5em;
      max-width:50vw;
      min-width:50vw;
    }
    .interest-button{
      width: 25vw;
    }

    @media (orientation: portrait) {
      .interest-form {
        float: center;
        width: min-content;
        text-align: center;
      }
      .interest-input,.interest-textarea{
        width: 80vw;
        max-width: 80vw;
        min-width: 80vw;
      }
      .interest-button{
        width: 40vw;
      }
    }

  </style>
  <div class="content">
    <p>We are constantly looking forward to broaden our horizons, so if you represent a university and are interested in partnering with us, feel free to email us directly by clicking <a href="mailto:cambridgeinternationalccs@gmail.com"><b>here</b></a> or contact us using the form below. We look forward to working with you!</p>
    <form method="post" action="/submit.php" class="interest-form">
      <input required class="input interest-input" type="text" name="tuiow34p" placeholder="Your name..."/>
      <input required class="input interest-input" type="text" name="dfsjk7kl" placeholder="Your organisation..." />
      <input required class="input interest-input" type="email" name="tdfsde4p" placeholder="Your email..." />
      <textarea required class="input interest-textarea" name="sdh54rqf" placeholder="Your message..."></textarea>
      <input disabled class="button interest-button" type="submit" value="Submit" />
      <input disabled class="button interest-button" type="reset" value="Clear" />
    </form>
  </div>
<?php require "../footer.php" ?>
