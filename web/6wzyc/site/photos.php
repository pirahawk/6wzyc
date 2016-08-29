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
    <div class="container" id="image-gallery">
      <p data-bind="text: debugInfo"></p>

      <div id="thumb-gallery" data-bind="css:shouldShowGallery">

        <nav aria-label="...">
          <ul class="pager">
            <li><a href="#" data-bind="visible: canShowPrevious, click: showPreviousPage">Previous</a></li>
            <li><a href="#" data-bind="visible: canShowNext, click: showNextPage">Next</a></li>
          </ul>
        </nav>

        <div data-bind="foreach: thumbNails()">
          <div class="thumbnail-container" data-bind="attr: {id: $data.id}">
            <img class="photo-thumbnail" data-bind="attr: { src: $data.thumbnail}, click: function(){$root.onThumbnailSelected($data)}"></img>
          </div>
        </div>
      </div>




      <div id="preview-gallery" data-bind="css:shouldShowPreview">
        <div data-bind="with: previewImage">
          <img data-bind="attr: {src: preview}"></img>
          
          <a class="btn btn-lg btn-primary" data-bind="attr: {href: full}" target="_blank">Download (high resolution)</a>
          <a class="btn btn-lg btn-danger" data-bind="click:$root.closePreview">Close</a>
        </div>
      </div>


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