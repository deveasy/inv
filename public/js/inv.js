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
            <tr>
                <th scope="row">${count}</th>
                <td>${product.product_name}</td>
                <td>${product.price}</td>
                <td>200</td>
            </tr>
        `;
        count++;
        productList.append(productHtml);
    });
}

$(document).ready(function() {
    // Trigger search when the search input value changes
    $('#searchInput').on('input', function() {
        const searchTerm = $(this).val();
        searchProducts(searchTerm);
    });
});

$(document).ready(function(){
    var selectedRow = null;

    //hilight the initially selected row
    $('#productTable tr:first').addClass('bg-dark-subtle');

    //function to handle arrow key navigation
    $(document).keydown(function(e){
        if(e.keyCode === 38 || e.keyCode === 40){ //up or down arrow key
            e.preventDefault(); //prevent page scroll

            var rows = $('#productTable tr');
            var currentIndex = rows.index(selectedRow);
            var nextIndex = currentIndex + (e.keyCode === 38 ? -1 : 1);

            if(nextIndex >= 0 && nextIndex < rows.length){
                $(selectedRow).removeClass('bg-dark-subtle');
                selectedRow = rows[nextIndex];
                $(selectedRow).addClass('bg-dark-subtle');
            }
        }
        else if(e.keyCode === 13 ){ //Enter key
            alert('Selected: ' + $(selectedRow).text());
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