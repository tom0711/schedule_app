<!-- 言語切り替え -->
<li class="dropdown" id="nav-lang">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    {{ Config::get('languages')[App::getLocale()] }}
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    @foreach(Config::get('languages') as $lang => $language)
      @if($lang != App::getLocale())
        <li>
          <a href="{{ route('lang.switch', $lang )}}">{{$language}}</a>
        </li>
      @endif
    @endforeach
  </ul>
</li>
