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
            <tr class="ac1">
              <td>{{$item->date}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->answer_true}}</td>
            </tr>
              <tr class="inner">
                <td colspan="3">
                  <li>問い合わせ内容</li>
                  <li>{{$item->question}}</li>
                  @if(!empty($item->answer))
                    <li>回答</li>
                    <li>{{$item->answer}}</li>
                  @endif
                </td>
              </tr>
          @endif
        @endforeach
    </table>
  </div>
  <ul class="accordion2">
</ul>
@endsection
