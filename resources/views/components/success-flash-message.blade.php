@if (session()->has('success'))
    <div class="fixed top-28 right-10 border-s-2 border-green-700 bg-green-300 flex justify-center items-center gap-1 text-green-700 py-3 px-10 m-auto flash-message">
        <i class="fa-solid fa-check text-green-700"></i>
        {{ session('success') }}
        <button class="close-button ml-2 focus:outline-none">&times;</button>
    </div>
@endif

{{-- <style>
    .loader {
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    border-top: 4px solid #3498db;
    width: 20px;
    height: 20px;
    animation: spin 1s linear infinite;
    margin-left: 8px;
    display: inline-block;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>


@if (session()->has('success'))
    <div class="fixed top-28 right-10 border-s-2 border-green-700 bg-green-300 flex justify-center items-center gap-1 text-green-700 py-3 px-10 m-auto flash-message" style="display: none;">
        <i class="fa-solid fa-check text-green-700"></i>
        <span>{{ session('success') }}</span>
        <div class="loader"></div>
        <button class="close-button ml-2 focus:outline-none">&times;</button>
    </div>

    <script>
        $(document).ready(function () {
            // Fade in the flash message
            $('.flash-message').fadeIn(500);

            // Set a timeout to fade out the flash message after 5000 milliseconds (5 seconds)
            setTimeout(function () {
                $('.flash-message').fadeOut(500);
            }, 5000);
            
            // Close button click event to fade out the flash message
            $('.close-button').click(function () {
                $('.flash-message').fadeOut(500);
            });
        });
    </script>
@endif --}}
