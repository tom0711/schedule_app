@extends('home')

@section('card-main')
  <div class="center-button">
    <a class="btn-square-raised" href="/inquiry/add">新規問い合わせ作成</a>
  </div>

  <h3>お問い合わせ一覧</h3>
  <table>
    @foreach($items as $item)
      <tr>
        <th>title:</th>
        <td>{{$item->title}}</td>
      </tr>
      <tr>
        <th>content;</th>
        <td>{{$item->inquiry}}</td>
      </tr>
    @endforeach
  </table>
@endsection
