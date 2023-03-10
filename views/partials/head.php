<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $heading ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    
    $(document).keydown(function (event) {
    // Prevent F12 -
    if (event.keyCode == 123) {
       return false;
    }

    // Prevent Ctrl+c = disable Copy
    // Prevent Ctrl+x = disable Cut
    // Prevent Ctrl+v = disable Paste
    if (event.ctrlKey==true && (event.which == '67' || event.which == '118' || event.which == '86')) {  
        event.preventDefault();  
    }  

    // Prevent Ctrl+a = disable select all
    // Prevent Ctrl+u = disable view page source
    // Prevent Ctrl+s = disable save
    if (event.ctrlKey && (event.keyCode === 85 || event.keyCode === 83 || event.keyCode ===65 )) {
       return false;
    }

    // Prevent Ctrl+Shift+I = disabled debugger console using keys open
    else if (event.ctrlKey && event.shiftKey && event.keyCode === 73)
    {
       return false;
    }

    });

    </script>
</head>
<body class="h-full">
<style type="text/css" media="print">
    body { visibility: hidden; display: none }
</style>
    <!--
        This example requires updating your template:

        ```
        <html class="h-full bg-gray-100">
        <body class="h-full">
        ```
        -->
    <div class="min-h-full">