<?php include('headBootstrap.php');?>

<form id="contactform">
	<div class="input-group mb-3">
  <div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">..</span>
  </div>
  <input type="text" class="form-control" placeholder="Full Name" aria-label="Name" aria-describedby="basic-addon1">
</div>
	<div class="input-group mb-3">
  <div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"> @ </span>
  </div>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">&#9993;</span>
  </div>
  <input type="text" class="form-control" placeholder="E-Mail" aria-label="Mail" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">&#9990;</span>
  </div>
  <input type="text" class="form-control" placeholder="Phone Number" aria-label="Phone" aria-describedby="basic-addon1">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Message</span>
  </div>
  <textarea class="form-control" aria-label="textarea"></textarea>
</div>
	<button type="submit" class="btn btn-info" id="submit">Send</button>
</form>

<?php include('footer.php');?>