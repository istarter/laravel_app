<h1>Add new customer</h1>

<form action="/customers" method="post">
    @include('customer.form')
    <div>
        <button type="submit">Add new Customer</button>
    </div>
</form>