<h1>Profile Information</h1>

@if($age >= 18)
    <p>You are an adult.</p>
@elseif($age >= 13)
    <p>You are a teenager.</p>
@else
    <p>You are a child.</p>
@endif

<hr>

@isset($address)
    <p>Address: {{ $address }}</p>
@endisset

@empty($nickname)
    <p>No nickname provided.</p>
@else
    <p>Nickname: {{ $nickname }}</p>
@endempty

<hr>

@isset($hobbies)
    @if(count($hobbies) > 0)
        <p>Hobbies:</p>
        <ul>
            @foreach($hobbies as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    @else
        <p>No hobbies listed.</p>
    @endif
@endisset
