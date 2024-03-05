</main>
<footer>
  <!-- place footer here -->
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

<!-- JQuery -->
<script>

  $(document).ready(function () {
    $("#tabla_id").DataTable({
      "pageLength": 25,
      lengthMenu: [
        [5, 10, 25, 50],
        [5, 10, 25, 50]
      ],
      "language": {
        "url": "https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
      }

    })
  });
</script>

<!-- FUNCIÓN JS SWEET-ALERT2 -->
<script>
  function btnBorrar(id) {
    Swal.fire({
      title: '¿Desea borrar el registro?',
      showCancelButton: true,
      confirmButtonText: 'Si, borrar',
    }).then((result) => {
      if (result.isConfirmed) {

        let url_actual = window.location.href;
        let url_destino = '';

        if (url_actual.includes('index_employees.php')) {
          url_destino = "index_employees.php?txtID=" + id;
          //console.log(url_destino);
        }
        else if (url_actual.includes('index_tasks.php')) {
          url_destino = "index_tasks.php?txtID=" + id;
        }

        // REDIRECCIÓN
        if (url_destino !== '') {
          window.location.href = url_destino;
        }
      }
    })
  }
</script>

</body>

</html>