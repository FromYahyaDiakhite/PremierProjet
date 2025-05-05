<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container text-center">
      <div class="row"> 
        <div class="col s12">
          <h1>CRUD Laravel 10 </h1>
          @if (session('status'))
                <div class="alert alert-success">
                    {{(session('status'))}}
                </div>
          @endif

          <a href="/ajouter" class="btn btn-primary">ajouter un etudiant </a>

          <table class="table">
            <thead>
              <th>#</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Classe</th>
              <th>Action </th>
            </thead>
            <tbody>
              @foreach ($etudiants as $etudiant)
              <tr>
                <td>{{$etudiant->id}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->classe}} 2</td>
                <td>
                  <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-info">Update</a>
                  <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>