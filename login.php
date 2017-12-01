<?php
// Inicia a sessão
session_start();
?>
<!doctype html>
<html>
<head>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<title>Login - Registro de Ligações</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
	<body style="background-color:#EBEBEB">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	<div class="container">
	<div class="row">
	 <div class="col s12">
	<div class="col s6 offset-s3">
	<div class="card-panel">
	<h5 class="center-align">Bem-vindo</h5>
		<form action="index.php" method="post">
		      <div class="row">
        <div class="input-field col s12">
		<i class="material-icons prefix">account_circle</i>
          <input id="usuario" type="text" name="usuario" class="validate" required="required">
          <label for="usuario">Usuário:</label>
        </div>
      </div>
		      <div class="row">
        <div class="input-field col s12">
		<i class="material-icons prefix">vpn_key</i>		
          <input id="password" type="password" name="senha" class="validate" required="required">
          <label for="senha">Senha:</label>
        </div>
	
				<?php if ( ! empty( $_SESSION['login_erro'] ) ) :?>
					<tr>
						<td style="color: red;"><?php echo $_SESSION['login_erro'];?></td>
						<?php $_SESSION['login_erro'] = ''; ?>
					</tr>
				<?php endif; ?>
				<div class="center-align">
				  <button class="btn waves-effect waves-light" type="submit" name="action">Entrar
    <i class="material-icons right">send</i>
  </button></div>
				
			<!--	<tr>
					<td><input type="submit" value="Entrar"></td>
				</tr> 
			</table>-->
		</form>
		</div>
		</div>
		</div>
		</div>
	</div>
	</body>
</html>