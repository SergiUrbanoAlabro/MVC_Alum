<form action="/user/register" class="container mt-5">
  <div class="mb-3">
    <label for="exampleInputUser1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputUser1" aria-describedby="userHelp" name="nom_user">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correu_user">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password_user">
  </div>
  <button type="submit" class="btn btn-primary">Regist User</button>
  <a href="/user" class="btn btn-primary">Log In</a>
</form>