@props(['jobListingTagsCsv'])

@php
    $tags = explode(',', $jobListingTagsCsv);
    $trimmed_tags = array_map('trim', $tags)
@endphp

<div class="footer job-listing-tags-container mt-5">
    @foreach ($trimmed_tags as $tag)
        <span><a href="/?tag={{$tag}}" class="job-listing-tags bg-gray-100 text-blue-700 py-1 px-2 text-xs rounded">{{$tag}}</a></span>
    @endforeach
</div>
