// let cartItems =[];

// onLoad()
// function onLoad() {
//    displayItemProductPage();
//    displayCartIcon()
//   let cartItemsStr = localStorage.getItem('cartItems')
//   cartItems =cartItemsStr ? JSON.parse(cartItemsStr) : []
// }

// function addToCart(itemId) {
//   cartItems.push(itemId);
//   // console.log(itemId);
//   displayCartIcon()
//   localStorage.setItem('cartItems',JSON.stringify(cartItems))
// }

// function displayCartIcon(params) {
//   let cartItemsCountElement = document.querySelector(".cart-item-count")
//   if (cartItems.length > 0) {
//     cartItemsCountElement.style.visibility = "visible"
//     cartItemsCountElement.innerText = cartItems.length
//   } else {
//     cartItemsCountElement.style.visibility = "hidden"

//   }
//   cartItemsCountElement.innerText = cartItems.length
// }

// function displayItemProductPage() {
//   let itemsContainerElement = document.querySelector('.items-container');
//   if (!itemsContainerElement) {
//     return
//   }

// let innerHTML = '';
// items.forEach(item =>{
//   innerHTML += ``
// });
// itemsContainerElement.innerHTML = innerHTML;
// }
