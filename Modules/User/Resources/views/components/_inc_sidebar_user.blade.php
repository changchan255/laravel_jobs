<aside class="col-lg-3 column border-right">
    <div class="widget">
        <div class="tree_widget-sec">
            <ul>
                @foreach(config('user.sidebar') as $item)
                    <li>
                        <a href="{{ isset($item['route']) && $item['route'] ? route($item['route']) : '' }}" title="{{ $item['title'] }}">
                            <i class="{{ $item['icon'] }}"></i>{{ $item['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</aside>
