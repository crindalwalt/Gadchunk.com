{{--@props(['cat'])--}}
{{--@dd($cat->slug)--}}
<div class="custom-col-8">
    <div class="single-categories-5 text-center m-1 ">
        <div class="single-categories-5-img p-4" >
            <a href="/shop?category={{$cat->id}}">
                <img
                    class="inject-me img-fluid"
                    src="{{ asset('storage/category-icon/'. $cat->icon) }}"
                    alt="image is unable to show">
            </a>
        </div>
        <div class="categorie-content-6">
            <h4>
                <a class="color-light" href="/shop?category={{ $cat->id }}">
                    {{ $cat->name }}
                </a>
            </h4>
        </div>
    </div>
</div>
