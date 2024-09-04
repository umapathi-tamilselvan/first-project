
<h1>Welcome</h1>
<a href="/customers/create">Add new customer</a>
@forelse ($customers as $customer )
<p><strong>{{$customer->name}}</strong>({{$customer->email}})</p>
@empty
<p>No customer avilable</p>
@endforelse
