
 <ul class="list-unstyled">
        @foreach($items as $menu_item)
             <li>
                  <a class="py-1 d-block" href="{{ $menu_item->link() }}"><span class="ion-ios-arrow-forward mr-3"></span>{{ $menu_item->title }}</a>
             </li>
        @endforeach
</ul>
