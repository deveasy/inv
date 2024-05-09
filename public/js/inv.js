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
        },
        error: function(xhr, status, error) {
            console.error("Error searching for products:", error);
        }
    });
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
});

$(document).ready(function(){
    var selectedRow = null;
    var productId = null;
    var productName = null;
    var productPrice = null;

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
            // alert('Selected: ' + $(selectedRow).html());
            productName = $(selectedRow).find('.productName').text();
            productPrice = $(selectedRow).find('.productPrice').text();
            productId = $(selectedRow).attr('id');
            // alert(productName + productPrice + productId);
            addItemToCart(productId, productName, productPrice);
        }
    });
});

function addToCart(productId) {
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

function addItemToCart(productId, productName, productPrice){
    var cartList = $('#cartItems');

    var itemHtml = `
        <div class="nk-tb-item" id="${productId}">
            <div class="nk-tb-col tb-col-xxl">
                <span>${productName}</span>
            </div>
            <div class="nk-tb-col tb-col-sm">
                <div class="form-control-wrap number-spinner-wrap">
                    <button class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></button>
                    <input type="number" class="form-control number-spinner" value="1">
                    <button class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></button>
                </div>
            </div>
            <div class="nk-tb-col tb-col-sm">
                <span>${productPrice}</span>
            </div>
            <div class="nk-tb-col">
                <div>
                    <input type="text" class="form-control-plaintext total" value="${parseFloat(productPrice) * parseInt($(productId).closest('input').val())}">
                </div>
            </div>
            <div class="nk-tb-col nk-tb-col-tools">
                <ul class="nk-tb-actions gx-1">
                    <li>
                        <div class="drodown">
                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="link-list-opt no-bdr">
                                    <li><a href="#" data-toggle="modal" data-target="#editCategory"><em class="icon ni ni-edit-fill"></em><span>Edit Category</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-trash-fill"></em><span>Trash</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- .nk-tb-item -->
    `;
    cartList.append(itemHtml);
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