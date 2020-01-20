<h1>customer details</h1>
<div>
    <a href="/customers">back</a>
</div>
<strong>Name</strong>
<p>{{$customer->name}}</p>

<strong>Email</strong>
<p>{{$customer->email}}</p>

<div>
    <a href="/customers/{{$customer->id}}/edit">Edit</a>

    <form action="/customers/{{$customer->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>

    </form>
</div>