@extends('home')

@section('card-main')
  <div class="inquiry-conf-area">
    <h3>お問い合わせ内容の確認</h3>
    <p>お問い合わせ内容をご確認いただき、よろしければ送信ボタンを押してください。</p>
    <table class="inquiry-table inquiry-conf">
      <!-- 確認画面へ表示 -->
      <tr>
        <th>タイトル</th>
        <td>{{$items['title']}}</td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th>
        <td>{!! nl2br($items['inquiry']) !!}</td>
      </tr>
    </table>
    <table class="inquiry-table inquiry-submit-area">
      <tr>
        <td class="inquiry-submit">
          <!-- 修正フォーム -->
          <form class="" action="/inquiry/add" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="title" value="{{$items['title']}}">
            <input type="hidden" name="inquiry" value="{{$items['inquiry']}}">
            <input class="btn-square-raised" type="submit" name="modify" value="修正">
          </form>
        </td>
        <td class="inquiry-submit">
          <!-- 送信フォーム -->
          <form class="" action="/inquiry/done" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="title" value="{{$items['title']}}">
            <input type="hidden" name="inquiry" value="{{$items['inquiry']}}">
            <input class="btn-square-raised" type="submit" name="done" value="送信">
          </form>
        </td>
      </tr>
    </table>
  </div>
@endsection
