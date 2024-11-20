<form class="" method="{{$method??""}}" action="{{$action??""}}">
    @if(isset($csrf)) @csrf @endif
    <button class="{{$class ?? ""}}">
        {{$slot}}
    </button>
</form>
