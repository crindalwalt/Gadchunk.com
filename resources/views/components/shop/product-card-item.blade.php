@props(['product'])
<div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="product-wrap mb-50">
        <div class="product-img product-img-zoom mb-25">
            <a href="../frontEnd/product-details.html">
                <img src="assets/images/product/product-153.jpg" alt="">
            </a>
        </div>
        <div class="product-content">
            <h4>
                <a href="../frontEnd/product-details.html">
                    {{ $product->name }}
                </a>
            </h4>
            <div class="product-price">
                <span>PKR {{ $product->discountPrice }}</span>
                <span class="old-price">PKR {{ $product->orignalPrice }}</span>
            </div>
        </div>
        <div class="product-action-position-1 text-center">
            <div class="product-content">
                <h4><a href="../frontEnd/product-details.html">{{ $product->name }}</a></h4>
                <div class="product-price">
                    <span>PKR {{ $product->discountPrice }}</span>
                    <span class="old-price">PKR {{ $product->orignalPrice }}</span>
                </div>
            </div>
            <div class="product-action-wrap">
                <div class="product-action-cart">
                    <button title="Add to Cart">Add to cart</button>
                </div>
                <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
            </div>
        </div>
    </div>
</div>
