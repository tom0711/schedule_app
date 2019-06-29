@extends('home')

@section('card-main')
  <table class="inquiry-table">
    <form class="" action="/inquiry/confirm" method="post">
      {{ csrf_field() }}
      <tr>
        <th>タイトル</th>
      </tr>
      <tr>
        <td>
          <input type="text" name="title" value="{{old('title')}}">
        </td>
      </tr>
      <tr>
        <th>問い合わせ内容</th>
      </tr>
      <tr>
        <td>
          <textarea name="inquiry" rows="8" cols="80">{{old('inquiry')}}</textarea>
        </td>
      </tr>
      <tr>
        <th></th>
      </tr>
      <tr>
        <td class="inquiry-submit">
          <input class="btn-square-raised" type="submit" name="" value="送信">
        </td>
      </tr>
    </form>
  </table>
@endsection
