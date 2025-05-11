<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GebzaFarmacia</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

  <!-- Barra superior -->
  <div class="top-bar">
    <div class="container d-flex justify-content-between align-items-center">
      <form class="d-flex" style="flex: 1; max-width: 500px;">
        <input class="form-control me-2" type="search" placeholder="Buscar productos..." aria-label="Buscar">
        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
      </form>
      <div class="ms-auto d-flex align-items-center gap-3">
        <a href="/login" class="text-decoration-none text-dark"><i class="bi bi-person"></i> Mi cuenta</a>

        <div class="position-relative cart-toggle">
          <a href="#" class="text-decoration-none text-dark"><i class="bi bi-cart3"></i> Carrito</a>
          <div class="cart-dropdown" id="cart-dropdown">
            <p class="text-center text-muted">Tu carrito está vacío</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Barra de navegación -->
  <nav class="nav-categorias py-2">
    <div class="container d-flex justify-content-center gap-4">
      <a href="#" class="nav-link">Club VIP</a>
      <a href="#" class="nav-link">Medicamentos</a>
      <a href="#" class="nav-link">Conveniencia</a>
      <a href="#" class="nav-link">Dermocosmética</a>
      <a href="#" class="nav-link">Ofertas</a>
      <a href="#" class="nav-link">Tu farmacia</a>
    </div>
  </nav>

  <!-- Banner principal -->
  <section class="promo-banner mt-4">
    <div class="promo-text">
      <h2 class="fw-bold mb-3">Cuídate del sol<br><span class="text-morado">todos los días</span></h2>
      <a href="#" class="btn btn-purple btn-lg">COMPRAR</a>
      <p class="mt-2 text-muted small">*Restricciones aplican. Válido mayo del 2025</p>
    </div>
    <div class="position-relative d-inline-block">
      <img src="https://images.pexels.com/photos/2994102/pexels-photo-2994102.jpeg?auto=compress&cs=tinysrgb&h=300" class="product-img" alt="Protector solar">
      <span class="badge-descuento">25% OFF</span>
    </div>
  </section>

  <!-- Ofertas del mes -->
  <section class="container my-5">
    <h2 class="text-center mb-4 text-morado">Ofertas del Mes</h2>
    <div class="row ofertas-container">
      <!-- Producto 1 -->
      <div class="col-md-3 mb-4">
        <div class="card h-100">
          <div class="position-relative">
            <img src="https://www.farmaciasegura.es/media/mageplaza/blog/post/rokanthemes/blog/Las_3_mejores_cremas_faciales_para_beb_.jpg" class="card-img-top" alt="Sebamed">
            <span class="badge-descuento">15% OFF</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Sebamed Baby</h5>
            <p class="card-text">Crema balsámica para bebés 300 ml.</p>
            <p class="text-success fw-bold">$7.99</p>
            <button class="add-cart-btn">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <!-- Producto 2 -->
      <div class="col-md-3 mb-4">
        <div class="card h-100">
          <div class="position-relative">
            <img src="https://st.depositphotos.com/1067336/4459/i/450/depositphotos_44592091-stock-photo-boy-drinking-cough-syrup.jpg" class="card-img-top" alt="Bronchohelix">
            <span class="badge-descuento">20% OFF</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Bronchohelix</h5>
            <p class="card-text">Jarabe natural para la tos.</p>
            <p class="text-success fw-bold">$5.50</p>
            <button class="add-cart-btn">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <!-- Producto 3 -->
      <div class="col-md-3 mb-4">
        <div class="card h-100">
          <div class="position-relative">
            <img src="https://assets.unileversolutions.com/v1/2350185.jpg" class="card-img-top" alt="Pond's">
            <span class="badge-descuento">10% OFF</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Pond's Vitamin C</h5>
            <p class="card-text">Limpiador facial con vitamina C.</p>
            <p class="text-success fw-bold">$4.75</p>
            <button class="add-cart-btn">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <!-- Producto 4 -->
      <div class="col-md-3 mb-4">
        <div class="card h-100">
          <div class="position-relative">
            <img src="https://www.achemex.com/cdn/shop/products/41Ifwt8q_OL.jpg?v=1689018198" class="card-img-top" alt="Eucerin">
            <span class="badge-descuento">30% OFF</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Eucerin DermoCapillaire</h5>
            <p class="card-text">Shampoo anticaspa 150 ml.</p>
            <p class="text-success fw-bold">$8.30</p>
            <button class="add-cart-btn">Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Promociones Especiales -->
  <section class="container my-5">
    <h2 class="text-center mb-4 text-morado">Promociones Especiales</h2>
    <div class="row ofertas-container">
      <!-- Maquillaje -->
      <div class="col-md-3 mb-4">
        <div class="card h-100">
          <div class="position-relative">
            <img src="https://cdn.pixabay.com/photo/2016/11/21/15/47/lipstick-1846084_1280.jpg" class="card-img-top" alt="Maquillaje">
            <span class="badge-descuento">10% OFF</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Labial Mate</h5>
            <p class="card-text">Color intenso de larga duración.</p>
            <p class="text-success fw-bold">$6.20</p>
            <button class="add-cart-btn">Agregar al carrito</button>
          </div>
        </div>
      </div>
      <!-- Crema -->
      <div class="col-md-3 mb-4">
        <div class="card h-100">
          <div class="position-relative">
            <img src="https://cdn.pixabay.com/photo/2016/11/18/17/20/cosmetics-1836383_1280.jpg" class="card-img-top" alt="Crema Facial">
            <span class="badge-descuento">25% OFF</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Crema Facial</h5>
            <p class="card-text">Hidratante con vitamina E 50ml.</p>
            <p class="text-success fw-bold">$4.99</p>
            <button class="add-cart-btn">Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Botón flotante de WhatsApp -->
  <a href="https://wa.me/50370000000" class="btn-wsp" target="_blank">
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Footer -->
  <footer class="bg-morado text-white text-center p-3">
    © 2025 GebzaFarmacia - Todos los derechos reservados
  </footer>

  <style>
    body { font-family: 'Quicksand', sans-serif; }
    .btn-purple { background-color: #6f42c1; color: white; }
    .btn-purple:hover { background-color: #5a32a3; }
    .bg-morado { background-color: #6f42c1; }
    .text-morado { color: #6f42c1; }
    .top-bar { background-color: #f8f9fa; padding: 10px 0; border-bottom: 1px solid #ddd; }
    .nav-categorias a { font-weight: 600; color: #444; text-decoration: none; }
    .promo-banner { background-color: #fce8ff; display: flex; justify-content: space-between; align-items: center; padding: 30px; }
    .promo-banner img { max-height: 300px; border-radius: 10px; }
    .badge-descuento { position: absolute; top: 10px; left: 10px; background-color: #dc3545; color: white; padding: 5px 10px; font-size: 14px; font-weight: bold; border-radius: 5px; }
    .btn-wsp { position: fixed; bottom: 20px; right: 20px; background-color: #25d366; color: white; border-radius: 50%; padding: 15px; font-size: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); z-index: 1000; }
    .cart-dropdown { display: none; position: absolute; right: 0; top: 100%; background: white; border: 1px solid #ddd; padding: 15px; width: 280px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); z-index: 999; }
    .cart-toggle:hover .cart-dropdown { display: block; }
    .ofertas-container .card { position: relative; }
    .ofertas-container .badge-descuento { top: 10px; left: 10px; }
    .add-cart-btn { background-color: #6f42c1; color: white; border: none; padding: 8px 12px; border-radius: 5px; width: 100%; }
    .add-cart-btn:hover { background-color: #5a32a3; }
  </style>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Carrito Script -->
  <script>
    const cart = [];

    function updateCartDropdown() {
      const dropdown = document.getElementById('cart-dropdown');
      dropdown.innerHTML = '';

      if (cart.length === 0) {
        dropdown.innerHTML = '<p class="text-center text-muted">Tu carrito está vacío</p>';
        return;
      }

      let total = 0;
      cart.forEach(product => {
        total += product.price;
        const item = document.createElement('div');
        item.classList.add('mb-2');
        item.innerHTML = `
          <div class="d-flex justify-content-between">
            <div>
              <strong>${product.name}</strong>
              <p class="text-muted small mb-0">${product.desc}</p>
            </div>
            <div>
              <span class="fw-bold">$${product.price.toFixed(2)}</span>
            </div>
          </div>
          <hr>
        `;
        dropdown.appendChild(item);
      });

      const totalSection = document.createElement('div');
      totalSection.innerHTML = `
        <div class="d-flex justify-content-between fw-bold mb-2">
          <span>Total:</span>
          <span>$${total.toFixed(2)}</span>
        </div>
        <a href="/checkout" class="btn btn-purple w-100">Proceder al pago</a>
      `;
      dropdown.appendChild(totalSection);
    }

    document.querySelectorAll('.add-cart-btn').forEach((btn, index) => {
      btn.addEventListener('click', () => {
        const cards = document.querySelectorAll('.ofertas-container .card');
        const card = cards[index];
        const name = card.querySelector('.card-title').innerText;
        const desc = card.querySelector('.card-text').innerText;
        const price = parseFloat(card.querySelector('.fw-bold').innerText.replace('$', ''));

        cart.push({ name, desc, price });
        updateCartDropdown();
      });
    });

    document.querySelector('.cart-toggle').addEventListener('mouseover', updateCartDropdown);
  </script>

</body>
</html>
