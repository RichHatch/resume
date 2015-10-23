<h2>Profile</h2>
<p class="lead">I&#039;m a software developer</p>

<hr />

<div class="row">
	<div class="col-md-4">
		<h3>About me</h3>
		<p>
			<?= $profile->biography; ?>
		</p>
	</div>
	<div class="col-md-4 text-center">
		<img src="<?= VIEW_PATH; ?>images/dickhatch.jpg" alt="<?= $profile->first_name . ' ' . $profile->last_name; ?>" width="246" height="246" />
	</div>
	<div class="col-md-4">
		<h3>Details</h3>
		<p>
			<strong>Name:</strong><br />
			<?= $profile->full_name; ?><br />
			<strong>Age:</strong><br />
			<?= $profile->age; ?> years<br />
			<strong>Location:</strong><br />
			<?= $profile->current_location->city; ?>, <?= $profile->current_location->country; ?>, <?= $profile->current_location->planet; ?>
		</p>
		
		<a href="http://twitter.com/THEdickhatch" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @THEdickhatch</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</div>
</div>
