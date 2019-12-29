<!DOCTYPE html>

<html>
<style>
	body {
		font-family: Helvetica, sans-serif;
		color:#494949;
	}

	ul {
		list-style: none;
	}

	div{
		background-color: #F8F8F8;
		width: 85%
		border-radius:20px;
		padding: 1rem 2rem;
	}
</style>
<body>
	<div>
		<h2>Granja Milagros</h2>
		<h3>Reserva</h3>
		<p>Enviado desde la web </p>
		<br>
		<h3>Datos del contacto</h3>
		<ul>
			<li><strong>Nombre:</strong> {{$nombre}}</li>
			<li><strong>Email:</strong> {{$email}}</li>
			<li><strong>Teléfono:</strong> {{$telefono}}</li>
		</ul>
		<ul>
			<li><strong>Fecha:</strong> {{$fecha}}</li>
			<li><strong>Adulto(s):</strong> {{$adulto}}</li>
			<li><strong>Niño(s):</strong> {{$menor}}</li>
		</ul>
	</div>
</body>

</html>
</html>