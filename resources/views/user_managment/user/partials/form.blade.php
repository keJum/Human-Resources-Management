@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@isset($user->id)
    <label for="">
        Персональный id : {{@$user->id}} 
    </label>
    <hr>
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <label for="">Имя</label>
            <input type="text" name="name" id="" placeholder="Имя" value="{{@$user->name}} " class="form-control" required>
            <label for="">Email</label>
            <input type="text" name="email" id="" placeholder="Email" value="{{@$user->email}}" class="form-control" required>
        </div>
        <div class="col-sm-6">
            <label for="">Пароль</label>
            <input type="password" name="password" id="" class="form-control">
            <label for="">Потверждение</label>
            <input type="password" name="password_confirmation" id="" class="form-control">                
        </div>
    </div>
</div>


{{-- <label for="">role</label>
<input type="text" name="role" id="" placeholder="role" value="{{@$user->developer->role}}" class="form-control" required> --}}

{{-- <label for="exampleFormControlSelect1">role</label>
<select name="role" class="form-control" id="exampleFormControlSelect1">
    <option></option>
    <option {{@$user->role == 'Admin' ? 'selected="selected' : ''}} >Admin</option>
    <option {{@$user->role == 'Task manager' ? 'selected="selected' : ''}} >Task manager</option>
    <option {{@$user->role == 'Team lead' ? 'selected="selected' : ''}} >Team lead</option>
    <option {{@$user->role == 'Devoloper' ? 'selected="selected' : ''}} >Devoloper</option>
    <option {{@$user->role == 'Tester' ? 'selected="selected' : ''}} >Tester</option>
</select> --}}
{{-- 
<label for="">Специальность</label>
<input type="text" name="specialty" id="" placeholder="Специальность" value="{{@$user->developer->specialty}}" class="form-control"> --}}
{{-- 
@isset($user)
    <label for="">Навыки</label>
    <input type="text" name="skill" id="" placeholder="Навыки" value="{{@$user->developer->skill}}" class="form-control">
@endisset --}}

{{-- <label for="">Расписание</label>
<input type="text" name="schedule" id="" placeholder="Расписание" value="{{@$user->developer->schedule}}" class="form-control"> --}}


<hr>

<input type="submit" class="btn btn-primary" value="Сохранить">
