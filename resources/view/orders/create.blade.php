<!DOCTYPE html>
<html>
<head>
    <title>Form Order</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
   
        <h1>Isi Form Dibawah ini Untuk Pemesanan Lebih Lanjut</h1>
    
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
    
        <form method="POST" action="{{ url('Orders/store') }}">
   
            {{ csrf_field() }}
   
            <div class="form-group">
                <label>Nama :</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
                @if ($errors->has('nama'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <label>No. Whatsapp:</label>
                <input type="text" name="no_wa" class="form-control" placeholder="no_wa">
                @if ($errors->has('no_wa'))
                    <span class="text-danger">{{ $errors->first('no_wa') }}</span>
                @endif
            </div>
     
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
    
            <div class="form-group">
                <button class="btn btn-success btn-submit">Kirim</button>
            </div>
        </form>
    </div>
</body>
</html>