<!DOCTYPE html>
<!-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - lapas skelets 'zagts' no https://www.w3schools.com/w3css/w3css_templates.asp [Start Page template]
 - - - - - - - - - - - -->
<html lang="en">
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&family=Open+Sans:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700">
<link rel="stylesheet" href="/css/main.css">
<style>
    @yield('globalStyles')
</style>

<body>
    <div id="top">
        @yield('navbar')
    </div>
    <div id="body" class="w3-container">
        @yield('content')
    </div>

    <script type="text/javascript">
        @yield('scripts')
    </script>
</body>
</html>
