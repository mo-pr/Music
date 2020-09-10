<?php include('headBootstrap.php');?>

<form id="contactform" method="post" action="send_form_email.php">
	<div class="input-group mb-3">
  <div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">..</span>
  </div>
  <input name="full_name" type="text" class="form-control" placeholder="Full Name" aria-label="Name" aria-describedby="basic-addon1" required>
</div>
	<div class="input-group mb-3">
  <div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> @ </span>
  </div>
  <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">&#9993;</span>
  </div>
  <input name="email" type="text" class="form-control" placeholder="E-Mail" aria-label="Mail" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">&#9990;</span>
  </div>
  <input name="telephone" type="text" class="form-control" placeholder="Phone Number" aria-label="Phone" aria-describedby="basic-addon1" required>
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Message</span>
  </div>
  <textarea name="message" class="form-control" aria-label="textarea" required></textarea>
</div>
	<input type="submit" class="btn btn-info" id="submit" href="contact.php"><a href="contact.php"></a>
</form>

<?php include('footer.php');?>