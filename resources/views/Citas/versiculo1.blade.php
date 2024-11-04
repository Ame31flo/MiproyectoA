<html>
  <head>
    <title>Este es mi titulo</title>
    <script src="https://cdn.tailwindcss.com"></script>" 
    <link href="@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');">
    <style>
     .titulo{ font-family: 'Bebas+Neue';font-weight: 50px; 
     font-style: italic; /* Simular cursiva */
    }
     
 </style>
    <x-app-layout>
      
    
    <head/>

<table class="border-separate border-spacing-2 border border-slate-500 ...">
<head>
  <title>Mi diario bíblico</title>
</head>

    <tr>
        <td colspan="2" style="text-align: center;"> <center><img src="{{ asset('imagenes/tulipanes.jpg') }}" alt="Tulipanes" width="200" height="150"></td></center>
    </tr>
    <tr>
        <td class="border border-slate-600 ...">
            <ul>
                <li><a href="biblia">Inicio</a></li>
                <li><a href="citascontrolador">Versiculo1</a></li>
                <li><a href="v2">Versiculo2</a></li>
                <li><a href="v3">Versiculo3</a></li>
                <li><a href="v4">Versiculo4</a></li>
            </ul>
        </td>
        <td class="border border-slate-600 ...">
            Todo lo puedo en cristo que me fortalece.<br> Filipenses 4:13
        </td>
    </tr>

</table>
Este es el versiculo favorito de {{$minombre}} {{$miapellido }}

<body>
  <h1 class="titulo"> Algo aqui </h1>

        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
              Profile
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
              Settings
            </button>
            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
              Messages
            </button>
          </div>
</body>

</x-app-layout>
</html>


