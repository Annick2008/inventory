<h2>{{ __('Items') }}</h2>



<div>
    @foreach($items as $item)
        <div>
            {{$item->invnumber}}
            {{$items->title}}
            {{$items->comment}}
            {{$items->schoolid}}
        </div>
    @endforeach
</div>
