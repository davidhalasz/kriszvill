<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KRISZVILL</title>
    <link rel="icon" href="{{ url('logo/kriszvill-logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- 
    <link rel="stylesheet" href="/build/assets/app-29efc18b.css">
    <script src="/build/assets/app-6e0eadfb.js" defer></script>
    -->
</head>

<body class="antialiased bg-[#4B4D4F] raleway">
    @include('components.navbar')
    {{ $slot }}

    <script>
        function scrollToDiv(divName) {
            window.location.href = "/#" + divName;
            var div = document.getElementById(divName);
            div.scrollIntoView({
                behavior: "smooth"
            });
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }


        //Lightboard
        function updateDataState() {
            // Find all elements with data-state="medium" within elements with class "mainDiv"
            const mediumLight = document.querySelectorAll('.light-board [data-state="medium"]');

            // Loop through the found elements and update the data-state attribute
            mediumLight.forEach((element, index) => {
                element.setAttribute('data-state', 'off');
            });

            setTimeout(() => {
                mediumLight.forEach((element) => {
                    element.setAttribute('data-state', 'medium');
                });
            }, 1000);


            const highLight = document.querySelectorAll('.light-board [data-state="high"]');

            // Loop through the found elements and update the data-state attribute
            highLight.forEach((element) => {
                element.setAttribute('data-state', 'off');
            });

            setTimeout(() => {
                highLight.forEach((element) => {
                    element.setAttribute('data-state', 'high');
                });
            }, 2000);
        }

        // Call the updateDataState function every 250 milliseconds
        setInterval(updateDataState, 2000);
    </script>
</body>


</html>
