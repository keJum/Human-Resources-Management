@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('task_managment.task.create')}}" class="btn btn-primay pull-right">
            Создать задачу
        </a>
        <table class="table">
            <thead>
                <th>Название</th>
                <th>Важность</th>
                <th>Прогресс</th>
                <th>Назначил</th>
                <th>Разработчик</th>
                <th>Тестер</th>
                <th class="text-right">Действие</th>
            </thead>
            <tbody>
                    @forelse (@$tasks as $task)

                    <tr {{ $task->taskProgress == 5 ? 'bgcolor="#ddd"' : '' }} >    
                        <td>
                            {{$task->taskName}}
                        </td>
                        <td>
                            {{$task->taskImportance}}
                        </td>
                        <td>
                            {{$task->taskProgress}}
                        </td>
                        <td>
                            {{$task->provider->name}}
                        </td>
                        <td>
                            {{$task->tester->name}}
                        </td>
                        <td>
                            {{$task->developer->name}}
                        </td>
                        <td class="text-right">
                            <form onsubmit="if(confirm('Удалить?')){return true} else {return false} " action="{{route('task_managment.task.destroy',$task)}}" method="post">
                                {{method_field('DELETE')}}
                                {{ csrf_field() }}
                                <a href="{{route('task_managment.task.edit',$task)}}" class="btn btn-default">Ред.</a>
                                <button type="submit" class="btn">Удал.</button>
                            </form>
                        </td>
                    </tr>                    
                    @empty
                    <tr>
                        <td colspan="3" class="text-center"><h2>Данные отсутвуют</h2></td>
                    </tr>
                    @endforelse
            </tbody>
        </table>
    </div>
@endsection
