// document.addEventListener('alpine:init', () => {
//     Alpine.data('products', () => ({

//         items: [
//             { id: 1, name : 'Robusta Brazil', img: '3.jpeg', price: 20000}, 
//             { id: 2, name : 'Arabica Blend', img: '2.jpg', price: 20000}, 
//             { id: 3, name : 'Primo Passo', img: '3.jpg', price: 20000}, 
//             { id: 4, name : 'Aceh Gayo', img: '4.jpg', price: 20000}, 
//             { id: 5, name : 'Sumatera Mandheling', img: '5.jpg', price: 20000}, 
//         ]


//       }));
//     });

document.addEventListener('alpine:init', () => {
    Alpine.data('products', () => ({
        items: [
            { id: 1, name: 'Chatbot Whatsapp 3 Bulan', img: 'wa.png', price: 150000 },
            { id: 2, name: 'Chatbot Whatsapp 1 Tahun', img: 'wa.png', price: 185000 },
            { id: 3, name: 'Chatbot Gmail 3 Bulan', img: '44.jpeg', price: 150000 },
            { id: 4, name: 'Chatbot Gmail 1 Tahun', img: '44.jpeg', price: 185000  },
            { id: 5, name: 'Chatbot Tokped 3 Bulan', img: 'tokped.jpg', price: 150000 },
            { id: 6, name: 'Chatbot Tokped 1 Tahun', img: 'tokped.jpg', price: 185000  },
            { id: 7, name: 'Chatbot Facebook 3 Bulan', img: 'fbb.jpg', price: 150000},
            { id: 8, name: 'Chatbot Facebook 1 Tahun', img: 'fbb.jpg', price: 185000  },
            { id: 9, name: 'Chatbot Instagram 3 Bulan' , img: 'insta.jpg', price: 150000},
            { id: 10, name: 'Chatbot Instagram 1 Tahun', img: 'insta.jpg', price: 185000 },
            { id: 11, name: 'Bundle Stater 3 Bulan', img: 'bundle3.jpg', price: 399000 },
            { id: 12, name: 'Bundle Stater 1 Tahun', img: 'bundle.jpg', price: 249000 },
            { id: 13, name: 'Bundle Business 3 Bulan', img: 'bundle3.jpg', price: 849000},
            { id: 14, name: 'Bundle Business 1 Tahun', img: 'bundle.jpg', price: 699000 }
        ],
    }));

    Alpine.store('cart', {
        items: [],
        total: 0,
        quantity: 0,
        add(newItem) {
            const cartItem = this.items.find(item => item.id === newItem.id);

            if (!cartItem) {
                this.items.push({ ...newItem, quantity: 1, total: newItem.price });
                this.quantity++;
                this.total += newItem.price;
            } else {
                this.items = this.items.map(item => {
                    if (item.id !== newItem.id) {
                        return item;
                    } else {
                        item.quantity++;
                        item.total = item.price * item.quantity;
                        this.quantity++;
                        this.total += item.price;
                        return item;
                    }
                });
            }
        },
        remove(id) {
            const cartItem = this.items.find(item => item.id === id);

            if (cartItem.quantity > 1) {
                this.items = this.items.map(item => {
                    if (item.id !== id) {
                        return item;
                    } else {
                        item.quantity--;
                        item.total = item.price * item.quantity;
                        this.quantity--;
                        this.total -= item.price;
                        return item;
                    }
                });
            } else if (cartItem.quantity === 1) {
                this.items = this.items.filter(item => item.id !== id);
                this.quantity--;
                this.total -= cartItem.price;
            }
        }
    });
});

// Form validation
const checkoutButton = document.querySelector('.checkout-button');
checkoutButton.disabled = true;

const form = document.querySelector('#checkoutForm');
form.addEventListener('keyup', function () {
    let allFieldsFilled = true;
    for (let i = 0; i < form.elements.length; i++) {
        if (form.elements[i].value.length === 0) {
            allFieldsFilled = false;
            break;
        }
    }

    if (allFieldsFilled) {
        checkoutButton.disabled = false;
        checkoutButton.classList.remove('disabled');
    } else {
        checkoutButton.disabled = true;
        checkoutButton.classList.add('disabled');
    }
});

// Kirim data checkout
checkoutButton.addEventListener('click', async function (e) {
    e.preventDefault();
    const formData = new FormData(form);
    const data = new URLSearchParams(formData);
    const objData = Object.fromEntries(data);

    try {
        const response = await fetch('php/placeOrder.php', {
            method: 'POST',
            body: data,
        });
        const token = await response.text();
        window.snap.pay(token);
    } catch (err) {
        console.log(err.message);
    }
});

// Format WA
const formatMessage = (obj) => {
    return `Data Customer
    Nama : ${obj.name}
    Email : ${obj.email}
    No HP : ${obj.phone}

    Data Pesanan
    ${JSON.parse(obj.items).map(item => `${item.name} (${item.quantity} x ${rupiah(item.total)})\n`).join('')} 
    TOTAL : ${rupiah(obj.total)}
    Nuhun`;
};

// Konversi ke rupiah
const rupiah = (number) => {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    }).format(number);
};



{/* <script>
document.addEventListener('alpine:init', () => {
  Alpine.data('products', () => ({
    items: [
      { id: 1, name: 'Robusta Brazil', img: '1.jpg', price: 90000 },
      { id: 2, name: 'Arabica Blend', img: '2.jpg', price: 80000 },
      { id: 3, name: 'Primo Passo', img: '3.jpeg', price: 65000 },
      { id: 4, name: 'Aceh Gayo', img: '4.jpg', price: 50000 },
      { id: 5, name: 'Sumatera Mandheling', img: '5.jpeg', price: 20000 },
      { id: 6, name: 'Sumatera Mandhng', img: '5.jpeg', price: 60000 },
      { id: 7, name: 'Sumatera Mandheg', img: '5.jpeg', price: 70000 }
    ],
  }));

  Alpine.store('cart', {
    items: [],
    total: 0,
    quantity: 0,
    add(newItem) {
      const cartItem = this.items.find(item => item.id === newItem.id);

      if (!cartItem) {
        this.items.push({ ...newItem, quantity: 1, total: newItem.price });
        this.quantity++;
        this.total += newItem.price;
      } else {
        this.items = this.items.map(item => {
          if (item.id !== newItem.id) {
            return item;
          } else {
            item.quantity++;
            item.total = item.price * item.quantity;
            this.quantity++;
            this.total += item.price;
            return item;
          }
        });
      }
    },
    remove(id) {
      const cartItem = this.items.find(item => item.id === id);

      if (cartItem.quantity > 1) {
        this.items = this.items.map(item => {
          if (item.id !== id) {
            return item;
          } else {
            item.quantity--;
            item.total = item.price * item.quantity;
            this.quantity--;
            this.total -= item.price;
            return item;
          }
        });
      } else if (cartItem.quantity === 1) {
        this.items = this.items.filter(item => item.id !== id);
        this.quantity--;
        this.total -= cartItem.price;
      }
    }
  });
});

const rupiah = number => {
  return new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR',
    minimumFractionDigits: 0
  }).format(number);
};
</script> */}