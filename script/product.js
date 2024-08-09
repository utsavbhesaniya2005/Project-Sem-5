let cartItemS =[];
itemProductPage();

function AddToCart(itemsId) {
  cartItems.push(itemsId);
}

function itemProductPage() {
  let itemsContainerElement = document.querySelector('.items-container');

let innerHTML = '';
items.forEach(item =>{
  innerHTML += ` <div class="item-container col-md-3 mt-5 h-100 py-0 p-m-0">
          <div class="card border-dark">
            <div class="overlay">
              <button type="button" class="btn btn-secondary " title="Quick View"><i><img
                    src="./assets/images/product_page/views.png" alt="" width="30px"></i></button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img
                    src="./assets/images/product_page/heart.png" alt="" width="30px"></i></button>
              <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img
                    src="./assets/images/product_page/add.png" alt="" width="30px"></i></button>
            </div> 
            
            <div class="item-image">
              <img class=" m-1 rounded-2 img-fluid" src="${item.item_image}" alt="">
            </div>
            <hr class="m-0 m-1">
            <hr class="m-0 p-1">
            <h3 class="item-name">${item.item_name}</h3>
            <hr class="m-0 m-1">
            <hr class="m-0 p-1">
            <div class="product-price">
              <span class="current-price">${item.current_price}</span>
              <span class="original-price">${item.original_price}</span>
              <span class="discount">(${item.item_discount}% OFF)</span>
            </div>
            <hr class="m-0 mt-1">
            <hr class="mb-0 m-1">
            <div class="row">
              <div class="col-6">
                <button class="cartBtn mt-3 mb-3 m-3 onclick="AddToCart(${item})">
                  <svg class="cart " fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z">
                    </path>
                  </svg>
                  ADD TO CART
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512" class="product">
                    <path
                      d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z">
                    </path>
                  </svg>
                </button>
              </div>
              <div class="col-6">
                <button class="bookmarkBtn m-3">
                  <span class="IconContainer">
                    <svg viewBox="0 0 384 512" height="0.9em" class="icon">
                      <path
                        d="M0 48V487.7C0 501.1 10.9 512 24.3 512c5 0 9.9-1.5 14-4.4L192 400 345.7 507.6c4.1 2.9 9 4.4 14 4.4c13.4 0 24.3-10.9 24.3-24.3V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48z">
                      </path>
                    </svg>
                  </span>
                  <p class="text text-wi">Save</p>
                </button>
              </div>
            </div>
          </div>
        </div>`
});
itemsContainerElement.innerHTML = innerHTML;
}
