@extends('layouts.default')

@section('title')
Tasks
@endsection

@section('content')
<div class="m-1 flex space-x-3 container mx-auto ">





    <div class="flex flex-col w-96">
        <form method="POST" action="{{route('tasks.store')}}">
            @csrf
            <input type="text" name="task" class="w-full border-2 border-gray-300 bg-white rounded-md px-2 focus:outline-none focus:ring-2 py-1 focus:ring-blue-500 focus:border-blue-500" placeholder="Insert task name">
            <input type="submit" value="Add" class="w-full border-2 bg-blue-600 mt-2 flex items-center justify-center text-white py-2 cursor-pointer hover:bg-blue-500" />

        </form>

        @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded-md">
            {{session('success')}}
        </div>
        @endif



        @if($errors->any())
        <div class="bg-red-500 text-white p-4 rounded-md mt-4">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>

    <div class="flex-grow">
        <div class="w-full  rounded-md bg-white p-4 shadow-md">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-b-2 border-gray-300 " style="border-bottom:1px solid black">
                        <th class=" border-gray-300 w-12 px-4 py-2">#</th>
                        <th class=" border-gray-300 w-full px-4 py-2">Task</th>
                        <th class=" border-gray-300 px-4 py-2"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tasks as $task)
                    <tr class="text-center " style="border-bottom:1px solid lightgray">
                        <td class="px-4 py-2"> {{$task->id}} </td>
                        <td class="border-gray-300 px-4 py-2  {{ $task->completed ? 'line-through' : '' }} "> {{$task->task}} </td>
                        <td class="border-gray-300 px-4 py-2">
                            <div class="flex space-x-2 justify-center">

                                <form method="POST" action="{{ route('tasks.completed', $task->id) }}">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="bg-green-600 text-white px-3 py-1 rounded-md cursor-pointer">
                                        &#x2713;
                                    </button>
                                </form>
                                  <form method="POST" action="{{route('tasks.destroy', $task->id)}}">  
                                    @csrf
                                    @method('delete')  
                                  <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded-md cursor-pointer">&#x10102;</button>
                                  </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>


</div>

@endsection