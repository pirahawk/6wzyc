<?php
require '_layout.php';

function renderCustomStyle(){
    renderStyleSheets("css/photos.css");
}

function renderBody(){
    ?>

  <div class="page-title" id="top">
    <h1>Congress Photos</h1>
  </div>


  <section class="grey">
    <div class="container">
      <div id="image-menu" data-bind="foreach: menuItems">
        <a class="btn btn-lg" data-bind="text: displayName, click: onSelected, css: { 'btn-default': !isSelected(), 'btn-success': isSelected()}"></a>
      </div>
    </div>
  </section>

  <section class="black">
    <div class="container" id="image-gallery">

      <div id="thumb-gallery" data-bind="css:shouldShowGallery">

        <nav aria-label="...">
          <ul class="pager">
            <li><a href="#" data-bind="visible: canShowPrevious, click: showPreviousPage">Prev</a></li>
            <li><a href="#" data-bind="visible: canShowNext, click: showNextPage">Next</a></li>
          </ul>
        </nav>

        <div data-bind="foreach: thumbNails()">
          <div class="thumbnail-container" data-bind="attr: {id: $data.id}">
            <img class="photo-thumbnail" data-bind="attr: { src: $data.thumbnail}, click: function(){$root.onThumbnailSelected($data)}"></img>
          </div>
        </div>

        <nav aria-label="...">
          <ul class="pager">
            <li><a href="#" data-bind="visible: canShowPrevious, click: showPreviousPage">Prev</a></li>
            <li><a href="#" data-bind="visible: canShowNext, click: showNextPage">Next</a></li>
          </ul>
        </nav>

      </div>




      <div id="preview-gallery" data-bind="css:shouldShowPreview">
        <div data-bind="with: previewImage">
          <p>
            <a class="btn btn-lg btn-primary" data-bind="attr: {href: full}" target="_blank">Download (high resolution)</a>
            <a class="btn btn-lg btn-danger" data-bind="click:$root.closePreview">Close</a>
          </p>
          <img data-bind="attr: {src: preview}"></img>
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