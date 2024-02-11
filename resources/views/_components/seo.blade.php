<title>{{ $titlePage }}</title>
    <!-- SEO -->
    <link rel="canonical" href="{{ $canonnical }}" />
	<!-- META TAGS -->
	<meta name="title" content="{{ $metaTitle }}" />
	<meta name="description" content="{{ $metaDescription }}"/>
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Expires" content="Mon, 01 Jul 1970 00:00:00 GMT" />
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	 <!-- FACEBOOK OPEN GRAPH TAGS -->
	<meta property="og:title" content="{{ $metaTitle }}" />
	<meta property="og:description" content="{{ $metaDescription }}" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ $canonnical }}" />
	<meta property="og:image" content="{{ $metaImage }}" />
	<!-- Twitter -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@" />
	<meta name="twitter:title" content="{{ $metaTitle }}" />
	<meta name="twitter:description" content="{{ $metaDescription }}" />
	<meta name="twitter:url" content="{{ $canonnical }}" />
	<meta name="twitter:image" content="{{ $metaImage }}" />
