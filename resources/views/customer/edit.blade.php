<h1>Customer details</h1>

<form action="/customers/{{$customer->id}}" method="post">
    @method('PATCH')
    @include('customer.form')
    <div>
        <button type="submit">Save Customer</button>
    </div>
</form>