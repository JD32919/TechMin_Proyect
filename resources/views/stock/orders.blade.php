<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

     
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/styles_orders.css') }}">

</head>

<header class="header-custom-s">

    <div class="navbar_search">
        <svg class="icon-search" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="11" cy="11" r="8" stroke="black" stroke-width="2"/>
            <line x1="16" y1="16" x2="22" y2="22" stroke="black" stroke-width="2"/>
        </svg>
        <input type="text" class="search-input" placeholder="Buscar...">
    </div>


    <div class="user_menu">

        <img src="assets/image/icono_usuario.png" alt="Client Photo">
        
        <!-- Formulario de logout -->
        <form action="/logout" method="POST" style="display:inline;">

            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>
                    
    <div class="separator"></div>
</header>
 
  
<body>
    <div class="back-products">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect x="30" width="30" height="30" transform="rotate(90 30 0)" fill="url(#pattern0_1122_838)" />
            <defs>
                <pattern id="pattern0_1122_838" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1122_838" transform="scale(0.00390625)" />
                </pattern>
                <image id="image0_1122_838" width="256" height="256" preserveAspectRatio="none"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAQAAAD2e2DtAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAHdElNRQfhCgUEMx8SyEoNAAADLklEQVR42u3dMW4VZxSG4WOHTSBBaGELNFgKe0A0UAVBR2NIKgw1goKCtdgroEMKBalDhxASQlTAnRRJLBTL9sy9M3POP36eu4Fz//eThaEgAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAM6WrewDjtiOy/FzbMe7eBvfso8Zybm4EhdjFX/Fn7HKPqay8/E83kf37+djvIxL2Sdt7FK8jI+H3+l9PI/z2SdVdSM+HT7Uf58vcSf7rI38Gl+OfKdPcTP7rIruxurIU/3z2cs+bW2PjvlGq7iXfVo1V+PrMY/VRRePs89by94J3+hrXM0+r5KteH3CY7U5gb1TvtHrgn8AT7NzymO1N4HT8nfRxU72kXU87fFcLU2gT/4unmafWcd+rwdrZQL98nexn31oHa96PlkLE+ibv4tX2afWcdD70apPoH/+Lg6yj63j2YBnqzyBIfm7eJZ9bh2/DHq4qhMYlr+L69kH17EVfzQ/gaH53/h7gB9di29NT2Bo/u/+FuD/7g98wkr/RjA0fxf3s0+u6OHgZ3ySfXJErJP/9+yTq2pxAvKPqrUJyD+6liYg/yRamYD8k2lhAvJPqvoE5J9c5QnIP4uqE5B/NhUnIP+sqk1A/tlVmoD8KapMQP40FSYgf6rsCcifLnMC8peQNQH5y8iYgPylzD0B+cuZcwLylzTXBOQva44JyF/a1BOQv7wpJyB/E6aagPzNmGIC8jdl7AnI35wxJyB/k8aagPzNGmMC8jdt0wnI37xNJiD/Iqw7AfkX48HglI/XyP9b9tfkeLuDcw79PMz+ipxs2gnI34DpJiB/I6aZgPwNGX8C8jdm3AnI36DhvxTKvzDj/BSQv2GbT0D+xm02AfkXYP0JyL8Q601A/gUZ/huB/Asz7KeA/AvUfwLyL1S/Cci/YKdPQP6F25X/rNuNlfxn2634fCT+57idfRbzuRAv4sNh/A/xIi5kn5TjLP/vlT/FlbgYEe/ibXzPPgYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACYx98yHTW7K/pLcAAAAC56VFh0ZGF0ZTpjcmVhdGUAAHjaMzIwNNc1NNA1MA0xMLEyNbQyNtA2MLAyMAAAQVYFBTFJt+QAAAAuelRYdGRhdGU6bW9kaWZ5AAB42jMyMDTXNTTQNTANMTCxMjW0MjbQNjCwMjAAAEFWBQUYdh9sAAAAAElFTkSuQmCC" />
            </defs>
        </svg>
            
        <p>Continue Shopping</p>
    </div>
    <div class="cart-container">
        <div class="cart-items-container">
            <div class="title">
                <h2 class="tit" >Orders</h2>
                <p class="subtitle">Shopping cart</p>
                <p class="espec">You have 3 item in your cart</p>
            </div>
            <!-- Product 1 -->
        
            <div class="cart-item-card">
                <img src="./images/Product_1.png" alt="Product Image" class="product-image">
                <div class="item-details">
                    <p class="item-description">Atlas Copco SmartROC D50 Dr...</p>
                    <div class="item-price-quantity">
                        <div class="quantity-control">
                            <button class="qty-btn">-</button>
                            <input type="text" value="1">
                            <button class="qty-btn">+</button>
                        </div>
                        <div class="price-delete-container">
                            <span class="price">$96,000</span>
                            <button class="delete-icon">🗑️</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="cart-item-card">
                <img src="./images/Product_1.png" alt="Product Image" class="product-image">
                <div class="item-details">
                    <p class="item-description">Atlas Copco SmartROC D50 Dr...</p>
                    <div class="item-price-quantity">
                        <div class="quantity-control">
                            <button class="qty-btn">-</button>
                            <input type="text" value="1">
                            <button class="qty-btn">+</button>
                        </div>
                        <div class="price-delete-container">
                            <span class="price">$120,000</span>
                            <button class="delete-icon">🗑️</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Product 3 -->
            <div class="cart-item-card">
                <img src="assets/image/trucks_stock.png" alt="Product Image" class="product-image">
                 
                <div class="item-details">
                    <p class="item-description">Atlas Copco SmartROC D50 Dr...</p>
                    <div class="item-price-quantity">
                        <div class="quantity-control">
                            <button class="qty-btn">-</button>
                            <input type="text" value="1">
                            <button class="qty-btn">+</button>
                        </div>
                        <div class="price-delete-container">
                            <span class="price">$150,000</span>
                            <button class="delete-icon">🗑️</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="card-details-container">
            <h2>Card Details</h2>
            <p>Card type</p>
            <div class="card-type-logos">
                <button class="card-button">
                    <img src="assets/image/Rectangle 9.png" alt="MasterCard">
                     
                </button>
                <button class="card-button">
                    <img src="assets/image/Rectangle 10.png" alt="Visa">
                     
                </button>
            </div>
            <form class="payment-form">
                <div class="form-group">
                    <label>Name on card</label>
                    <input type="text" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label>Card Number</label>
                    <input type="text" placeholder="1111 2222 3333 4444" required>
                </div>
                <div class="card-extra-info">
                    <div class="form-group">
                        <label>Expiration date</label>
                        <input type="text" placeholder="mm/yy" required>
                    </div>
                    <div class="form-group">
                        <label>CVV</label>
                        <input type="text" placeholder="123" required>
                    </div>
                </div>
                <div class="payment-summary">
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>$0</span>
                    </div>
                    <div class="summary-row">
                        <span>Total (Tax incl.)</span>
                        <span>$0</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span>$0</span>
                    </div>
                </div>
                <button type="submit" class="checkout-button">Checkout</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/script-orders.js') }}"></script>
     

</body>
</html>
