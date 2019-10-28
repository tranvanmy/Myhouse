@if ($categories->isNotEmpty())
    <div class="filter-section clearfix">
        <h4>{{ trans('storefront::products.category') }}</h4>

        <ul class="filter-category list-inline">
            @foreach ($categories as $category)
                <li class="{{ request('category') === $category->slug ? 'active' : '' }}">
                    <a href="{{ request()->fullUrlWithQuery(['category' => $category->slug]) }}" onclick="clearDataSearh()">
                        {{ $category->name }}
                    </a>

                    @if ($category->items->isNotEmpty())
                        @include('public.products.partials.sub_category_filter', ['subCategories' => $category->items])
                    @endif
                </li>
            @endforeach

            <script>
                function clearDataSearh()
                {
                    // document.getElementById("search-box").value = "";
                    console.log(1212);
                }
            </script>
        </ul>
    </div>
@endif
