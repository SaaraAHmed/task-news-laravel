<!DOCTYPE html>
<html lang="en">
<head>
  <title>news</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>list news</h2>
  <p>table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>content</th>
        <th>auther</th>
        <th>published</th>        
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
     @foreach($news as $new)
      <tr>
        <td>{{ $new->newsTitle }}</td>
        <td>{{ $new->content}}</td>
        <td>{{ $new->author }}</td>
        <td>
           @if($new->published)
              yes
           @else
              no 
            @endif  
        </td>
        <td><a href="editNews/{{ $new->id }}" >Edit</a></td>
       </tr>
       @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
