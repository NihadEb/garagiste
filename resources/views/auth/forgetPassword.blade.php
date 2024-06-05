<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mot de pass oublier</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: system-ui;
    }

    body {
      background-color: #f3f4f6; /* Nouvelle couleur de fond */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .wrapper {
        border: 1px solid blue;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Ajoutez une ombre */
      border-radius: 10px; /* Arrondir les coins */
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 400px;
      width: 500px;
      margin-left: 90px
    }


    h1 {
      color: #333;

    }

    .input-box {
      position: relative;
      width: 80%;
      margin: 30px 0;
      margin-left: 20px

    }

    input {
      width: 100%;
      height: 50px;
      background: transparent;
      border: none;
      outline: none;
      border: 2px solid blue;
      border-radius: 40px;
      font-size: 16px;
      color: #333;
      padding: 20px 45px 20px 20px;
    }

    input::placeholder {
      color: #333;
    }

    i {
      position: absolute;
      right: 20px;
      top: 30%;
      transform: translate(-50%);
      font-size: 20px;
      color: yellow;
    }

    .btn {
      width: 80%;
      height: 45px;
      background-color: yellow; /* Nouvelle couleur de fond du bouton */
      border: none;
      outline: none;
      border-radius: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, .1);
      cursor: pointer;
      font-size: 16px;
      color: blue;
      font-weight: 600;
      margin-top: 20px;
      margin-left: 20px

    }

    .btn:hover {
      background-color: blue; /* Couleur de fond au survol */
      color: yellow
    }


  </style>
</head>
<body>
  <div class="container">
    <div class="wrapper">
      <form method="POST" action="{{ route('forget.password.post') }}">
        @csrf
        <h1>Récuperation mot de passe</h1>
        <div class="input-box">
          <input type="email" placeholder="Email" id="email" name="email" required>
          <i class='bx bxs-envelope'></i>
          <div style="color:red">
            @error('email')
              {{$message}}
            @enderror
          </div>
        </div>
        <button type="submit" class="btn">Envoyer</button>
      </form>
    </div>
  </div>

</body>
</html>
