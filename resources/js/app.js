import './bootstrap';


$(document).ready(function() {

    // home page search button goes to result page
    $('#homeSearchButton').on('click', function() {
        var searchQuery = $searchInput.val();

        if (searchQuery !== '') {
            // Redirect to results page with the search query
            window.location.href = '/results?query=' + searchQuery;
        }
    });

    var $searchInput = $('#searchInput');
    var $suggestionList = $('#suggestionList');
    var suggestions = [];

    $searchInput.on('keyup', function() {
        var searchQuery = $(this).val().toLowerCase();

        if (searchQuery === '') {
            $suggestionList.addClass('hidden');
            return;
        }

        // Fetch suggestions from database using AJAX
        $.ajax({
            url: '/results',
            method: 'GET',
            data: {
                query: searchQuery
            },
            success: function(response) {
                suggestions = response.suggestions;
                updateSuggestionsList();
            }
        });

    });

    function updateSuggestionsList() {
        $suggestionList.empty();

        for (var i = 0; i < suggestions.length; i++) {
            var suggestion = suggestions[i];
            var suggestionItem = $('<li class="text-gray-700 cursor-pointer py-2">' + suggestion + '</li>');
            suggestionItem.on('click', function() {
                $searchInput.val(suggestion);
                $suggestionList.addClass('hidden');

                // Perform actual search based on the selected suggestion
                // ...
            });

            $suggestionList.append(suggestionItem);
        }

        if (suggestions.length > 0) {
            $suggestionList.removeClass('hidden');
        }
    }
});