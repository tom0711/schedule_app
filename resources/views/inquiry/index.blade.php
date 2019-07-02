@extends('home')

@section('card-main')
  <div class="center-button">
    <a class="btn-square-raised" href="/inquiry/add">新規問い合わせ作成</a>
  </div>

  <div class="inquiry-list">
    <h4>お問い合わせ一覧</h4>
    <table class="inquiry-table inquiry-conf">
      @foreach($items as $item)
        @if($item->user_id == $id)
          <tr>
            <th>title:</th>
            <td>{{$item->title}}</td>
          </tr>
          <tr>
            <th>content;</th>
            <td>{{$item->question}}</td>
          </tr>
        @endif
      @endforeach
    </table>
  </div>
@endsection
