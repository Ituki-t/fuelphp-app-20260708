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
                    self.posts(posts);
                })
                .catch(function (error) {
                    console.error('Error fetching posts:', error);
                });
        };

        self.keyword.subscribe(function () {
            self.search();
        });


        self.search(); // 初期表示時に全件取得
    }

    ko.applyBindings(new PostViewModel());
});