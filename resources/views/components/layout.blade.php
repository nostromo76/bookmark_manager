
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Bookmark Manager</title>
</head>
<body bg-slate-1000 dark:bg-slate-700>

    <x-nav-bar/>  
    
 <x-footer/>


    <div class="max-w-6xl mx-auto">
        {{$slot}}
        </div>

</body>
</html>