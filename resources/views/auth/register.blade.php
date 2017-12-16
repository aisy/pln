@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Nama lengkap
        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
    </div>

    <div>
        Name
        <input type="text" name="username" value="{{ old('username') }}">
    </div>

    <div>
        level
        <select class="" name="level">
          <option value="customer service">Customer Service</option>
          <option value="pelayanan pelanggan">Pelayanan pelanggan</option>
          <option value="transaksi energi">Transaksi Energi</option>
        </select>
        {{-- <input type="text" name="name" value="{{ old('name') }}"> --}}
    </div>

    {{-- <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div> --}}

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
