@foreach ($users as $user)
<p>{{$user->id . " " . $user->name . " " . $user->email . " " . $user->age . " " . $user->status}}</p>
  


@endforeach