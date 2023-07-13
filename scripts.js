// Obtener elementos del formulario
const firstNameInput = document.getElementById('firstName');
const lastNameInput = document.getElementById('lastName');
const emailInput = document.getElementById('email');
const quantityInput = document.getElementById('quantity');
const categorySelect = document.getElementById('category');
const summaryButton = document.getElementById('summaryButton');
const totalPayment = document.getElementById('totalPayment');
const totalPriceImput = document.getElementById('totalPrice');
const clearButton = document.getElementById('clearButton');
const form = document.getElementById('ticketForm');

// Calcular y mostrar el resumen del pago
summaryButton.addEventListener('click', function() {
  const firstName = firstNameInput.value;
  const lastName = lastNameInput.value;
  const email = emailInput.value;
  const quantity = parseInt(quantityInput.value);
  const category = categorySelect.value;
  let discount = 0;

  switch (category) {
    case 'estudiante':
      discount = 80;
      break;
    case 'trainee':
      discount = 50;
      break;
    case 'junior':
      discount = 15;
      break;
  }

  const price = 200; // Precio base por ticket
  const totalPrice = price * quantity * (100 - discount) / 100;
  totalPayment.textContent = `Total a Pagar: $${totalPrice}`;
  console.log(totalPriceImput)
  totalPriceImput.value = totalPrice;


  // Mostrar resumen
  alert(`Resumen de Pago:

    Nombre: ${firstName}
    Apellido: ${lastName}
    Correo: ${email}
    Cantidad: ${quantity}
    Categoría: ${category}
    Total a Pagar: $${totalPrice}`);
});

// Borrar el formulario
clearButton.addEventListener('click', function() {
  form.reset();
  totalPayment.textContent = 'Total a Pagar: $0';
});

