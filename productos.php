<?php include 'header.php'; ?>
<!--Inicio de catalogo-->
<section class="Catalogo mt-5">
  <div class="container">
    <div class="card-columns" id="galeria">
    <div class="card" style="width: 18rem">
        <a href="" data-bs-toggle="modal" data-bs-target="#id${imagen}">
          <img src="images/Productos/1.png" class="card-img-top" alt="..." />
        </a>
        <div class="card-body">
          <h5 class="card-title">Zapatilla simpson</h5>
          <p>Valor: $ 250.000</p>
          <a href="https://web.whatsapp.com/" class="btn btn-primary"><i class="fab fa-whatsapp"></i> Contactanos</a>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="id${imagen}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <button type="button" class="btn-close ml-3 mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <img src="images/Productos/${imagen}.png" alt="" class="img-fluid rounded">
        </div>
      </div>
      
    </div>
  </div>
</section>
<!--Contacto-->
<?php include 'contacto.php'; ?>

<?php include 'footer.php';  ?>