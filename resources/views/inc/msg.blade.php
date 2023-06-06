@if (count($errors)>0)
 @foreach ($errors->all() as $error )
     
     <p>{{$error}}</p>     

 @endforeach
    
@endif

@if (session('success'))
      
<p style="background-color:green;color:aliceblue;">{{session('success')}}</p>

@endif
@if (session('error'))
      
<p style="background-color:red;color:aliceblue;">{{session('error')}}</p>

@endif