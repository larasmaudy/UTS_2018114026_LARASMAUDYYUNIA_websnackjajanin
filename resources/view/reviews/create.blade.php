<!DOCTYPE html>
<html>
<head>
    <title>Review</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
   
        <h1>Review</h1>
    
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
    
        <form method="POST" action="{{ url('reviews/store') }}">
   
            {{ csrf_field() }}
   
            <div class="form-group">
                <label>Nama :</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
                @if ($errors->has('nama'))
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <label>No Telp :</label>
                <input type="text" name="no_tlp" class="form-control" placeholder="no_tlp">
                @if ($errors->has('no_tlp'))
                    <span class="text-danger">{{ $errors->first('no_tlp') }}</span>
                @endif
            </div>
     
            <div class="form-group">
                <strong>Ulasan :</strong>
                <input type="text" name="ulasan" class="form-control" placeholder="Ulasan">
                @if ($errors->has('ulasan'))
                    <span class="text-danger">{{ $errors->first('ulasan') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <button class="btn btn-success btn-submit">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>