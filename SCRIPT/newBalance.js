let shoppingCart = document.querySelector('.shopping');
let closeShoppingBtn = document.querySelector('.closeShopping');
let itemList = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let totalDiv = document.querySelector('.total');
let quantitySpan = document.querySelector('.quantity');

shoppingCart.addEventListener('click', () => {
    body.classList.add('active');
});

closeShoppingBtn.addEventListener('click', () => {
    body.classList.remove('active');
});

let products = [
    {
        id: 1,
        name: "New Balance ML574CPJ",
        image: 'New Balance/nb4.png',
        price: 1299000
    },
    {
        id: 2,
        name: "New Balance 997 Brown",
        image: 'New Balance/nb5.png',
        price: 2250000
    },
    {
        id: 3,
        name: "New Balance 574 Black",
        image: 'New Balance/nb2.png',
        price: 1100000
    },
    {
        id: 4,
        name: "New Balance 373 Black",
        image: 'New Balance/nb3.png',
        price: 1370000
    },
];

let listCardItems = [];

function initApp() {
    products.forEach((product, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="img/${product.image}">
            <div class="title">${product.name}</div>
            <div class="price">Rp ${product.price.toLocaleString()}</div>
            <button onclick="addToCart(${key})">Add To Cart</button>`;
        itemList.appendChild(newDiv);
    });
}

initApp();

function addToCart(key) {
    if (listCardItems[key] == null) {
        listCardItems[key] = JSON.parse(JSON.stringify(products[key]));
        listCardItems[key].count = 1;
    }
    updateCart();
}

function updateCart() {
    listCard.innerHTML = '';
    let totalCount = 0;
    let totalPrice = 0;
    listCardItems.forEach((item, key) => {
    totalPrice += item.price * item.count;
    totalCount += item.count;
    if (item != null) {
        let newDiv = document.createElement('li');
        newDiv.innerHTML = `
            <div><img src="img/${item.image}"></div>
            <div>${item.name}</div>
            <div>${item.price.toLocaleString()}</div>
            <div>
                <button onclick="changeQuantity(${key}, ${item.count - 1})">-</button>
                <div class="count">${item.count}</div>
                <button onclick="changeQuantity(${key}, ${item.count + 1})">+</button>
            </div>`;
        listCard.appendChild(newDiv);
        }
    });
    totalDiv.innerText = totalPrice.toLocaleString();
    quantitySpan.innerText = totalCount;
}

function changeQuantity(key, quantity) {
    if (quantity === 0) {
        delete listCardItems[key];
    } else {
        listCardItems[key].count = quantity;
    }
    updateCart();
}
