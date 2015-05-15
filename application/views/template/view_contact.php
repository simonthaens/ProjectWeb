<div class="container">


<h1>Contact us</h1>
<p>You can contact us by e-mail at info@tedxuhasselt.eu or by filling out the form below.</p>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_BE/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php


$inputName = '';
$inputEmail = '';
$inputMessage = '';

$nameError = '';
$emailError = '';
$messageError = '';


if(!empty($_POST['submitted'])){
//if submitted, then validate

$inputName = trim($_POST['name']);
$inputEmail = trim($_POST['name']);
$inputMessage = trim($_POST['name']);

  
  if(!preg_match("/^[a-zA-Z ]*$/",$inputName) || empty($inputName)){
    $nameError = "required field";
    
  }

  if(!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
  $emailError = "Invalid email format"; 
  }

  if(empty($inputMessage)){
    $messageError = "required field";
    
  }





}
?>


<form method="post" action='' novalidate>

    <div class="form-group" >
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputName" placeholder="Enter name" name="name" value='<?php echo htmlentities($inputName)?>'>
        <span class='error'> <?php echo $nameError ?> </span>
         
    </div>

    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email" >
        <span class='error'> <?php echo $emailError ?> </span>
        
    </div>

    <div class="form-group">
        <label for="inputMessage">Your message</label>
        <textarea class="form-control" id="inputMessage" placeholder="Enter message" name="message" ></textarea>
        <span class='error'> <?php echo $messageError ?> </span>

    </div>
    
    


    <button type="submit" id="submit" value="submit" name="submitted" class="btn btn-success">Send</button>
</form>



<div class="fb-page" data-href="https://www.facebook.com/TEDxUHasselt?fref=ts" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/TEDxUHasselt?fref=ts">
                <a href="https://www.facebook.com/TEDxUHasselt?fref=ts">TEDxUHasselt</a>
            </blockquote>
        </div>
    </div>


</div>