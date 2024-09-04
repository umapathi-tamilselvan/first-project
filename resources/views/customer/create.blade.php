<h1>Add new customer</h1>

<form action="/customers" method="POST">

 <div>
    <label for="name">Name</label>
<input type="text" name="name" autocomplete="off" value="{{old('name')}}">
@error('name') <p>{{$message}}</p> @enderror
</div>

<div>
    <label for="email">Email</label>
    <input type="text" name="email" autocomplete="off"  value="{{old('email')}}">
    @error('email') <p>{{$message}}</p> @enderror
</div>

<input type="hidden" name="_token" value="csrf_token">
@csrf

<button>Add Customer</button>
</form>
