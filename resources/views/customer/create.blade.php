<h1>Add new customer</h1>

<form action="/customers" method="POST">

@include('customer.form')

@csrf

<button>Add Customer</button>
</form>
