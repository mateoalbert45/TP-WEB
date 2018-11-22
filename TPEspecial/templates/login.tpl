{include file="navbar.tpl"}
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>Iniciar Sesion</h1>
<form method="post" action="VerificarLogin">
<div class="form-group">
  <label for="exampleInputEmail1">Usuario</label>
  <input type="text" class="form-control" id="usuarioId" name="usuarioId" aria-describedby="usuarioId" placeholder="Enter email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="passwordId" name="passwordId" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Iniciar</button>
</form>
  {$Message}
</div>
  <div class="col-md-6 col-md-offset-3">
<h1>Crear Cuenta</h1>
<form method="post" action="CrearCuenta">
<div class="form-group">
  <label for="exampleInputEmail1">Usuario</label>
  <input type="text" class="form-control" id="nombreNew" name="nombreNew" aria-describedby="usuarioId" placeholder="Enter email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="passNew" name="passNew" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Crear</button>
</form>
</div>
</div>

{include file="footer.tpl"}
