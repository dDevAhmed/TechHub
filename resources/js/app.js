import './bootstrap';


$(document).ready(function () {
    // remove dark class from HTML at the beginning
    $('html').removeClass('dark');

    // toggle dark mode
    $('#lightModeToggler').on('click', function () {
        $('html').toggleClass('dark');
        $('#lightIcon').toggleClass('fa-moon', 'fa-sun'); // switch icon on toggle
    });


    // home page search button goes to result page
    $('#homeSearchButton').on('click', function () {
        var searchQuery = $searchInput.val();

        if (searchQuery !== '') {
            // Redirect to results page with the search query
            window.location.href = '/results?query=' + searchQuery;
        }
    });


    var $searchInput = $('#searchInput');
    var $suggestionList = $('#suggestionList');
    var suggestions = [];

    $searchInput.on('keyup', function () {
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
            success: function (response) {
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
            suggestionItem.on('click', function () {
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

    $('#searchButton').on('click', function() {
        var searchQuery = $searchInput.val();

        if (searchQuery !== '') {
            // Redirect to results page with the search query
            window.location.href = '/results?query=' + searchQuery;
        }
    });


    // jobListings page filter
    // $(document).ready(function () {
    $('#applyFilter').on('click', applyFilters);
    // });

    function applyFilters() {
        // Get selected values from filters
        const dateFilter = $('#dateFilter').val();
        const locationFilter = $('#locationFilter').val();
        const jobTypeFilter = $('#jobTypeFilter').val();
        const experienceLevelFilter = $('#experienceLevelFilter').val();

        // Apply filters to job listings
        $('.job-listing').each(function () {
            const jobDate = $(this).data('created_at'); // Assuming each job listing has a 'data-created_at' attribute
            const jobLocation = $(this).data('location'); 
            const jobType = $(this).data('type');
            const jobExperienceLevelDate = $(this).data('level'); 

            // Check if the job listing meets the filter criteria
            if (filterJob(jobDate, dateFilter) /* && ... other filter conditions ... */) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    function filterJob(jobDate, dateFilter) {
        // Implement your filtering logic here
        // Return true if the job meets the criteria, false otherwise
        // For example, you might parse the date strings and compare them
        return true; // Placeholder, replace with your logic
    }

});