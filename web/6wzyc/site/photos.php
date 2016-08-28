<?php
    require '_layout.php';
    
    function renderBody(){
?>

<div class="page-title">
    <h1>Congress Photos</h1>
</div>


	<section>   
	<div class="container"> 
		<p>All images have been seperated by the day on which they were taken</p>
		<div id="image-menu">
			<div data-bind="foreach: menuItems">
				<a class="btn btn-lg" data-bind="text: displayName, click: onSelected, css: { 'btn-default': !isSelected(), 'btn-success': isSelected()}"></a>
			</div>

		</div>
	</div>
	</section>

    <section>
    <div id="image-gallery">
    </div>
    </section>

<?php
        renderFooter();
        renderScripts(
                "lodash.min.js",
                "knockout-3.1.0.js",
                "6WZYC/allImages.js",
                "6WZYC/photos.js");
    }
    
?>