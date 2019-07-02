@extends('home')

@section('card-main')
<h3>お問い合わせ</h3>
<p>タイトル、お問い合わせ内容を入力いただき、確認ボタンを押してください。</p>
  <form class="" action="/inquiry/confirm" method="post">
    <table class="inquiry-table">
      {{ csrf_field() }}
      <tr>
        <th>タイトル</th>
      </tr>
      <tr>
        <td>
          <input type="text" name="title" value="{{ isset($items['title']) ? $items['title'] : old('title') }}">
        </td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th>
      </tr>
      <tr>
        <td>
          <textarea name="inquiry" rows="8" cols="80">{{ isset($items['inquiry']) ? $items['inquiry'] : old('inquiry') }}</textarea>
        </td>
      </tr>
    </table>
    <div class="inquiry-submit">
      <input class="btn-square-raised" type="submit" name="confirm" value="確認">
    </div>
  </form>
@endsection
