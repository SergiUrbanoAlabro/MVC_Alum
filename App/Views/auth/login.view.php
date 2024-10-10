<form action="/user" class="container">
  <div class="mb-3">
    <label for="exampleInputUser1" class="form-label">User address</label>
    <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="userHelp" name="nom_user">
    <div id="userHelp" class="form-text">We'll never share your user with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" class="password_user">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Log In</button>

  <a href="/user/register" class="btn btn-primary">Register</a>
</form>