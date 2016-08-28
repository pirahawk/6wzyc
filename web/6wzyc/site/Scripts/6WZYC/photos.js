var WZYC = WZYC || {};
(function () {
    "use strict";
    if (WZYC.Images === undefined) {
        return;
    }

    var Image = function (id) {
        this.id = id;
    }

    var ImageLibrary = function (label, images) {
        this.label = label;
        this.images = images;
        this.isSelected = false;
    }

    var createImageModel = function (imageId) {
        return new Image(imageId);
    };

    var createImageLibraryModel = function (imageFolder) {
        var allImages = _.map(imageFolder.Files, createImageModel);
        var imgLibrary = new ImageLibrary(imageFolder.Folder, allImages);
        return imgLibrary;
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

    ImageLibrary.prototype.asMenuItemModel = function (menu) {
        var _self = this;
        _self.displayName = ko.observable(_self.label);
        _self.isSelected = ko.observable(_self.isSelected);

        _self.onSelected = function () {
            _self.isSelected(true);
            menu.notifySelectionChanged(_self);
        };

        return _self;
    };

    var allFolders = createModel(WZYC.Images.Folders);
    var imgMenuElem = document.getElementById('image-menu');
    var menuModel = new MenuModel(allFolders);
    ko.applyBindings(menuModel, imgMenuElem);

})();   