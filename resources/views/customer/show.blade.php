
<div>
<strong>Name</strong>
<p>{{$customer->name}}</p>
<strong>Email</strong>
<p>{{$customer->email}}</p>
</div>

<div>
    <a href="/customers">Back</a>
</div>
<div>
    <a href="/customers/{{$customer->id}}/edit">Edit customer</a>

    <form action="/customers/{{$customer->id}}" method="POST">
      @csrf
       <button>Delete</button>
       @method('DELETE')

    </form>

</div>
