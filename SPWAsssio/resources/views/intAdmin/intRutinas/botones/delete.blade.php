<form method="POST" id="eliminar" action="/routines/{{$slug}}">
	@method('DELETE')
	@csrf
	<button type="submit" id="boton" class="btn btn-danger btn-sm" data-toggle="tooltip" title='Delete'><i class="fa fa-trash-o" aria-hidden="true"></i></button>
</form> 
<script>
	let  deleteButton = document.querySelector('#boton');
	  deleteButton.onclick = function(e){
	  e.preventDefault()
	  user_confirm = confirm("¿Está seguro que desea eliminar el registro?")
	  if(user_confirm){
		document.getElementById("eliminar").submit();
	  }else{
		  alert('La eliminación se ha cancelado')
	  }
	  }
   </script>