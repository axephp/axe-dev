<!-- @css(), @cssFromPublic(), @js(), @jsFromPublic(), @img(), @section(viewFile), @include() -->

<!-- @ajax('route/to/request', data, 1000): -->
	<!-- javascript codes -->
<!-- @endajax -->

<section class="main">
	<div class="container">
		<div class="maincontent">
			<h1>Congratulations! </h1><h2>You are now up and ready to slash.</h2>

			<p> <?= User\Models\Welcome::quote() ?> </p>
			
		</div>
	</div>
	<div class="clear"></div>
</section>
