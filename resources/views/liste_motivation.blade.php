<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>Liste des motivations</h1>
    </div>

    <br>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Intitule</th>
            <th>Action</th>
        </tr>

            <tbody>
                @foreach($liste as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->intitule}}</td>
                    <td>
                        <a href="/motivation_delete/{{$m->id}}" class="btn btn-danger">Supprimer</a>
                        <a href="/form_update_motivation/{{$m->id}}" class="btn btn-warning">Editer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>  
    </table>
   

    <br>
    <a href="/motivation_create" class="btn btn-primary">Ajouter une motivation</a>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>