{!! csrf_field() !!}
<p><label for="nombre">
  Nombre
  <input class="form-control" type="text" name="name" value={{ $user->name or old('name')}}>
  {!! $errors->first('name', '<span class=error>:message</span>') !!}
</label></p>

<p><label for="email">
  Email
  <input class="form-control" type="email" name="email" value={{ $user->email or old('email')}}>
  {!! $errors->first('email', '<span class=error>:message</span>') !!}
</label></p>

{{--al menos que el usuario tenga un id, muestra estos campos de form--}}
@unless ($user->id)
  <p><label for="password">
    Password
    <input class="form-control" type="password" name="password">
    {!! $errors->first('password', '<span class=error>:message</span>') !!}
  </label></p>
  <p><label for="password_confirmation">
    Password Confirm
    <input class="form-control" type="password" name="password_confirmation">
    {!! $errors->first('password_confirmation', '<span class=error>:message</span>') !!}
  </label></p>
@endunless

<p><div class="checkbox">
  @foreach ($roles as $id => $name)
    <label>
      <input
          type="checkbox"
          {{--pasamos como valor el id del role--}}
          value="{{ $id }}"
          {{--preguntamos si tiene role asociado y si lo tiene aparece checkeado--}}
          {{ $user->roles->pluck('id')->contains($id) ? 'checked' : '' }}
          {{--al poder seleccionar varios roles, se meten en un array--}}
          name="roles[]">
      {{$name}}
    </label>
  @endforeach

</div></p>
{!! $errors->first('roles', '<span class=error>:message</span>') !!}
<hr>
