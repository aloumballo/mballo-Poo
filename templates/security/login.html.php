<!-- <div class="card">
    <div class="card-body">
        <h4 class="card-title">Formulaire de connexion</h4>
        <p class="card-text">
        <form>
            <div class="mb-1">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </p>
    </div>
</div> -->
<!-- <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
      </style>
   </head> -->
<!-- <body onLoad="document.fo.login.focus()"> -->
<!-- <div class="erreur">
    <h1>Authentification</h1>

    <form method="POST" action="http://localhost:8003/login">

        <input class="input" type="email" name="login" placeholder="Login" /><br />
        <input class="input" type="password" name="password" placeholder="Mot de passe" /><br />
        <input type="submit" name="valider" value="S'authentifier" />
    </form>
</div> -->









<div class="wrapper">
    <div class="logo">
        <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
    </div>
    <div class="text-center mt-4 name">
        Twitter
    </div>
    <form class="p-3 mt-3" method="POST" action="http://localhost:8003/login">
        <div class=" form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="login" id="userName" placeholder="Username">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
        </div>
        <button type="submit" name="valider" class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6">
        <a href="#">Forget password?</a> or <a href="#">Sign up</a>
    </div>
</div>










<!-- <div class="wrapper">
    <div class="logo">
        <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
    </div>
    <div class="text-center mt-4 name">
        Twitter
    </div>
    <form class="p-3 mt-3" method="POST" action="http://localhost:8003/login"">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="userName" id="userName" placeholder="Username">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="pwd" placeholder="Password">
        </div>
        <button type="submit" class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6">
        <a href="#">Forget password?</a> or <a href="#">Sign up</a>
    </div>
</div> -->