<?php
$page_vars = array(
  "title" => "Home",
);
?>
<?php require "./header.php" ?>
  <style>
    .content{
      padding: 0.5em 2vw;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }
    .interest-form{
      align-self: center;
      background: #fee;
      padding: 0.5em;
      margin: 0.5em;
      width: max-content;
      border-radius: 0.5em;
      border: 2px solid #855;
    }
    .interest-input{
      width: 20vw;
    }
    .interest-button{
      width: 12.5vw;
    }

    @media (orientation: portrait) {
      .interest-form {
        float: center;
        width: min-content;
        text-align: center;
      }
      .interest-input{
        width: 50vw;
      }
      .interest-button{
        width: 52.5vw;
      }
    }
  </style>
  <div class="content">
    <p>Founded in 2020, we are a student-run organisation that aims to train doctors from all over the world in the art of clinical communication. We feel that there is more to history taking than just asking pro forma questions, as we believe that the importance of the doctor-patient relationship is often overlooked in clinical teaching. We believe that by promoting a healthy two-way sharing of information, not only can doctors find out relevant clinical information in a more timely manner, but that patients and their relatives can also be better satisfied by the level of care that they receive.</p>
    <p>In keeping with this vision, we hope to offer doctors at all stages of their clinical course training in the finer nuances of clinical communication. We hope to be able to trial a limited 3 session course loosely based on the Cambridge CCS curriculum by February or March 2021, and then to incrementally expand the scope over which we can offer these services over the course of the next few years.</p>
    <p>As this is a rapidly evolving space, feel free to sign up for our general newsletter to be kept informed of any latest updates:</p>
    <form class="interest-form" method="POST" action="https://lists.srcf.net/mailman/subscribe/ciccs-interest" target="_blank" >
      <input class="interest-input input shadow" required name="fullname" type="text" placeholder="Your name..."/>
      <input class="interest-input input shadow" required name="email" type="email" placeholder="Your email..."/>
      <input name="digest" type="hidden" value="1"/>
      <input class="interest-button button responsive" type="submit" value="Subscribe" />
    </form>
  </div>
<?php require "./footer.php" ?>
