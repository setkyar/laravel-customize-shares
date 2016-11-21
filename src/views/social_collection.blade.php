<a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->full()) }}"
    target="_blank">
	Share on Facebook
</a>
<a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->full()) }}"
    target="_blank">
	<i class="fa fa-twitter-square"></i>
    Share on Twitter
</a>
<a href="https://plus.google.com/share?url={{ urlencode(url()->full()) }}"
    target="_blank">
	Share on GPlus
</a>
<a href="https://pinterest.com/pin/create/button/?{{
        http_build_query([
            'url' => url()->full(),
            'media' => $image,
            'description' => $description
        ])
    }}" target="_blank">
	Share on Pinterest
</a>