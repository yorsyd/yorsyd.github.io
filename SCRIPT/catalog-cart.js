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
        name: 'Nike Air Max 2013 Lime Green',
        image: 'Nike/nike1.png',
        price: 594000
    },
    {
        id: 2,
        name: 'Nike Air Force 1 Low Yellow',
        image: 'Nike/nike2.png',
        price: 1300000
    },
    {
        id: 3,
        name: "Nike Mens's Lupinek Flyknit",
        image: 'Nike/nike3.png',
        price: 986000
    },
    {
        id: 4,
        name: "Nike Kevin Durant 9 Black White",
        image: 'Nike/nike4.png',
        price: 650000
    },
    {
        id: 5,
        name: "Converse Jhon Varatos Black Low",
        image: 'Converse/converse1.png',
        price: 849000
    },
    {
        id: 6,
        name: "Converse CT All Star High Black",
        image: 'Converse/converse2.png',
        price: 1059000
    },
    {
        id: 6,
        name: "Converse CT All Star Low Pink",
        image: 'Converse/converse3.png',
        price: 1250000
    },
    {
        id: 6,
        name: "Converse CT All Star High White",
        image: 'Converse/converse4.png',
        price: 1199000
    },
    {
        id: 7,
        name: "Vans SK8 Hi Pro Black White",
        image: 'Vans/vans1.png',
        price: 849000
    },
    {
        id: 8,
        name: "Vans Slip on Checkerboard",
        image: 'Vans/vans2.png',
        price: 450000
    },
    {
        id: 9,
        name: "Vans Yatch Club Red Slip on",
        image: 'Vans/vans3.png',
        price: 469000
    },
    {
        id: 10,
        name: "Vans Old School Black White",
        image: 'Vans/vans4.png',
        price: 749000
    },
    {
        id: 11,
        name: "New Balance ML574CPJ",
        image: 'New Balance/nb4.png',
        price: 1299000
    },
    {
        id: 12,
        name: "New Balance 997 Brown",
        image: 'New Balance/nb5.png',
        price: 2250000
    },
    {
        id: 13,
        name: "New Balance 574 Black",
        image: 'New Balance/nb2.png',
        price: 1100000
    },
    {
        id: 14,
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
