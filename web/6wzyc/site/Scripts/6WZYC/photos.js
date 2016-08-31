var WZYC = WZYC || {};
(function () {
    "use strict";
    if (WZYC.Images === undefined) {
        return;
    }
    var BLOB_PATH = 'http://6wzyc.blob.core.windows.net/6wzyc-photos/';

    var Image = function (id, label) {
        this.id = id;
        this.label = label;
    }

    var ImageLibrary = function (label) {
        this.label = label;
        this.images = [];
        //this._isSelected = false;
    }

    Image.prototype.getUrl = function (imgType) {
        var _self = this;
        var seperator = '/';
        var url = BLOB_PATH + imgType + seperator + _self.label + '/' + _self.id + '.jpg';
        return url;
    };

    var createImageModel = function (imageId, imageFolder) {
        return new Image(imageId, imageFolder);
    };

    var createImageLibraryModel = function (imageFolder) {
        var library = new ImageLibrary(imageFolder.Folder);
        var allImages = _.map(imageFolder.Files, function (fileId) {
            return createImageModel(fileId, imageFolder.Folder);
        });

        library.images = allImages;
        return library;
    };

    var createModel = function (folders) {
        return _.map(folders, createImageLibraryModel);
    };

    var MenuModel = function (allFolders) {
        var _self = this;
        var allMenuItems = _.map(allFolders, function (f) {
            return f.asMenuItemModel(_self);
        });

        _self.menuItems = ko.observableArray(allMenuItems);

        _self.notifySelectionChanged = function (selectedItem) {
            var currentSelection = _.find(allMenuItems, function (item) {
                return item !== selectedItem && item.isSelected();
            });

            if (currentSelection) {
                currentSelection.isSelected(false);
            }
        }


    };

    ImageLibrary.prototype.asMenuItemModel = function (menuModel) {
        var _self = this;
        _self.displayName = ko.observable(_self.label);
        _self.isSelected = ko.observable(false);

        _self.onSelected = function () {
            _self.isSelected(true);
            menuModel.notifySelectionChanged(_self);
        };

        return _self;
    };


    var ImageGalleryModel = function (menuModel, allFolders) {
        var _self = this;
        var imagesPerPage = 50;

        _self.scrollToTop = function(){
            var topElem = document.getElementById('top');
            topElem.scrollIntoView();
        };

        _self.currentLibrary = ko.computed(function () {

            return _.find(allFolders, function (f) {
                return f.isSelected();
            });
        }, _self);

        _self.currentPage = ko.observable(0);
        _self.debugInfo = ko.computed(function () {
            return ' page: ' + _self.currentPage();
        }, this);

        _self.canShowPrevious = ko.computed(function () {
            return _self.currentPage() > 0;
        }, _self);

        _self.calculateTotalNumberOfPages = function () {
            var currentLibrary = _self.currentLibrary();
            if (!currentLibrary) {
                return;
            }
            var numImages = currentLibrary.images.length;
            return Math.ceil((numImages / imagesPerPage));
        };

        _self.calculateHighestPageNumber = function () {
            return _self.calculateTotalNumberOfPages() - 1;
        };

        _self.canShowNext = ko.computed(function () {
            var highestPageNumber = _self.calculateHighestPageNumber();
            return _self.currentPage() < highestPageNumber;
        }, _self);

        _self.thumbNails = ko.computed(function () {
            var currentLibrary = _self.currentLibrary();
            if (!currentLibrary) {
                return;
            }
            var numToSkip = _self.currentPage() * imagesPerPage;
            var imagesToDisplay = _.take(_.drop(currentLibrary.images, numToSkip), imagesPerPage);

            return _.map(imagesToDisplay, function (i) {
                
                var projection = {
                    id: i.id
                    ,
                    thumbnail: i.getUrl('thumbnail')
                    ,
                   preview: i.getUrl('preview')
                   ,
                   full: i.getUrl('full')
                };
                
                return projection;
            });
        }, this);

        _self.currentLibrary.subscribe(function () {
            _self.currentPage(0);
            _self.previewImage(null);
            window.location.hash = "top";
        });

        _self.showPreviousPage = function () {
            _self.scrollToTop();
            var currentValue = _self.currentPage();
            if (currentValue === 0) {
                return;
            }
            _self.currentPage(currentValue - 1);
        };

        _self.showNextPage = function () {
            _self.scrollToTop();
            var currentValue = _self.currentPage();
            var highestPageNumber = _self.calculateHighestPageNumber();
            if (currentValue === highestPageNumber) {
                return;
            }

            _self.currentPage(currentValue + 1);
        };

        _self.previewImage = ko.observable();

        _self.shouldShowPreview = ko.computed(function(){
            var img = _self.previewImage();
            var css = (img || img) ? "": "hide-component" ;
            return css;
        },_self);

        _self.shouldShowGallery = ko.computed(function(){
            var img = _self.previewImage();
            var css = !( img || img ) ? "": "hide-component" ;
            return css;
        },_self);

        _self.onThumbnailSelected = function(e){
            _self.scrollToTop();
            var selectedImage = e;
            _self.previewImage(selectedImage);
        }

        _self.closePreview = function(){
            var img = _self.previewImage();
            _self.previewImage(null);
            window.location.hash = img.id;
        }
        
    }

    var allFolders = createModel(WZYC.Images.Folders);
    var menuModel = new MenuModel(allFolders);
    var imageGalleryModel = new ImageGalleryModel(menuModel, allFolders);
    allFolders[0].isSelected(true);

    var imgMenuElem = document.getElementById('image-menu');
    var imgGalleryElem = document.getElementById('image-gallery');


    ko.applyBindings(menuModel, imgMenuElem);
    ko.applyBindings(imageGalleryModel, imgGalleryElem);

})();   