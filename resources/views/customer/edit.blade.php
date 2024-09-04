<h1>Edit customer</h1>

<form action="/customers/{{$customer->id}}" method="Post">
@method('PATCH')

@include('customer.form')

@csrf

<button>Save Customer</button>
</form>
