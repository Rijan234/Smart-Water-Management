<!DOCTYPE html>
<html lang="en" class="v2fLMH8w3xgUEQcl63H9">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Water Management Board - Dharan</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('photos/logos.png') }}">

    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://flowbite.com/application-ui/demo/app.css">
  
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141734189-9');
</script>


<script>
    
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('v2fLMH8w3xgUEQcl63H9');
    } else {
        document.documentElement.classList.remove('v2fLMH8w3xgUEQcl63H9')
    }
</script>

</head>

<body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">


<x-navbar/>


    
    <div class="YRrCJSr_j5nopfm4duUc wfz9oKCp_svYP9oWrZuR wBVMFkIGfrKshbvi2gS1 jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom">

      <x-sidebar/>

        <div class="_SmdlCf6eUKB_V9S5IDj _LPVUrp9Uina5fcERqWC _DGThsbfFGclb6iwA4_9 QhmQ_v3mmDFIP9VaVOfb _JKsnSqP4tIzydAzf5aP yQK4azPzSPqQ3rmcKxWm" id="sidebarBackdrop"></div>

        <div id="main-content" class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_ uLPch_bqyJDXwe5tynMV _lTTGxW9MVI40FyDCtmr jtAJHOc7mn7b4IKRO59D zW58fVqdWJHfumftUEwF h8KYXnua2NT4kTVzieom">
            <main>

            {{ $slot }}

            </main>
      

        </div>

    </div>



    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

</body>

</html>