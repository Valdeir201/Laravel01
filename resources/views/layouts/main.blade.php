<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('title') </title>

    {{-- CSS da aplicação--}} 
    <link rel="stylesheet" href="/css/styles.css">

    <script src="/js/scripts.js"></script>

    {{-- Fonte do Google--}}  
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{-- CSS Bootstrap --}} 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      
</head>
<body>
    <head>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                <img src="/img/logo.jpg" width="100px" alt="Logo do Telecentro">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/perfil" class="nav-link"> Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="/infor" class="nav-link"> Informações</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cadastrar" class="nav-link"> Cadastar</a>
                    </li>


                </ul>
            </div>
            
        </nav>
    </head>
    @yield('contet')
    <footer>
        <p>Valdeir &copy; 2022</p>
    </footer>
    {{--Ícones de código aberto--}}
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
</body>
</html>