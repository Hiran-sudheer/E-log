<html>
    <head>
      <title>E-LOG</title>
      </head>
    <body>
           <form>
                {{-- <div>
                    <label for="name">Login : </label><br>
                    <input name="name" v-model="name" placeholder="name" type="text" class="form-control">
                </div>
                <div>
                    <label for="age">Password : </label><br>
                    <input name="age" v-model="age" placeholder="password" type="number" class="form-control">
                </div>
                <div>
                    <button type="submit">Login</button>
                </div> --}}
                <div>
                    <a href="{{ route('googlelogin') }}">Login with google</a>
                </div>
              </form>

        </div>
              
    </body>
</html>