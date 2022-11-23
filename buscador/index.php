<!doctype html>
<html style="height: 100%;">
    <head>
        <title>Buscador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body class="bg-light">
        <form method="get" action="index.php" class="m-auto mt-5 input-group" style="width: 300px;">
            <input type="text" name="url" class="form-control" placeholder="Digite sua pesquisa">
            <button type="submit" class="btn btn-dark"><i class="bi bi-search"></i></button>
        </form>

        <section>
            
        </section>

        <?php if (isset($_GET['url'])): ?>
            <?php
                $url = $_GET['url'];
            
                $command = 'C:\Users\lucas\AppData\Local\Programs\Python\Python311\python search.py ' .$url;
                $output = null;
                $result = null;

                $reading_time = exec($command, $output, $result);

                var_dump($output);
            ?>
        <?php endif; ?>
    </body>
</html>