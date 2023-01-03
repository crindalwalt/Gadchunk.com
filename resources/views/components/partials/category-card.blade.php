@props(['cat'])

<div class="custom-col-8">
    <div class="single-categories-5 text-center">
        <div class="single-categories-5-img">
            <a href="/category/{{$cat->slug}}"><img class="inject-me" src="{{ asset('storage/category-icon/'. $cat->icon) }}" alt=""></a>
        </div>
        <div class="categorie-content-6">
            <h4><a class="color-light" href="/category{{ $cat->slug }}">{{ $cat->name }}</a></h4>
        </div>
    </div>
</div>
