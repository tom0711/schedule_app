@extends('home')

@section('card-main')
  <div class="center-button m-top-1rem">
    <a class="btn-square-raised" href="/inquiry/add">新規問い合わせ作成</a>
  </div>

  <div class="inquiry-list">
    <h4>お問い合わせ一覧</h4>
    <table class="inquiry-table inquiry-list-table pickup">
      <tr>
        <th>問い合わせ日時</th>
        <th>タイトル</th>
        <th>回答</th>
      </tr>
      @foreach($items as $item)
        @if($item->user_id == $id)
          <tr>
            <td>{{$item->date}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->answer_true}}</td>
          </tr>
        @endif
      @endforeach
    </table>
  </div>

  <div class="dialog">
    <table>
      @foreach($items as $item)
        <tr>
          <th>タイトル</th>
          <td>{{$item->title}}</td>
        </tr>
        <tr>
          <th>問い合わせ内容</th>
          <td>{{$item->question}}</td>
        </tr>
        <tr>
          <th>回答</th>
          <td>{{$item->answer}}</td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection
