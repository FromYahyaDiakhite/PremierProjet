<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container ">
      <div class="row"> 
        <div class="col s12">
          <h1>Ajouter un etudiant - Laravel 10 </h1>
          <hr>
            @if (session('status'))
                <div class="alert alert-success">
                    {{(session('status'))}}
                </div>
            
            @endif
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>
                @endforeach
            </ul>
            
          <form action="/ajouter/traitement" method="POST">
            @csrf

            <div class="mb-3">
              <label for="Nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="Nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="Prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="Prenom" name="prenom">
              </div>
              <div class="mb-3">
                <label for="Classe" class="form-label">Classe</label>
                <input type="text" class="form-control" id="Classe" name="classe">
              </div>
           
            <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>
            <br><br>
             <a href="/etudiant" class="btn btn-danger">Revenir a la liste des etudiant</a>
          </form>
          
        </div>
      </div>
    </div>



















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>

