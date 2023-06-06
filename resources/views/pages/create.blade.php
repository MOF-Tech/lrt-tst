@extends("layouts.master")

@section('styles')
<style>
    * {
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background-color: #f2f2f2;
}

.form-container {
  max-width: 400px;
  width: 100%;
  padding: 20px;
  background-color: #ffffff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}

.form-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-container form {
  transition: transform 0.6s ease-in-out;
}

.form-container.register-form {
  transform: translateX(400px);
}

.form-container.login-form {
  transform: translateX(0);
}

.form-container.register-form .login-form {
  transform: translateX(-400px);
}

.form-container.register-form h2 {
  margin-bottom: 30px;
}

.form-container input[type="text"],
.form-container input[type="password"],
.form-container input[type="email"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.form-container button {
  width: 100%;
  padding: 10px;
  background-color: #4caf50;
  color: #ffffff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.form-container button:hover {
  background-color: #45a049;
}

.form-container .toggle-form {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
  text-decoration: underline;
  color: #666;
  cursor: pointer;
}

</style>
@endsection
@section('content')

<div class="form-container">
    <h1>Here is where you create a post</h1>
    <form  action="{{url('/posts')}}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" placeholder="tile of the person" value="" required>
        <label for="body">Body</label>
        <textarea name="body" id="" cols="30" rows="10"  required></textarea>
        <input type="submit" >
    </form>
  </div>


  


@endsection