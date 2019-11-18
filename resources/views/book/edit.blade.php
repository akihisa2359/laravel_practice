<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">{{ $book->name }}</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">書籍名</th>
        <th class="text-center">価格</th>
        <th class="text-center">著者</th>
        <th class="text-center">削除</th>
      </tr>
      
      <form action="/book/{{ $book->id }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">書籍名</label>
            <input type="text" class="form-control" name="name" value="{{ $book->id }}">
      <tr>
        <td>
          <a href="/book/{{ $book->id }}/edit">{{ $book->id }}</a>
        </td>
        <td><input type="text" value={{ $book->name }}</td>
        <td>{{ $book->price }}</td>
        <td>{{ $book->author }}</td>
        <td>
          <form action="/book/{{ $book->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      </form>

    </table>
    <div><a href="/book/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
