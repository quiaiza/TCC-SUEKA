

function alerta() {
  Swal.fire({

    icon: "success",
    title: "Utilizador Cadastrado com sucesso!",
    showConfirmButton: false,
    timer: 2000
  });
}





function erro() {
Swal.fire({
  icon: "error",
  title: "Oops...Email ou Senha Errado!", });

}


function alerta2() {


  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger"
    },
    buttonsStyling: false
  });
  swalWithBootstrapButtons.fire({
    title: "Informe o seu email para rcuperar a sua senha!",
    input: "email",
    showCancelButton: true,
    confirmButtonText: "yes,Enviar Email!",
    cancelButtonText: "no,Cancelar!",
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      swalWithBootstrapButtons.fire({
        title: "Enviamos uma nova senha no seu email!",
        text: "Verifique o seu email.",
        icon: "success"
      });
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire({
        title: "Cancelado",
        
        icon: "error"
      });
    }
  });















 }