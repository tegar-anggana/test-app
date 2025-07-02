
<h1>Users</h1>
<ul>
@foreach($users as $user)
    <li>{{ $user['name'] }}</li>
@endforeach
</ul>

<h1>Numbers</h1>
@for($i = 0; $i < 5; $i++)
    <p>Number {{ $i }}</p>
@endfor

<h1>While Loop</h1>
@php $count = 0; @endphp
@while($count < 3)
    <p>Count is {{ $count }}</p>
    @php $count++; @endphp
@endwhile

<h1>Pengguna</h1>
<ul>
@forelse($pengguna as $p)
    <li>{{ $p->name }}</li>
@empty
    <li>No users found.</li>
@endforelse
</ul>
