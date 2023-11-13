$(document).ready(function () {

    $('#search').keyup(function () {
        var query = $(this).val();
        if (query != '') {
            var _token = $('input[name="search"]').val();
            $.ajax({
                url: "{{ route('autocomplete.fetch') }}",
                method: "POST",
                data: { query: query, _token: _token },
                success: function (data) {
                    $('#dropdown-suggestions').fadeIn();
                    $('#dropdown-suggestions').html(data);
                }
            });
        }
    });
});

$(document).on('click', 'a', function () {
    $('#search').val($(this).text());
    $('#dropdown-suggestions').fadeOut();
});

