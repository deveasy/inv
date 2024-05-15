const cartItems = {};

var products = {};

function searchProducts(searchTerm) {
    // Send an AJAX request to search for products
    $.ajax({
        type: "GET",
        url: "/sales/search",
        data: {
            searchTerm: searchTerm,
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            // Update the product list display with search results
            displaySearchProducts(response);
            products = response;
        },
        error: function(xhr, status, error) {
            console.error("Error searching for products:", error);
        }
    });
}

function getProducts(){
    //send an AJAX request to get products
    $.ajax({
        type: "GET",
        url: "/products",
        data: {
            _token: '{{ csrf_token() }}'
        },
        success: function(response){
            products = response;
        },
        error: function(xhr, status, error){
            console.error("Error getting the products:", error);
        }
    })
}

function displaySearchProducts(products){
    var productList = $('#productList');
    productList.empty(); //clear previous products
    var count = 1;

    //Iterate throught the search results and append them to the product list
    $.each(products, function(index, product){
        var productHtml = `
            <tr id="${product.id}">
                <th scope="row">${count}</th>
                <td class="productName">${product.product_name}</td>
                <td class="productPrice">${product.price}</td>
                <td>200</td>
            </tr>
        `;
        count++;
        productList.append(productHtml);
    });
}

$(document).ready(function() {
    $('#searchInput').focus();
    // Trigger search when the search input value changes
    $('#searchInput').on('input', function() {
        const searchTerm = $(this).val();
        searchProducts(searchTerm);
    });
    getProducts();
});

$(document).ready(function(){
    var selectedRow = null;
    var productId = null;

    //hilight the initially selected row
    $('#productList tr:first').addClass('bg-light');

    //function to handle arrow key navigation
    $(document).keydown(function(e){
        if(e.keyCode === 38 || e.keyCode === 40){ //up or down arrow key
            e.preventDefault(); //prevent page scroll

            var rows = $('#productList tr');
            var currentIndex = rows.index(selectedRow);
            var nextIndex = currentIndex + (e.keyCode === 38 ? -1 : 1);

            if(nextIndex >= 0 && nextIndex < rows.length){
                $('#productList tr:first').removeClass('bg-light');
                $(selectedRow).removeClass('bg-light');
                selectedRow = rows[nextIndex];
                $(selectedRow).addClass('bg-light');
            }
        }
        else if(e.keyCode === 13 ){ //Enter key
            productId = $(selectedRow).attr('id');
            addToCart(productId);
        }
    });
});

// Function to add item to cart
function addToCart(productId) {
    if (cartItems[productId]) {
      cartItems[productId].quantity++;
    } else {
      cartItems[productId] = { product: products.find(p => p.id == productId), quantity: 1 };
    }
    renderCart();
  }

function addToCartAjax(productId) {
    // Send an AJAX request to add the product to the cart
    $.ajax({
        type: "POST",
        url: "{{ route('cart.add') }}",
        data: {
            productId: productId,
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            // Update the cart display or perform any other action
            console.log("Product added to cart successfully.");
        },
        error: function(xhr, status, error) {
            console.error("Error adding product to cart:", error);
        }
    });
}

function renderCart(){
    var cartList = $('#cartItems');
    cartList.empty();

    Object.values(cartItems).forEach(item => {
        var itemHtml = `
            <tr class="tb-odr-item" id="${item.product.id}">
                <td class="tb-odr-info">
                    <span class="tb-odr-id"><a href="html/invoice-details.html">${item.product.product_name}</a></span>
                </td>
                <td class="tb-odr-info">
                    <span class="tb-odr-date">${item.quantity}</span>
                </td>
                <td class="tb-odr-info">
                    <span class="tb-odr-date">
                        <span class="amount">${item.product.price}</span>
                    </span>
                </td>
                <td class="tb-odr-amount">
                    <span class="tb-odr-total">
                        <span class="amount">${parseFloat(parseFloat(item.product.price) * parseInt(item.quantity)).toFixed(2)}</span>
                    </span>
                </td>
                <td class="tb-odr-action">
                    <div class="tb-odr-btns d-none d-sm-inline">
                        <a href="#" class="btn btn-icon btn-white btn-dim btn-sm btn-primary delete-item"><em class="icon ni ni-cross-sm "></em></a>
                    </div>
                </td>
            </tr><!-- .tb-odr-item -->
        `;
        cartList.append(itemHtml);
    });
    
}

function removeFromCart(cartItemId) {
    // Send an AJAX request to remove the item from the cart
    $.ajax({
        type: "POST",
        url: "{{ route('cart.remove') }}",
        data: {
            cartItemId: cartItemId,
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            // Update the cart display or perform any other action
            console.log("Product removed from cart successfully.");
        },
        error: function(xhr, status, error) {
            console.error("Error removing product from cart:", error);
        }
    });
}

$(document).ready(function(){
    $('.tb-odr-btns a').on('click', function(e){
        e.preventDefault();
        $(this).closest('tr').remove();
    });
});

function calculateTotalPrice() {
    let totalPrice = 0;
    $('.cart-item').each(function() {
        const price = parseFloat($(this).find('.price').text().replace('$', ''));
        const quantity = parseInt($(this).find('.quantity').text());
        totalPrice += price * quantity;
    });
    $('#totalPrice').text('$' + totalPrice.toFixed(2));
}

// Call the calculateTotalPrice function whenever the page loads or the cart is modified
$(document).ready(function() {
    calculateTotalPrice();
});