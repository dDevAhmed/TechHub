@props(['jobListingTagsCsv'])

@php
    $tags = explode(',', $jobListingTagsCsv);
    $trimmed_tags = array_map('trim', $tags)
@endphp

<div class="footer job-listing-tags-container">
    @foreach ($trimmed_tags as $tag)
        <span><a href="/?tag={{$tag}}" class="job-listing-tags">{{$tag}}</a></span>
    @endforeach
</div>
