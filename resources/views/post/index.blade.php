<x-AdminLayout>
    <div class="card  rounded-4">
        <div class="card-body">
            <a href="{{ route('posts.create') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> افزودن پست جدید </a>
            <table class="table table-bordered mt-4">
                <thead>
                <tr>
                    <th scope="col" width="50px">#</th>
                    <th scope="col" width="200px">عکس</th>
                    <th scope="col">عنوان</th>
                    <th scope="col" width="150px">نویسنده</th>
                    <th scope="col" width="150px">تاریخ ایجاد</th>
                    <th scope="col" width="100px">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $row) @endforeach
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $row->getMetabox('metabox_field') ?? 'No value set' }}</td>
                        <td>{{ $row->title }}</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td class="text-center">
                            <a href="{{ route('posts.edit', $row->id) }}"><i class="fa-duotone fa-edit text-secondary"></i></a>
                            <a><i class="fa-duotone fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-AdminLayout>
