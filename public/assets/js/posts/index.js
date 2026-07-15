document.addEventListener('DOMContentLoaded', function () {
    function PostViewModel() {
        var self = this;

        self.keyword = ko.observable('');

        self.search = function () {
            console.log('Searching for:', self.keyword());
        }
    }

    ko.applyBindings(new PostViewModel());
});