document.addEventListener('DOMContentLoaded', function () {
    function PostViewModel() {
        var self = this;

        self.keyword = ko.observable('');
        self.posts = ko.observableArray([]);

        self.search = function () {
            var url = '/posts/search?keyword='
                + encodeURIComponent(self.keyword());

            fetch(url)
                .then(function (response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function (posts) {
                    console.log('取得した投稿:', posts);
                    self.posts(posts);
                })
                .catch(function (error) {
                    console.error('Error fetching posts:', error);
                });
        }
    }

    ko.applyBindings(new PostViewModel());
});