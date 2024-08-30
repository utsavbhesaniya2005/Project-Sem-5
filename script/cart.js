
// let cartItemObject
// onLoad()

// function onLoad() {
//   loadCartItemObjects();
//   displayCartItems()
// }
//   function loadCartItemObjects() {
//     // console.log(cartItems);
//     cartItemObject = cartItems.map(itemId => { 
//       for (let i = 0; i < items.length; i++) {
//         if (itemId == items[i].id) {
//           return items[i]
//         }
//       }
//     });
//   //   console.log(cartItemObject);
//   // }
  
//   // function displayCartItems() {
  
//   //   let ContainerElement = document.querySelector('.cart-items-container');
//   //   ContainerElement.innerHTML = (cartItems)
//   //   cartItemObject.forEach(cartItems => {
//   //     innerHTML +=generateItemHTML

//   //   });
//   //   ContainerElement.innerHTML = innerHTML
//   // }

//   // function generateItemHTML(item) {
//   //   return `  <div class="cart-item-container row mb-2 border p-1 ">
//   //                           <div class="item-left-part col-4 m-0 p-0 ">
//   //                               <img width="120px" class="cart-item-image" src="${item.item_image}" alt="">
//   //                           </div>
//   //                           <div class="item-right-part col-7">
//   //                               <div class="item-name">${item.item_name}</div>
//   //                               <div class="price-container">${item.current_price}</div>
//   //                           </div>
//   //                           <div class="remove-from-cart col-1" onclick="">X</div>

//   //                       </div>`
//   // }



//   const CONVENIENCE_FEES = 99;
// let bagItemObjects;
// onLoad();

// function onLoad() {
//   // loadBagItemObjects();
//   displayCartItems();
//   // displayBagSummary();
// }

// // function displayBagSummary() {
// //   let bagSummaryElement = document.querySelector('.bag-summary');
// //   let totalItem = bagItemObjects.length;
// //   let totalMRP = 0;
// //   let totalDiscount = 0;

// //   bagItemObjects.forEach(bagItem => {
// //     totalMRP += bagItem.original_price;
// //     totalDiscount += bagItem.original_price - bagItem.current_price;
// //   });

// //   let finalPayment = totalMRP - totalDiscount + CONVENIENCE_FEES;
  

// //   bagSummaryElement.innerHTML = `
// //     <div class="bag-details-container">
// //     <div class="price-header">PRICE DETAILS (${totalItem} Items) </div>
// //     <div class="price-item">
// //       <span class="price-item-tag">Total MRP</span>
// //       <span class="price-item-value">₹${totalMRP}</span>
// //     </div>
// //     <div class="price-item">
// //       <span class="price-item-tag">Discount on MRP</span>
// //       <span class="price-item-value priceDetail-base-discount">-₹${totalDiscount}</span>
// //     </div>
// //     <div class="price-item">
// //       <span class="price-item-tag">Convenience Fee</span>
// //       <span class="price-item-value">₹99</span>
// //     </div>
// //     <hr>
// //     <div class="price-footer">
// //       <span class="price-item-tag">Total Amount</span>
// //       <span class="price-item-value">₹${finalPayment}</span>
// //     </div>
// //   </div>
// //   <button class="btn-place-order">
// //     <div class="css-xjhrni">PLACE ORDER</div>
// //   </button>
// //   `;
// // }

// // function loadBagItemObjects() {
// //   console.log(bagItems);
// //   bagItemObjects = bagItems.map(itemId => {
// //     for (let i = 0; i < items.length; i++) {
// //       if (itemId == items[i].id) {
// //         return items[i];
// //       }
// //     }
// //   });
// //   console.log(bagItemObjects);
// // }

// function displayCartItems() {
//   let containerElement = document.querySelector('.cart-items-container');
//   let innerHTML = '';
//   bagItemObjects.forEach(bagItem => {
//     innerHTML += generateItemHTML(bagItem);
//   });
//   containerElement.innerHTML = innerHTML;
// }

// function removeFromBag(itemId) {
//   bagItems = bagItems.filter(bagItemId => bagItemId != itemId);
//   localStorage.setItem('bagItems', JSON.stringify(bagItems));
//   loadBagItemObjects();
//   displayBagIcon();
//   displayBagItems();
//   displayBagSummary();
// }

// function generateItemHTML(item) {
//   return `<div class="cart-item-container row mb-2 border p-1 ">
//                             <div class="item-left-part col-4 m-0 p-0 ">
//                                 <img width="120px" class="cart-item-image" src="${item.item_image}" alt="">
//                             </div>
//                             <div class="item-right-part col-7">
//                                 <div class="item-name">${item.item_name}</div>
//                                 <div class="price-container">${item.current_price}</div>
//                             </div>
//                             <div class="remove-from-cart col-1" onclick="">X</div>

//                         </div>`
// }
