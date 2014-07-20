var WZYC = WZYC || {};

(function () {
    "use strict";

    var BlogModel = function(modelArgs){
        var self = this;
        self.title =  ko.observable(modelArgs.title);
        self.images = ko.observableArray(modelArgs.images);
        self.postUrl = ko.observable(modelArgs.postUrl);
    }

    var Tumblr = function() {
        var self = this;
        var callbackUrl = 'http://api.tumblr.com/v2/blog/6wzyc.tumblr.com/posts/photo?api_key=';
        var apiKey = '1lg92yaVZeqIBEdRwEk4QZPGnMaLxPatBzpcDcH0r6CBTQccKU';

        self.getBlogImages = function(blogId, func){
            $.ajax({
                dataType: 'jsonp',                
                url: callbackUrl,
                data:{
                'api_key': apiKey,
                'id': blogId
                },
                accepts: 'application/json'
            }).done(function (response) {
                if(func){
                    console.log(response);
                    func(response);
                }
            });
        }

        self.parseResponse = function(tumblrObj){
            if(!tumblrObj && tumblrObj.meta.status !== 200){
                return;
            }

            var post = tumblrObj.response.posts[0];
            var modelArgs = {
                id: post.id,
                title: post.caption,
                postUrl: post.post_url,
                images: _.map(post.photos, function(photo){
                    return photo['alt_sizes'][0]['url'];//get the image that is 1024*627
                })
            };
            var model = new BlogModel(modelArgs);
            ko.applyBindings(model, document.getElementById('' + post.id));
        };


        self.requestBlogSlides = function(obj) {
            if (!obj || !obj.blogId) {
                return;
            }
            self.getBlogImages(obj.blogId, self.parseResponse);
        }
    };

    WZYC.Tumblr = new Tumblr();
})();