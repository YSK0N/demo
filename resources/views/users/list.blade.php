<div>
    <h1>User list
        {{$name}}
        <p>name : {{$user->name}}</p>
        <p>email : {{$user->email}}</p>
        <ul>
        @foreach ( $user_list as $value )
        <ul>
        <p>name : {{$value->name}}</p>
        <p>email:{{$value->email}}</p>
            
        @endforeach
    </h1>
</div>