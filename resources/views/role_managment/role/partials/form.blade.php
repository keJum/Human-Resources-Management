

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (@$user)
    <label for="">
        Персональный id : {{@$role->id}} 
    </label>
    <hr>
@endif

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
                <label for="name">Название</label>
                <input type="text" name="name" id="name" value="{{@$role->name}} " class="form-control" required>
                
                <label for="describe">Описание</label>
                <input type="text" name="describe" id="describe" value="{{@$role->describe}}" class="form-control" required>
                <hr>
                <label for="users"> Пользователи: </label>
                <div id="users" class="form-check">
                    @foreach ($users as $user)
                        <br>
                        <input class="form-check-input" type="checkbox" value="{{$user->id}}" name="users[]" id="defaultCheck{{@$user->id}}" {{(@$user->role_id == @$role->id) ? 'checked':''}}>
                        <label class="form-check-label" for="defaultCheck{{@$user->id}}" >
                            {{$user->name}} 
                        </label>
                    @endforeach
                </div>
        </div>
       <div class="col-sm-6">
            <label for="access"> Возможности </label>
            <div id="access" class="form-check">
                <br>
                <input class="form-check-input" type="checkbox" value="1" name="access[]" id="defaultCheck1" {{(strpos(@$role->access,'1') !== false) ? 'checked':''}}>
                <label class="form-check-label" for="defaultCheck1" >
                    Возможность изменять содержимое  задачи 
                </label> 
                <br>
                <input class="form-check-input" type="checkbox" value="2" id="defaultCheck1" name="access[]" {{(strpos(@$role->access,'2') !== false) ? 'checked':''}}>
                <label class="form-check-label" for="defaultCheck1" >
                    Возможность изменять разработчика  задачи 
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="3" id="defaultCheck1" name="access[]" {{(strpos(@$role->access,'3') !== false) ? 'checked':''}}>
                <label class="form-check-label" for="defaultCheck1">
                    Возможность изменять тестировщика  задачи 
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="4" id="defaultCheck1" name="access[]" {{(strpos(@$role->access,'4') !== false) ? 'checked':''}}>
                <label class="form-check-label" for="defaultCheck1">
                    Возможность проводить контроль  задач
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="5" id="defaultCheck1" name="access[]" {{(strpos(@$role->access,'5') !== false) ? 'checked':''}}>
                <label class="form-check-label" for="defaultCheck1">
                    Возможность изменять группы
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="6" id="defaultCheck1" name="access[]" {{(strpos(@$role->access,'6') !== false) ? 'checked':''}}>
                <label class="form-check-label" for="defaultCheck1">
                    Возможность изменять информацию о пользотелях 
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="7" id="defaultCheck1" name="access[]" {{(strpos(@$role->access,'7') !== false) ? 'checked':''}} >
                <label class="form-check-label" for="defaultCheck1">
                    Возможность изменять роли
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="8" id="defaultCheck1" name="access[]" {{(strpos(@$role->access,'8') !== false) ? 'checked':''}}>
                <label class="form-check-label" for="defaultCheck1">
                    Возможность просматривать все задачи
                </label>    
            </div> 
        </div>
    </div>
    
    <hr>
        
    <input type="submit" class="btn btn-primary" value="Сохранить">       
</div>

