@extends('home')

@section('card-main')
  <div class="center-button">
    <a class="btn-square-raised" href="/inquiry/add">新規問い合わせ作成</a>
  </div>

  <div class="inquiry-list">
    <h4>お問い合わせ一覧</h4>
    <table class="inquiry-table inquiry-list-table">
      <tr>
        <th>問い合わせ日時</th>
        <th>タイトル</th>
        <th>回答</th>
      </tr>
      @foreach($items as $item)
        @if($item->user_id == $id)
          <tr>
            <td>{{$item->date}}</td>
            <td><a href="/inquiry/index">{{$item->title}}</a></td>
            <td>{{$item->answer_true}}</td>
          </tr>
        @endif
      @endforeach
    </table>
  </div>
@endsection
