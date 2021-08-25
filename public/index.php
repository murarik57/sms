<?php require '../includes/header.php'; ?>


<?php

    if(isset($_POST['submit'])){
        $client = new Twilio\Rest\Client($sid, $auth_key);
          $number=$_POST['phone_real'];
         $body=$_POST['body'];
        
        $message = $client->messages->create(
              $number, // Text this number
              [
                'from' => $twilio_number, // From a valid Twilio number
                'body' => $body
              ]
            );

echo "<h1>MSG sent</h1>";
        
    }


?>
<div class="w3-panel w3-pale-blue w3-border">
  <h3>Information!</h3>
  <p>
  <ul>
      <li>There is no API providers which gives free sms sending service. I somehow found <strong>Twillio</strong> which allows us to send sms to only mine pre registered number in their account for development purpose. And in order to send sms to any number in this world you have to buy their plans.</li>
      <li>It has <strong>IP based automatic country code with flag selection system. Change your IP with VPN and see you country code and flag changing.And list of 4 favourite country(of my choice) in drop down.</strong></li>
      <li><strong>To see your full number with code just open the console of your browser in dev tools.</strong>Through this model I can build otp system, sms alert system etc.</li>
      <li>I built this project to just show you/recruiters my skill for api integration.</li>
      <li>To test this is working or not you can send any sms to me on my number <strong>7060428144 </strong> and I will tell you the message.</li>
  </ul>
  

  </p>
</div>
<div class="col-sm-6 col-sm-offset-3">




    <form role="form" method="post" name="msg" id="login" onchange="process(event)">
              
        <div class="form-group">
            <label for="email">Phone Number</label>
            <input type="hidden" name="phone_real" id="phone2">
            <input style="font-size: 18pt; height: 40px; width:280px; " id="phone" type="tel" name="phone" required>       
        </div>
        
        <div class="form-group">
            <textarea name="body" id="message" cols="30" rows="5" required class="form-control"></textarea>
        </div>

        <input name="submit" type="submit" class="btn btn-primary btn-block" value="Send Message">
    </form>

</div>


<?php require '../includes/footer.php'; ?>