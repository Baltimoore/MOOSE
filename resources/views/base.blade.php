<!DOCTYPE html>
<!-- - - - - - - - - - - -
 - - Gatis Ieviņš, gi20002
 - - lapas skelets 'zagts' no https://www.w3schools.com/w3css/w3css_templates.asp [Start Page template]
 - - - - - - - - - - - -->
<html lang="en">
<title>ALNIS - @yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/main.css">
<style>
    @yield('globalStyles')
</style>

<body>
    <div class="w3-top">
        @yield('navbar')
    </div>
    <div class="content">
        @yield('saturs')
    </div>

    <script type="text/javascript">
        @yield('scripts')
    </script>
</body>
</html>
