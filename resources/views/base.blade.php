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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Open Sans", sans-serif}
    .w3-bar,h1,button, .w3-button {font-family: "Montserrat", sans-serif}
    :root {
        --logo-bone-light: #d5e8e1;
        --logo-bone-dark: #a8bab2;
        --logo-fur-light: #82b3a8;
        --logo-fur-dark: #69938a;
        --logo-outline: #2b432f;
    }
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
