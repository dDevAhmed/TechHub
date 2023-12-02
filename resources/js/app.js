import './bootstrap';


$(document).ready(function () {
    // remove dark class from HTML at the beginning
    $('html').removeClass('dark');

    // toggle dark mode
    $('#lightModeToggler').on('click', function () {
        $('html').toggleClass('dark');
        $('#lightIcon').toggleClass('fa-moon', 'fa-sun'); // switch icon on toggle
    });



    // jobListings page filter
    // $(document).ready(function () {
    // $('#applyFilter').on('click', applyFilters);
    // // });

    // function applyFilters() {
    //     // Get selected values from filters
    //     const dateFilter = $('#dateFilter').val();
    //     const locationFilter = $('#locationFilter').val();
    //     const jobTypeFilter = $('#jobTypeFilter').val();
    //     const experienceLevelFilter = $('#experienceLevelFilter').val();

    //     // Apply filters to job listings
    //     $('.job-listing').each(function () {
    //         const jobDate = $(this).data('created_at'); // Assuming each job listing has a 'data-created_at' attribute
    //         const jobLocation = $(this).data('location');
    //         const jobType = $(this).data('type');
    //         const jobExperienceLevelDate = $(this).data('level');

    //         // Check if the job listing meets the filter criteria
    //         if (filterJob(jobDate, dateFilter) /* && ... other filter conditions ... */) {
    //             $(this).show();
    //         } else {
    //             $(this).hide();
    //         }
    //     });
    // }

    // function filterJob(jobDate, dateFilter) {
    //     // Implement your filtering logic here
    //     // Return true if the job meets the criteria, false otherwise
    //     // For example, you might parse the date strings and compare them
    //     return true; // Placeholder, replace with your logic
    // }

});
