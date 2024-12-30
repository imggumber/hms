<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
    {{
      isset($pageTitle) && !empty($pageTitle) ? $pageTitle : 'HMS'
    }}
</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="{{URL::asset('assets/styles/css/main.css')}}">

@vite(['resources/css/app.css', 'resources/js/app.js'])