@extends('home')

@section('card-main')
  <div class="center-button m-top-1rem">
    <a class="btn-square-raised" href="/inquiry/add">新規問い合わせ作成</a>
  </div>

  <div class="inquiry-list">
    <h4>お問い合わせ一覧</h4>
    <table class="inquiry-table inquiry-list-table pickup accordion2">
      <tr>
        <th>問い合わせ日時</th>
        <th>タイトル</th>
        <th>回答</th>
      </tr>
        @foreach($items as $item)
          @if($item->user_id == $id)
            <tr class="open_dialog">
              <td>{{$item->date}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->answer_true}}</td>
            </tr>
          @endif
        @endforeach
    </table>
  </div>
  <div id="dialog" class="">
    <div class="dialog_box">
      <span class="close_dialog">×</span>
      <table>
        @foreach($items as $item)
          @if($item->user_id == $id)
            <tr>
              <th>問い合わせ日時</th>
            </tr>
            <tr>
              <td>{{$item->date}}</td>
            </tr>
            <tr>
              <th>タイトル</th>
            </tr>
            <tr>
              <td>{{$item->title}}</td>
            </tr>
            <tr>
              <th>問い合わせ内容</th>
            </tr>
            <tr>
              <td>{{$item->question}}</td>
            </tr>
            <tr>
              <th>回答</th>
            </tr>
            <tr>
              <td>{{$item->answer}}</td>
            </tr>
          @endif
        @endforeach
      </table>
    </div>
  </div>
@endsection
