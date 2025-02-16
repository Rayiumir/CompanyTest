<x-AdminLayout>
    <x-slot name="title">
        - کاربران
    </x-slot>
    <a href="{{ route('users.create') }}" type="button" class="btn btn-primary rounded-5">افزودن کاربر</a>
    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th scope="col" width="50px">#</th>
            <th scope="col">نام و نام خانوادگی</th>
            <th scope="col" width="300px">ایمیل</th>
            <th scope="col" width="100px">سطح کاربری</th>
            <th scope="col" width="200px">تاریخ عضویت</th>
            <th scope="col" width="80px">عملیات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $row)
                <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->role}}</td>
                    <td>{{$row->created_at}}</td>
                    <td class="text-center">
                        <a href="{{ route('users.edit', $row->id) }}"><i class="fa-duotone fa-edit text-secondary"></i></a>
                        <a onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash text-danger"></i></a>
                        <form id="trash-{{$row->id}}" action="{{ route('users.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</x-AdminLayout>
